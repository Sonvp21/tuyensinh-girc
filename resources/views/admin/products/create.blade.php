<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.products.index') }}">Danh sách sản phẩm</a></li>
                <li><a class="text-teal-600">Thêm mới</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5">

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <div class="grid xl:grid-cols-3 grid-cols-1 gap-4 !m-0">
                    {{-- cột 1 --}}
                    <div class="col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                            <x-text-input label="Tên sản phẩm" name="name" placeholder=""
                                value="{{ old('name') }}" />

                            <x-text-input label="Chủ sở hữu" name="owner" placeholder=""
                                value="{{ old('owner') }}" />

                            <x-text-input label="Địa chỉ" name="address" placeholder="" value="{{ old('address') }}" />


                            <x-text-input label="Liên hệ" name="contact" placeholder="" value="{{ old('contact') }}" />

                            <x-text-input label="Đại diện pháp luật" name="representatives" placeholder=""
                                value="{{ old('representatives') }}" />

                            <x-text-input label="Ghi chú" name="status" placeholder="" value="{{ old('status') }}" />
                        </div>
                    </div>
                    {{-- Cột 2 --}}
                    <div class="xl:col-span-1 col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                            {{-- huyện --}}
                            <label class="form-control ">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Huyện</span>
                                </div>
                                <select name="district_id" id="district_id"
                                    class="input input-bordered w-full @error('district_id') border-red-500 @enderror">
                                    <option value="">Chọn huyện</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}"
                                            {{ old('district_id', request('district_id')) == $district->id ? 'selected' : '' }}>
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('district_id')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>
                            {{-- xã  --}}
                            <label class="form-control hidden" id="commune-label">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Xã</span>
                                </div>
                                <select name="commune_id" id="commune_id"
                                    class="input input-bordered w-full @error('commune_id') border-red-500 @enderror">
                                    <option value="">Chọn xã</option>
                                    @foreach ($communes as $commune)
                                        <option value="{{ $commune->id }}"
                                            {{ old('commune_id') == $commune->id ? 'selected' : '' }}>
                                            {{ $commune->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('commune_id')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>

                            <x-text-input label="Ngày đăng ký" name="submission_date" placeholder=""
                                value="{{ old('submission_date') }}" type="date" />

                        </div>

                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg mt-3">
                            <!-- Tệp đính kèm và hình ảnh -->
                            <input type="hidden" name="document_paths" id="documentPath">
                            <input type="hidden" name="image_paths" id="imagePath">

                            <label class="form-control ">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Tệp đính kèm (tối đa
                                        10MB)</span>
                                </div>
                                <input type="file" class="filepond" multiple data-allow-reorder="true"
                                    name="document_link[]" id="document_link">
                                @error('document_link[]')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>

                            <label class="form-control ">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Ảnh (tối đa 10MB)</span>
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

                <div class="flex justify-center p-5">
                    <button type="submit" class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Thêm</button>

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
        @include('components.filepond-create')
    @endpushonce

</x-admin-layout>
