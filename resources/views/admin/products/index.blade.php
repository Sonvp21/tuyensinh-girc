<x-admin-layout>
    <div class="flex-grow w-full p-5">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Danh sách Sản phẩm</h1>
            <nav class="mt-2">
                <ol class="breadcrumb flex text-sm text-gray-600 space-x-2">
                    <li class="breadcrumb-item">
                        <a>Sản phẩm</a>
                    </li>
                    <li class="breadcrumb-item text-gray-500">
                        <span>/</span>
                    </li>
                    <li class="breadcrumb-item active text-gray-800 font-medium">
                        Danh sách
                    </li>
                </ol>
            </nav>
        </div>

        <x-admin.alerts.toast/>

        <div class="grid grid-cols-3 gap-4 pb-4">
            <!-- Form lọc -->
            @component('components.admin.filter-product', [
                'action' => route('admin.products.index'),
                'ajaxRoute' => route('admin.products.ajax_list'),
                'filters' => [],
            ])
            @endcomponent
            <div class=" justify-between w-max md:ml-auto self-center block max-md:grid justify-items-center">
                <a class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2" href="{{ route('admin.products.statistical') }}">
                    <i class="fad fa-chart-line"></i> Thống kê
                </a>
                <a class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2" href="{{ route('admin.products.create') }}">
                    <i class="fad fa-plus-circle mt-[1px]"></i>
                            <span class="mb-[2px]">Thêm mới</span>
                </a>
            </div>
        </div>
        <!-- Hiển thị danh sách kết quả -->
        <div id="productsList" class="overflow-x-auto bg-white rounded-lg">
            @include('admin.products.ajax_list')
        </div>
        <!-- Ẩn danh sách hiển thị kết quả cho xuất file excel, pdf -->
        <div hidden id="productsListExport" class="overflow-x-auto bg-white rounded-lg">
            @include('admin.products.ajax_export')
        </div>
    </div>

    @include('admin.products.script_ajax_filter_export')

</x-admin-layout>
