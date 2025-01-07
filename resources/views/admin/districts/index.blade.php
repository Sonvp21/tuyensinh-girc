<x-admin-layout>
    <div class="flex-grow w-full p-5">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Danh sách huyện</h1>
            <nav class="mt-2">
                <ol class="breadcrumb flex text-sm text-gray-600 space-x-2">
                    <li class="breadcrumb-item">
                        <a>Hành chính</a>
                    </li>
                    <li class="breadcrumb-item text-gray-500">
                        <span>/</span>
                    </li>
                    <li class="breadcrumb-item active text-gray-800 font-medium">
                        Danh sách huyện
                    </li>
                </ol>
            </nav>
        </div>
        <x-admin.alerts.toast/>

        <div class="grid grid-cols-3 gap-4 py-4">
            <!-- Form lọc -->
            @component('components.admin.filter', [
                'action' => route('admin.districts.index'),
                'ajaxRoute' => route('admin.districts.ajax_list'),
                'filters' => [
                    ['name' => 'name', 'label' => 'Tên Huyện', 'options' => $uniqueNames],
                    // ['name' => 'area', 'label' => 'Diện tích', 'options' => $uniqueAreas],
                    // ['name' => 'population', 'label' => 'Dân số', 'options' => $uniquePopulations],
                    ['name' => 'updated_year', 'label' => 'Năm cập nhật', 'options' => $uniqueUpdatedYears],
                ],
            ])
            @endcomponent
            <!-- xuất excel, pdf -->
            <div class="h-full flex flex-col md:flex-row self-center justify-self-center lg:items-center place-content-center">
                <div class="mx-2 group hover:text-teal-500">
                    <button type="button" id="exportButton" class="btn glass contents group-hover:text-teal-500">
                        <i class="fad fa-file-excel"></i>
                        Xuất Excel
                    </button>
                </div>
                <div class="mx-2 group hover:text-teal-500">
                    <button type="button" id="exportPdfButton" class="btn glass contents group-hover:text-teal-500">
                        <i class="fad fa-file-pdf"></i>
                        Xuất PDF
                    </button>
                </div>
                <form id="exportFormExcel" action="{{ route('admin.districts.export_excel') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="districts" id="exportData">
                </form>
            </div>

        </div>
        <!-- Hiển thị danh sách kết quả -->
        <div id="districtsList" class="overflow-x-auto bg-white rounded-lg">
            @include('admin.districts.ajax_list')
        </div>
        <!-- Ẩn danh sách hiển thị kết quả cho xuất file excel, pdf -->
        <div hidden id="districtsListExport" class="overflow-x-auto bg-white rounded-lg">
            @include('admin.districts.ajax_export')
        </div>
    </div>

    @include('admin.districts.script_ajax_filter_export')

</x-admin-layout>
