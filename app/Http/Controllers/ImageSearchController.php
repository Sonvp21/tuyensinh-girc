<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageSearchController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.products.image_search.upload');
    }

    public function uploadAndSearch(Request $request)
    {
        // Xác thực ảnh
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        // Xoá các tệp ảnh cũ trong thư mục public/uploads
        $files = Storage::disk('public')->files('uploads');
        Storage::disk('public')->delete($files);

        // Lưu ảnh vào public/uploads với tên gốc của tệp
        $originalName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('uploads', $originalName, 'public');

        Session::put('uploaded_image_path', $path);

        // Nhận diện và tìm kiếm ảnh
        $similarImages = $this->findSimilarImages($path);

        // Sắp xếp mảng $similarImages từ cao đến thấp theo mức độ tương đồng
        usort($similarImages, function ($a, $b) {
            return $b['similarity'] <=> $a['similarity'];
        });

        return view('admin.products.image_search.upload', compact('similarImages'));
    }

    private function findSimilarImages($imagePath)
    {
        // Đọc ảnh đã upload và phát hiện cạnh
        $uploadedImage = Image::make(Storage::disk('public')->path($imagePath))->resize(256, 256);
        $uploadedEdges = $this->detectEdges($uploadedImage);
        $uploadedHistogram = $this->getHistogram($uploadedImage);

        $similarImages = [];

        // Lấy tất cả các sản phẩm và so sánh ảnh của chúng với ảnh đã upload
        $products = Product::with('images')->get();

        foreach ($products as $product) {
            foreach ($product->images as $image) {
                $imagePath = $image->file_path;

                // Kiểm tra ảnh có tồn tại không
                if (Storage::disk('public')->exists($imagePath)) {
                    // Tạo đối tượng hình ảnh từ đường dẫn và phát hiện cạnh
                    $databaseImage = Image::make(Storage::disk('public')->path($imagePath))->resize(256, 256);
                    $databaseEdges = $this->detectEdges($databaseImage);
                    $databaseHistogram = $this->getHistogram($databaseImage);

                    // So sánh các đặc điểm của hai ảnh
                    $histogramSimilarity = $this->compareHistograms($uploadedHistogram, $databaseHistogram);
                    $shapeSimilarity = $this->compareShapes($uploadedEdges, $databaseEdges);

                    // Tính độ tương đồng tổng thể
                    $overallSimilarity = (0.5 * $histogramSimilarity) + (0.5 * $shapeSimilarity);

                    // Lưu thông tin vào mảng $similarImages nếu similarity >= 0.1
                    if ($overallSimilarity >= 0.1) {
                        $similarImages[] = [
                            'image' => $imagePath,
                            'similarity' => $overallSimilarity,
                            'product' => $product,
                        ];
                    }
                }
            }
        }

        return $similarImages;
    }

    private function detectEdges($image)
    {
        // Chuyển ảnh về grayscale
        $grayscaleImage = $image->greyscale();
    
        // Thay vì sử dụng phương thức `edge`, hãy tăng độ tương phản hoặc làm sắc nét hình ảnh
        // Thực hiện một số thao tác khác để làm rõ cạnh, có thể thử tăng độ tương phản hoặc độ sáng
        $grayscaleImage->contrast(15); // Tăng độ tương phản
    
        // Bạn có thể làm sắc nét hình ảnh (nếu GD không hỗ trợ `edge`)
        $sharpenedImage = $grayscaleImage->sharpen(10); // Làm sắc nét hình ảnh
    
        return $sharpenedImage; // Trả về hình ảnh đã xử lý
    }
    

    private function getHistogram($image)
    {
        $histogram = [];
        $width = $image->width();
        $height = $image->height();

        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $color = $image->pickColor($x, $y, 'array');
                $key = implode(',', $color);
                if (!isset($histogram[$key])) {
                    $histogram[$key] = 0;
                }
                $histogram[$key]++;
            }
        }

        return $histogram;
    }

    private function compareHistograms($hist1, $hist2)
    {
        $similarity = 0;
        $totalPixels = array_sum($hist1) + array_sum($hist2);

        foreach ($hist1 as $color => $count1) {
            $count2 = $hist2[$color] ?? 0;
            $similarity += min($count1, $count2);
        }

        return $similarity / $totalPixels; // Trả về giá trị từ 0 đến 1
    }

    private function compareShapes($edges1, $edges2)
    {
        // Đếm số pixel trắng trong mỗi ảnh
        $count1 = $this->countWhitePixels($edges1);
        $count2 = $this->countWhitePixels($edges2);
    
        // Tránh chia cho 0
        if ($count1 == 0 || $count2 == 0) {
            return 0;
        }
    
        // Tính toán độ tương đồng dựa trên tỷ lệ số pixel trắng
        return min($count1, $count2) / max($count1, $count2); // Giá trị từ 0 đến 1
    }
    
    private function countWhitePixels($image)
    {
        $width = $image->width();
        $height = $image->height();
        $whitePixelCount = 0;
    
        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $pixel = $image->pickColor($x, $y, 'array');
                // Kiểm tra nếu pixel là trắng (hoặc gần trắng)
                if ($pixel[0] > 240 && $pixel[1] > 240 && $pixel[2] > 240) {
                    $whitePixelCount++;
                }
            }
        }
    
        return $whitePixelCount; // Trả về số lượng pixel trắng
    }
    
}
