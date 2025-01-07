<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.notifies.index') }}">Bài viết</a></li>
                <li><a class="text-teal-600">Thêm mới</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5">

            <form action="{{ route('admin.notifies.update', $notify) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div class="grid xl:grid-cols-1 grid-cols-1 gap-4 !m-0">

                    <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">

                        <x-text-input label="Tiêu đề" name="title" placeholder=""
                            value="{{ old('title', $notify->title) }}" />

                        <label class="form-control ">
                            <div class="label">
                                <span class="label-text">@lang('admin.content')</span>
                            </div>
                            <textarea name="content" id="content"
                                class="form-input rounded-md shadow-sm mt-1 block w-full {{ $errors->has('content') ? 'input-error' : '' }}"
                                rows="1">{{ old('content', $notify->content) }}</textarea>
                            @error('content')
                                <small class="text-red-500 text-left">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                </div>
                <div class="flex justify-center pb-3 pt-5"><button type="submit"
                        class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Lưu</button>
                    <a href="{{ route('admin.notifies.index') }}"
                        class="btn btn-outline btn-error !min-h-9 h-9 w-fit mt-2 mx-4">Huỷ</a>

                </div>
            </form>

        </div>
    </div>


    @pushonce('bottom_scripts')
        <x-admin.forms.tinymce-config column="content" model="Notify" id="content" />
    @endpushonce

</x-admin-layout>
