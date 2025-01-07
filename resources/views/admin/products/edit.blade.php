<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.products.index') }}">Danh sách sản phẩm</a></li>
                <li><a class="text-teal-600">Chỉnh sửa</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5">

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div class="grid xl:grid-cols-3 grid-cols-1 gap-4 !m-0">
                    {{-- cột 1 --}}
                    <div class="col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                            <x-text-input label="Tên sản phẩm" name="name" placeholder=""
                                value="{{ old('name', $product->name) }}" />

                            <x-text-input label="Chủ sở hữu" name="owner" placeholder=""
                                value="{{ old('owner', $product->owner) }}" />

                            <x-text-input label="Địa chỉ" name="address" placeholder=""
                                value="{{ old('address', $product->address) }}" />

                            <x-text-input label="Liên hệ" name="contact" placeholder=""
                                value="{{ old('contact', $product->contact) }}" />

                            <x-text-input label="Đại diện pháp luật" name="representatives" placeholder=""
                                value="{{ old('representatives', $product->representatives) }}" />

                            <x-text-input label="Ghi chú" name="status" placeholder=""
                                value="{{ old('status', $product->status) }}" />
                        </div>
                    </div>
                    {{-- Cột 2 --}}
                    <div class="xl:col-span-1 col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">

                            {{-- District --}}
                            <label class="form-control ">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Huyện</span>
                                </div>
                                <select name="district_id" id="district_id"
                                    class="input input-bordered w-full @error('district_id') border-red-500 @enderror">
                                    <option value="">Chọn huyện</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}"
                                            {{ old('district_id', $product->district_id) == $district->id ? 'selected' : '' }}>
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('district_id')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>

                            {{-- Commune --}}
                            <label class="form-control hidden " id="commune-label">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Xã</span>
                                </div>
                                <select name="commune_id" id="commune_id"
                                    class="input input-bordered w-full @error('commune_id') border-red-500 @enderror">
                                    <option value="">Chọn xã</option>
                                    @foreach ($communes as $commune)
                                        <option value="{{ $commune->id }}"
                                            {{ old('commune_id', $product->commune_id) == $commune->id ? 'selected' : '' }}>
                                            {{ $commune->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('commune_id')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>


                            <x-text-input label="Ngày đăng ký" name="submission_date" placeholder=""
                                value="{{ old('submission_date', $product->submission_date ? \Carbon\Carbon::parse($product->submission_date)->format('Y-m-d') : '') }}"
                                type="date" />

                        </div>

                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg mt-3">
                            {{-- tệp đính kèm --}}
                            <input type="hidden" id="documentData"
                                value="{{ json_encode(
                                    $product->documents->map(function ($doc) {
                                        return [
                                            'id' => $doc->id,
                                            'name' => $doc->file_name,
                                            'size' => Storage::disk('public')->exists($doc->file_path)
                                                ? Storage::disk('public')->size($doc->file_path)
                                                : 'Không tìm thấy tệp',
                                            'path' => Storage::url($doc->file_path),
                                            'isExisting' => Storage::disk('public')->exists($doc->file_path),
                                        ];
                                    }),
                                ) }}" />
                            <input type="hidden" name="document_paths" id="documentPath" />

                            <label class="form-control ">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Tệp đính kèm (tối đa
                                        10MB)</span>
                                </div>
                                <input type="file" class="filepond" multiple data-allow-reorder="true"
                                    name="document_link[]" id="document_link" />
                                @error('document_link[]')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>

                            {{-- hình ảnh --}}
                            <input type="hidden" id="existingImages"
                                value="{{ json_encode(
                                    $product->images->map(function ($image) {
                                        return [
                                            'id' => $image->id,
                                            'name' => $image->file_name,
                                            'size' => Storage::disk('public')->exists($image->file_path)
                                                ? Storage::disk('public')->size($image->file_path)
                                                : 'Không tìm thấy tệp',
                                            'path' => Storage::url($image->file_path),
                                            'file_path' => $image->file_path,
                                            'isExisting' => Storage::disk('public')->exists($image->file_path),
                                        ];
                                    }),
                                ) }}" />
                            {{-- Input cho ảnh sẽ giữ lại (cả cũ và mới) --}}
                            <input type="hidden" name="retained_images" id="retainedImages" />
                            {{-- Input cho ảnh mới upload --}}
                            <input type="hidden" name="new_images" id="newImages" />
                            <label class="form-control">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Hình ảnh (tối đa 10MB)</span>
                                </div>
                                <input type="file" id="image_link" name="image_link[]" multiple accept="image/*"
                                    class="filepond" />
                                @error('image_link')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>
                            <style>
                                .filepond--credits {
                                    display: none !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center pb-3">
                    <button type="submit" class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Lưu</button>

                    <a href="{{ route('admin.products.index') }}"
                        class="btn btn-outline btn-error !min-h-9 h-9 w-fit mt-2 mx-4">Huỷ</a>
                </div>
            </form>

        </div>
    </div>

    @pushonce('bottom_scripts')
        {{-- lấy xã theo huyện  --}}
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src='{{ asset('adminpage/get_communes.js') }}'></script>
        <script>
            var getCommunesUrl = "{{ route('admin.patents.getCommunes', '') }}";
            var isEditMode = $('input[name="_method"]').length > 0; // Check if it's edit mode

            $(document).ready(function() {
                // Show or hide the commune label based on the mode
                if (!isEditMode) {
                    $('#district_id').change(function() {
                        var selectedDistrict = $(this).val();

                        if (selectedDistrict) {
                            $('#commune-label').removeClass('hidden'); // Show commune label
                        } else {
                            $('#commune-label').addClass('hidden'); // Hide commune label
                        }
                    });
                } else {
                    // Ensure commune label is always shown in edit mode
                    $('#commune-label').removeClass('hidden');
                }
            });
        </script>

        {{-- Sử dụng filepond --}}
        @include('components.filepond-edit')
    @endpushonce

</x-admin-layout>
