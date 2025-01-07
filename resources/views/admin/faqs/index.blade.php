<x-admin-layout>
    <link href="{{ asset('adminpage/datatable/dataTables.bootstrap5.css') }}" rel="stylesheet">
    <div class="flex-grow w-full md:p-5 p-1">
        <div class="mb-5">
            <h1 class="text-2xl font-semibold text-gray-800">Hỏi đáp</h1>
            <nav class="mt-2">
                <ol class="breadcrumb flex text-sm text-gray-600 space-x-2">
                    <li class="breadcrumb-item">
                        <a>Hỏi đáp</a>
                    </li>
                    <li class="breadcrumb-item text-gray-500">
                        <span>/</span>
                    </li>
                    <li class="breadcrumb-item active text-gray-800 font-medium">
                        Tất cả
                    </li>
                </ol>
            </nav>
        </div>

        <x-admin.alerts.toast/>

        <!-- End Page Title -->
        <div class="card p-2 bg-white shadow">
            <div class="card-body p-0">
                {{-- <div class="text-gray-800 text-3xl font-semibold leading-tight flex pb-1">
                    <div class="flex ml-auto">
                        <a class="btn btn-outline btn-accent !min-h-10 h-10 w-fit"
                            href="{{ route('admin.faqs.create') }}">
                            <i class="fad fa-plus-circle mt-[1px]"></i>
                            <span class="mb-[2px]">Thêm mới</span>
                        </a>
                    </div>
                </div> --}}

                <div class="rounded-lg text-sm">
                    <div class="lg:mt-0 rounded shadow p-2 overflow-x-auto">
                        <table id="example" class="table min-w-full border border-gray-300 mt-3">
                            <thead>
                                <tr class="border-b border-black bg-gray-100">
                                    <th class="text-center">STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Thời gian gửi</th>
                                    <th>Thời gian trả lời</th>
                                    <th>Ẩn/Hiện</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $index => $faq)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-left font-semibold">{{ Str::limit($faq->title, 80) }}</td>
                                        <td>{{ $faq->submitted_date }}
                                        </td>
                                        <td>{{ $faq->answered_date }}</td>
                                        <td><label class="label cursor-pointer place-content-center">
                                                <input type="checkbox" class="!toggle !toggle-accent"
                                                    @if ($faq->is_visible) checked="checked" @endif
                                                    onclick="toggleVisibility('{{ $faq->id }}')" />
                                            </label>
                                        </td>
                                        <td class="px-2 !flex">
                                            <div class="ml-[34%] flex items-center gap-2">
                                                <a href="{{ route('admin.faqs.edit', $faq) }}" type="button"
                                                    style="margin-right: 12px"><i
                                                        class="fa fa-edit text-yellow-400 hover:text-yellow-500"></i></a>
                                                <!-- Nút mở modal -->
                                                <button class="p-0"
                                                    onclick="document.getElementById('confirm-modal-{{ $faq->id }}').showModal()">
                                                    <i
                                                        class="fad fa-trash-alt text-red-400 hover:text-red-500 cursor-pointer"></i>
                                                </button>
                                                <!-- Modal xác nhận xóa -->
                                                <dialog id="confirm-modal-{{ $faq->id }}" class="modal">
                                                    <style>
                                                        .modal-box {
                                                            max-width: 25rem;
                                                            position: relative;
                                                            transform: translateY(-80%) !important;
                                                        }
                                                    </style>
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-red-600 text-center" style="font-size: 4rem"><i
                                                                class="fad fa-exclamation-triangle"></i></h3>
                                                        <p class="py-4 text-base text-center">Bạn có chắc muốn xoá câu hỏi này?</p>

                                                        <div class="modal-action justify-center">
                                                            <!-- Nút hủy -->
                                                            <button class="btn bg-gray-500 text-white px-6"
                                                                onclick="document.getElementById('confirm-modal-{{ $faq->id }}').close()">Hủy</button>

                                                            <!-- Nút xác nhận, gọi form xóa -->
                                                            <button class="btn btn-error text-white px-6"
                                                                onclick="document.getElementById('delete-form-{{ $faq->id }}').submit()">Xoá</button>
                                                        </div>
                                                    </div>
                                                </dialog>
                                                <!-- Form xóa ẩn -->
                                                <form id="delete-form-{{ $faq->id }}"
                                                    action="{{ route('admin.faqs.destroy', $faq) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @pushOnce('bottom_scripts')
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script type="text/javascript" src="{{ asset('adminpage/datatable/dataTables.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminpage/datatable/dataTables.bootstrap5.js') }}"></script>

        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust();
            });
        </script>

        {{-- Trạng thái ẩn hiện và thông báo toast --}}
        <script>
            function toggleVisibility(faqId) {
                fetch(`/admin/faqs/${faqId}/toggle-visibility`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast('Trạng thái hiển thị của bài viết đã được cập nhật.', 'success');
                        } else {
                            showToast('Đã xảy ra lỗi.', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Có lỗi xảy ra trong hệ thống.', 'error');
                    });
            }

            function showToast(message, type) {
                // Tạo phần tử div cho toast
                var toast = document.createElement('div');
                toast.className = 'toast ' + (type === 'success' ? 'toast-success' : 'toast-error');
                toast.innerText = message;

                // Style cơ bản cho toast
                toast.style.position = 'fixed';
                toast.style.top = '10px';
                toast.style.right = '-300px'; // Bắt đầu ngoài màn hình
                toast.style.padding = '15px 20px';
                toast.style.borderRadius = '8px';
                toast.style.boxShadow = '0px 4px 6px rgba(0, 0, 0, 0.1)';
                toast.style.color = '#fff';
                toast.style.maxWidth = '300px';
                toast.style.zIndex = '9999';
                toast.style.transition = 'right 0.5s ease';
                toast.style.backgroundColor = type === 'success' ? '#38a169' : '#e53e3e'; // Xanh lá cho thành công, đỏ cho lỗi

                // Thêm toast vào body
                document.body.appendChild(toast);

                // Hiển thị toast
                setTimeout(function() {
                    toast.style.right = '20px'; // Đẩy toast vào màn hình
                }, 100);

                // Ẩn toast sau 3 giây
                setTimeout(function() {
                    toast.style.right = '-300px'; // Đưa toast ra ngoài màn hình
                    setTimeout(function() {
                        toast.remove(); // Xóa khỏi DOM sau khi ẩn
                    }, 500); // Delay để chờ animation hoàn thành
                }, 3000);
            }
        </script>
    @endPushOnce
</x-admin-layout>
