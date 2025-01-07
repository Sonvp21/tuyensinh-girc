<table class="table">
    <thead>
        <tr class="text-sm">
            <th class="text-center">STT</th>
            <th>Tên Huyện</th>
            <th>Diện tích</th>
            <th>Dân số</th>
            <th>Năm cập nhật</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($districts as $index => $district)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $district->name }}</td>
                <td>{{ $district->area }} km²</td>
                <td>{{ $district->population }}</td>
                <td>{{ $district->updated_year }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

