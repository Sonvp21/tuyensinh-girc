<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Danh sách chỉ dẫn địa lý</title>
    
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px; /* Giảm kích thước phông chữ */
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 4px; /* Giảm độ đệm */
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <h1>Danh sách chỉ dẫn địa lý</h1>
    <table>
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Huyện</th>
                <th>Xã</th>
                <th>Tên sản phẩm</th>
                {{-- <th>Giới thiệu</th> --}}
                <th>Mô tả</th>
                {{-- <th>Nội dung</th> --}}
                <th>Đơn vị quản lý</th>
                <th>Địa chỉ</th>
                <th>Quyết định bảo hộ</th>
                <th>Ngày quyết định</th>
                <th>Danh sách các xã</th>
                <th>Đơn vị uỷ quyền</th>
                <th>Số đơn</th>
                <th>Số văn bằng</th>
                <th>Ngày cấp bằng</th>
                <th>Lượt xem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($geographicalIndications as $index => $geographicalIndication)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $geographicalIndication['district_name'] }}</td>
                    <td>{{ $geographicalIndication['commune_name'] }}</td>
                    <td>{{ $geographicalIndication['name'] }}</td>
                    {{-- <td>{!! $geographicalIndication['about'] !!}</td> --}}
                    <td>{{ $geographicalIndication['description'] }}</td>
                    {{-- <td>{!! $geographicalIndication['content'] !!}</td> --}}
                    <td>{{ $geographicalIndication['management_unit'] }}</td>
                    <td>{{ $geographicalIndication['address'] }}</td>
                    <td>{{ $geographicalIndication['decision'] }}</td>
                    <td>{{ $geographicalIndication['decision_date'] }}</td>
                    <td>{{ $geographicalIndication['commune_names'] }}</td>
                    <td>{{ $geographicalIndication['authorized_unit'] }}</td>
                    <td>{{ $geographicalIndication['filing_number'] }}</td>
                    <td>{{ $geographicalIndication['registration_number'] }}</td>
                    <td>{{ $geographicalIndication['registration_date'] }}</td>
                    <td>{{ $geographicalIndication['view_count'] ?? '0' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
