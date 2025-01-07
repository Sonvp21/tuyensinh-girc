<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.posts.index') }}">Bài viết</a></li>
                <li><a class="text-teal-600">Thêm mới</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5">

            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div class="grid xl:grid-cols-3 grid-cols-1 gap-4 !m-0">
                    <div class="col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                            {{-- <label class="form-control">
                                <div class="label">
                                    <span class="text-sm font-medium text-gray-700">Danh mục</span>
                                </div>
                                <select name="category_id" id="category_id"
                                    class="input input-bordered w-full @error('category_id') border-red-500 @enderror">
                                    <option value="">Chọn danh mục</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label> --}}

                            <x-text-input label="Tiêu đề" name="title" placeholder=""
                                value="{{ old('title', $post->title) }}" />

                            <label class="form-control ">
                                <div class="label">
                                    <span class="label-text">@lang('admin.content')</span>
                                </div>
                                <textarea name="content" id="content"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full {{ $errors->has('content') ? 'input-error' : '' }}"
                                    rows="1">{{ old('content', $post->content) }}</textarea>
                                @error('content')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                            <x-text-input label="Ngày đăng" name="published_at" placeholder=""
                                value="{{ old('published_at', $post->published_at) }}" type="datetime-local" />

                            {{-- hình ảnh --}}
                            <input type="hidden" id="existingImages"
                                value="{{ json_encode(
                                    $post->images->map(function ($image) {
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
                <div class="flex justify-center pb-3 pt-5"><button type="submit"
                        class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Lưu</button>
                    <a href="{{ route('admin.posts.index') }}"
                        class="btn btn-outline btn-error !min-h-9 h-9 w-fit mt-2 mx-4">Huỷ</a>

                </div>
            </form>

        </div>
    </div>


    @pushonce('bottom_scripts')
        {{-- Sử dụng filepond --}}
        @include('components.filepond-edit-only-image')
        <x-admin.forms.tinymce-config column="content" model="Post" id="content" />
    @endpushonce

</x-admin-layout>
