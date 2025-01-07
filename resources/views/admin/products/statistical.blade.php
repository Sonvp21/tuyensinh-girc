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
                        Thống kê
                    </li>
                </ol>
            </nav>
        </div>

        <div class=" justify-between w-max md:ml-auto self-center block max-md:grid justify-items-center">
            <a class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2" href="{{ route('admin.products.index') }}">
                Danh sách
            </a>
        </div>
        <x-admin.alerts.toast/>

        <div class="grid grid-cols-3 gap-4 pb-4">
            <!-- Form lọc -->
            @component('components.admin.filter-product', [
                'action' => route('admin.products.index'),
                'ajaxRoute' => route('admin.products.ajax_list'),
                'filters' => [
                    ['name' => 'submission_date', 'label' => 'Năm đăng ký', 'options' => $uniqueSubmissionYears],
                    ['name' => 'district_id', 'label' => 'Huyện', 'options' => $districts],
                    ['name' => 'commune_id', 'label' => 'Xã', 'options' => []],
                    
                ],
            ])
            @endcomponent
            <!-- xuất excel, pdf -->
            <div
                class="ml-auto h-full flex flex-col md:flex-row self-center justify-self-center lg:items-center place-content-center">
                <div class="mx-2 group hover:text-teal-500">
                    <button type="button" id="exportButton" class="btn glass contents group-hover:text-teal-500">
                        <i class="fad fa-file-excel"></i>
                        Xuất Excel
                    </button>
                </div>
                <div class="mx-2 group hover:text-teal-500">
                    <button type="button" id="exportPdfButton" class="btn glass contents group-hover:text-teal-500">
                        <i class="fad fa-print"></i>
                            In
                    </button>
                </div>
                <form id="exportFormExcel" action="{{ route('admin.products.export_excel') }}" method="POST"
                    style="display: none;">
                    @csrf
                    <input type="hidden" name="products" id="exportData">
                </form>
                
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
