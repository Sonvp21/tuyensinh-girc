<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="text-gray-800 text-3xl uppercase font-semibold leading-tight flex">
            <span class="text-3xl uppercase font-semibold">
                Danh sách
            </span>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5 p-3 text-sm">
            <div class="overflow-x-auto">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Form upload -->
                            <form action="{{ route('image.search') }}" method="POST" enctype="multipart/form-data"
                                id="uploadForm" class="flex">
                                @csrf
                                <div class="form-group">
                                    <label for="image">Chọn ảnh để tải lên:</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button type="submit" class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">
                                    Tải lên và Tìm kiếm
                                </button>
                            </form>
                        </div>

                        <!-- Hiển thị ảnh đã tải lên -->
                        @if (Session::has('uploaded_image_path'))
                            <h2 class="mt-5 text-left">Ảnh đã tải lên:</h2>
                            <div class="grid grid-cols-4 gap-4">
                                <div>
                                    @php
                                        $path = Session::get('uploaded_image_path');
                                        $url = asset('storage/' . $path);
                                    @endphp
                                    <img src="{{ $url }}" class="img-fluid mt-3" alt="Uploaded Image">
                                </div>
                            </div>
                        @endif

                    </div>

                    <!-- Hiển thị các ảnh tương đồng -->
                    <div class="row mt-5">
                        @if (!empty($similarImages) && count($similarImages) > 0)
                            <h2 class="text-left">Các ảnh tương đồng:</h2>
                            <div class="grid grid-cols-4 gap-4">
                                @foreach ($similarImages as $index => $similarImage)
                                    <div
                                        class="relative border border-gray-300 rounded-lg p-2 {{ $index >= 4 ? 'hidden more-images' : '' }}">
                                        <p class="text-center mb-2 font-semibold">{{ $similarImage['product']->name }}
                                        </p>
                                        @php
                                            $similarImageUrl = asset('storage/' . $similarImage['image']);
                                        @endphp
                                        <img src="{{ $similarImageUrl }}" class="img-fluid" alt="Similar Image">
                                        <p
                                            class="absolute bottom-0 left-0 w-full bg-white bg-opacity-75 text-center py-2">
                                            Độ tương đồng: {{ number_format($similarImage['similarity'] * 100, 2) }}%
                                        </p>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Nút Xem thêm -->
                            @if (count($similarImages) > 4)
                                <div class="mt-5 text-center">
                                    <button id="showMoreBtn" class="btn btn-outline btn-primary">Xem thêm</button>
                                </div>
                            @endif
                        @else
                            <p>Không tìm thấy ảnh tương tự.</p>
                        @endif
                        <script>
                            document.getElementById('showMoreBtn').addEventListener('click', function() {
                                var hiddenImages = document.querySelectorAll('.more-images');
                                hiddenImages.forEach(function(image) {
                                    image.classList.remove('hidden');
                                });
                                // Ẩn nút sau khi tất cả ảnh đã được hiển thị
                                this.style.display = 'none';
                            });
                        </script>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
