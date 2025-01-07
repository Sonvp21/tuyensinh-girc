<table class="table">
    <!-- head -->
    <thead>
        <tr class="text-sm">
            <th class="text-center">STT</th>
            <th>Tên sản phẩm</th>
            <th>Chủ sở hữu</th>
            <th>Đại diện</th>
            <th class="text-center">Thời gian đăng ký</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $index => $product)
            <tr>
                <td class="text-center">{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                <td class="font-semibold">{{ $product->name }}</td>
                <td>{{ $product->owner }}</td>
                <td>{{ $product->representatives }}</td>
                <td class="text-center">{{ $product->submission_date }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.products.edit', $product) }}" type="button" style="margin-right: 12px"><i
                            class="fa fa-edit text-yellow-400 hover:text-yellow-500"></i></a>
                    <!-- Nút mở modal -->
                    <button class="p-0"
                        onclick="document.getElementById('confirm-modal-{{ $product->id }}').showModal()">
                        <i class="fad fa-trash-alt text-red-400 hover:text-red-500 cursor-pointer"></i>
                    </button>
                    <!-- Modal xác nhận xóa -->
                    <dialog id="confirm-modal-{{ $product->id }}" class="modal">
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
                            <p class="py-4 text-base text-center">Bạn có chắc muốn xoá sản phẩm <strong>"{{ $product->name }}"</strong>?</p>

                            <div class="modal-action justify-center">
                                <!-- Nút hủy -->
                                <button class="btn bg-gray-500 text-white px-6"
                                    onclick="document.getElementById('confirm-modal-{{ $product->id }}').close()">Hủy</button>

                                <!-- Nút xác nhận, gọi form xóa -->
                                <button class="btn btn-error text-white px-6"
                                    onclick="document.getElementById('delete-form-{{ $product->id }}').submit()">Xoá</button>
                            </div>
                        </div>
                    </dialog>
                    <!-- Form xóa ẩn -->
                    <form id="delete-form-{{ $product->id }}"
                        action="{{ route('admin.products.destroy', $product) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="p-3">
    {{ $products->links('vendor.pagination.custom-pagination') }}
</div>
