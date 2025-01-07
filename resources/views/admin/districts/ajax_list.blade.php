<table class="table">
    <!-- head -->
    <thead>
        <tr class="text-sm">
            {{-- <th class="text-center">
                <input type="checkbox" id="checkAll" class="checkbox checkbox-accent" />
            </th> --}}
            <th class="text-center">STT</th>
            <th>Tên Huyện</th>
            <th>Diện tích</th>
            <th>Dân số</th>
            <th style="text-align-last: center">Năm cập nhật</th>
            <th style="text-align-last: center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($districts as $index => $district)
            <tr>
                {{-- <td class="text-center">
                    <input type="checkbox" class="checkbox checkbox-accent check-item" />
                </td> --}}
                <td>{{ ($districts->currentPage() - 1) * $districts->perPage() + $index + 1 }}</td>
                <td class="text-left font-semibold">{{ $district->name }}</td>
                <td>{{ $district->area }} km²</td>
                <td>{{ $district->population }}</td>
                <td style="text-align-last: center">{{ $district->updated_year }}</td>
                <td class="flex justify-around">
                    <a href="{{ route('admin.districts.edit', $district) }}" type="button"><i
                            class="fa fa-edit text-yellow-400 hover:text-yellow-500"></i></a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="p-3">
    {{ $districts->links('vendor.pagination.custom-pagination') }}
</div>
{{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkAll = document.getElementById('checkAll');
            const checkItems = document.querySelectorAll('.check-item');

            checkAll.addEventListener('change', function() {
                checkItems.forEach(item => {
                    item.checked = checkAll.checked;
                });
            });
        });
    </script> --}}
