<!DOCTYPE html>
<html lang="vi">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Trang tuyển sinh 2025 của Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên - Cung cấp thông tin ngành học, chỉ tiêu tuyển sinh và hướng dẫn đăng ký.">
    <meta name="keywords" content="Tuyển sinh 2025, Đại học Nông Lâm, Thái Nguyên, đăng ký học, đại học, ngành học">
    <meta name="author" content="Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên">
    
    <!-- Open Graph (OG) for social sharing -->
    <meta property="og:title" content="Tuyển Sinh 2025 - Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên">
    <meta property="og:description" content="Thông tin chi tiết về tuyển sinh 2025 tại Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên.">
    <meta property="og:image" content="https://example.com/og-image.jpg"> <!-- Cập nhật link ảnh thumbnail -->
    <meta property="og:url" content="https://example.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tuyển Sinh 2025 - Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên">
    <meta name="twitter:description" content="Thông tin tuyển sinh 2025, hướng dẫn đăng ký tại Trung tâm Nghiên cứu Địa tin học - Đại học Nông Lâm Thái Nguyên.">
    <meta name="twitter:image" content="https://example.com/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('home/logo Remove-bg.png') }}">
    <title>Danh sách đăng ký</title>

    <!-- Tailwind CSS & DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

</head>

<body class="md:bg-gray-100 md:p-5">

    <div class="container mx-auto bg-white p-2 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">📋 Danh sách đăng ký</h2>
    
        <!-- Bảng dữ liệu -->
        <div class="overflow-x-auto hidden sm:block">
            <table id="applyTable" class="min-w-full border border-gray-300 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <th class="px-4 py-2 border">STT</th>
                        <th class="px-4 py-2 border">Họ & Tên</th>
                        <th class="px-4 py-2 border">SĐT</th>
                        <th class="px-4 py-2 border">Ngày Sinh</th>
                        <th class="px-4 py-2 border">Địa Chỉ</th>
                        <th class="px-4 py-2 border">Tỉnh</th>
                        <th class="px-4 py-2 border">Trường THPT</th>
                        <th class="px-4 py-2 border">Ngành Học</th>
                        <th class="px-4 py-2 border">Facebook</th>
                        <th class="px-4 py-2 border">Thời Gian Đăng Ký</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allApplies as $key => $apply)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $apply->name }}</td>
                            <td class="px-4 py-2">{{ $apply->phone }}</td>
                            <td class="px-4 py-2">{{ date('d/m/Y', strtotime($apply->birthday)) }}</td>
                            <td class="px-4 py-2">{{ $apply->address }}</td>
                            <td class="px-4 py-2">{{ $apply->province }}</td>
                            <td class="px-4 py-2">{{ $apply->high_school }}</td>
                            <td class="px-4 py-2">{{ $apply->major }}</td>
                            <td class="px-4 py-2 text-center">
                                @if ($apply->facebook_link)
                                    <a href="{{ $apply->facebook_link }}" target="_blank" class="text-blue-600 hover:text-blue-800">🔗 Xem</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-2">{{ date('H:i, d/m/Y', strtotime($apply->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <!-- Dạng thẻ trên điện thoại -->
        <div class="relative md:hidden">
            <!-- Bộ lọc -->
            <form method="GET" action="{{ route('list.dangky') }}" class="mb-4 flex flex-wrap gap-2">
            <input type="hidden" name="page" value="1"> <!-- Reset về trang 1 khi lọc -->

            <!-- Lọc theo ngành học -->
            <select name="major" class="select select-bordered w-full sm:w-auto" onchange="this.form.submit()">
                <option value="">📚 Tất cả ngành</option>
                <option value="Công nghệ và đổi mới sáng tạo" {{ request('major') == 'Công nghệ và đổi mới sáng tạo' ? 'selected' : '' }}>Công nghệ và đổi mới sáng tạo</option>
                <option value="Ứng dụng trí tuệ nhân tạo" {{ request('major') == 'Ứng dụng trí tuệ nhân tạo' ? 'selected' : '' }}>Ứng dụng trí tuệ nhân tạo</option>
                <option value="Quản lý thông tin" {{ request('major') == 'Quản lý thông tin' ? 'selected' : '' }}>Quản lý thông tin</option>
            </select>

            <!-- Lọc theo tỉnh -->
            <select name="province" class="select select-bordered w-full sm:w-auto" onchange="this.form.submit()">
                <option value="">📍 Tất cả tỉnh</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province }}" {{ request('province') == $province ? 'selected' : '' }}>
                        {{ $province }}
                    </option>
                @endforeach
            </select>
        </form>

            <!-- Bọc table trong div có cuộn ngang -->
            <div class="overflow-x-auto border border-gray-300 shadow-md rounded-lg">
                <table class="table w-full">
                    <!-- Head -->
                    <thead class="bg-base-200 text-base-content">
                        <tr>
                            <th class="px-3 py-2">STT</th>
                            <th class="px-3 py-2">Họ & Tên</th>
                            <th class="px-3 py-2">SĐT</th>
                            <th class="px-3 py-2">Ngày Sinh</th>
                            <th class="px-3 py-2">Địa Chỉ</th>
                            <th class="px-3 py-2">Tỉnh</th>
                            <th class="px-3 py-2">Trường THPT</th>
                            <th class="px-3 py-2">Ngành Học</th>
                            <th class="px-3 py-2">Facebook</th>
                            <th class="px-3 py-2">Thời Gian Đăng Ký</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applieMobiles as $key => $apply)
                            <tr class="hover">
                                <td class="px-3 py-2 text-center">
                                    {{ ($applieMobiles->currentPage() - 1) * $applieMobiles->perPage() + $loop->iteration }}
                                </td>
                                <td class="px-3 py-2">{{ $apply->name }}</td>
                                <td class="px-3 py-2">{{ $apply->phone }}</td>
                                <td class="px-3 py-2">{{ date('d/m/Y', strtotime($apply->birthday)) }}</td>
                                <td class="px-3 py-2">{{ $apply->address }}</td>
                                <td class="px-3 py-2">{{ $apply->province }}</td>
                                <td class="px-3 py-2">{{ $apply->high_school }}</td>
                                <td class="px-3 py-2">{{ $apply->major }}</td>
                                <td class="px-3 py-2 text-center">
                                    @if ($apply->facebook_link)
                                        <a href="{{ $apply->facebook_link }}" target="_blank" class="text-blue-600 hover:text-blue-800">🔗 Xem</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="px-3 py-2">{{ date('H:i, d/m/Y', strtotime($apply->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Phân trang cố định -->
            <div class="mt-4 flex justify-center sticky bottom-0 bg-white py-2 shadow-md">
                {{ $applieMobiles->links() }}
            </div>
        </div>

    </div>
    
    <script>
        $(document).ready(function() {
            let table = $('#applyTable').DataTable({
                "paging": true,
                "lengthMenu": [10, 25, 50, 100],
                "ordering": true,
                "searching": true,
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ dòng",
                    "info": "Hiển thị _START_ đến _END_ trong _TOTAL_ kết quả",
                    "search": "🔍 Tìm kiếm:",
                    "paginate": {
                        "first": "Đầu",
                        "last": "Cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                },
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'excelHtml5',
                    text: '📥 Xuất Excel',
                    title: 'Danh_sach_dang_ky',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':visible'
                    }
                }]
            });

            // Nút xuất Excel bên ngoài DataTable
            $('#exportExcel').on('click', function() {
                table.button('.buttons-excel').trigger();
            });
        });
    </script>

</body>

</html>
