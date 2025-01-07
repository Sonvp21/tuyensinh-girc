<table class="table">
    <thead>
        <tr class="text-sm">
            <th class="text-center">STT</th>
            <th>Tên Xã</th>
            <th>Tên Huyện</th>
            <th>Diện tích</th>
            <th>Dân số</th>
            <th>Năm cập nhật</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($communes as $index => $commune)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $commune->name }}</td>
                <td>{{ $commune->district->name }}</td>
                <td>{{ $commune->area }} km²</td>
                <td>{{ $commune->population }}</td>
                <td>{{ $commune->updated_year }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

