<x-admin-layout>
    <div class="flex-grow w-full p-5 text-center ">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.contacts.index') }}">Danh sách liên hệ</a></li>
                <li><a class="text-teal-600">Chỉnh sửa</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="overflow-x-auto bg-white rounded-lg mt-5">

            <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div class="grid xl:grid-cols-3 grid-cols-1 gap-4 !m-0">
                    <div class="col-span-2">
                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg ">
                            <x-text-input label="Họ & tên" name="name" placeholder="" value="{{ old('name', $contact->name) }}" />
                            <label class="form-control ">
                                <div class="label">
                                    <span class="label-text">@lang('admin.content')</span>
                                </div>
                                <textarea name="content" id="content"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full {{ $errors->has('content') ? 'input-error' : '' }}"
                                    rows="1">{{ old('content', $contact->content) }}</textarea>
                                @error('content')
                                    <small class="text-red-500 text-left">{{ $message }}</small>
                                @enderror
                            </label>
                        </div>

                    </div>
                    <div class="xl:col-span-1 col-span-2">

                        <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg mt-3">
                            <x-text-input label="Email" name="email" placeholder=""
                                value="{{ old('email', $contact->email) }}" />
                            <x-text-input label="Số điện thoại" name="phone" placeholder=""
                                value="{{ old('phone', $contact->phone) }}" />
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 justify-center p-3 pt-5">
                    <button type="submit" class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Lưu</button>
                    <a href="{{ route('admin.contacts.index') }}"
                        class="btn btn-outline btn-error !min-h-9 h-9 w-fit mt-2 mx-4">Huỷ</a>
                </div>
            </form>

        </div>
    </div>

    @pushonce('bottom_scripts')
        <x-admin.forms.tinymce-config column="content" model="Contact" id="content" />
        {{-- Sử dụng filepond --}}
        @include('components.filepond-edit')
    @endpushonce

</x-admin-layout>