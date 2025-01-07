<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Danh sách NCKH & ĐMST</title>

    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8px;
            /* Giảm kích thước phông chữ */
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 4px;
            /* Giảm độ đệm */
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
    <h1>Danh sách NCKH & ĐMST</h1>
    <table>
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Tên đề tài</th>
                <th>Lĩnh vực</th>
                <th>Chủ nhiệm đề tài</th>
                <th>Tổ Chức chủ trì</th>
                <th>Thành viên đề tài</th>

                <th>Thời gian thực hiện</th>
                <th>Tình Trạng</th>
                <th>Tóm tắt nội dung</th>
                <th>Mục Tiêu</th>
                <th>Kết Quả</th>
                <th>Ấn Phẩm</th>
                <th>Bằng Sáng Chế</th>

                <th>Tác động và ứng dụng</th>
                <th>Kinh phí (triệu đồng)</th>
                <th>Kinh phí thực tế đã chi (triệu đồng)</th>
                <th>Ghi Chú</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scienceInnovations as $index => $scienceInnovation)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $scienceInnovation['name'] }}</td>
                    <td>{{ $scienceInnovation['type'] }}</td>
                    <td>{{ $scienceInnovation['leader_name'] }}</td>
                    <td>{{ $scienceInnovation['institution'] }}</td>
                    <td>{!! $scienceInnovation['collaborators'] !!}</td>

                    <td>{{ $scienceInnovation['time_date'] }}</td>
                    <td>{{ $scienceInnovation['status'] }}</td>
                    <td>{!! $scienceInnovation['summary'] !!}</td>
                    <td>{!! $scienceInnovation['objectives'] !!}</td>
                    <td>{!! $scienceInnovation['results'] !!}</td>
                    <td>{!! $scienceInnovation['publications'] !!}</td>
                    <td>{!! $scienceInnovation['patents'] !!}</td>
                    <td>{!! $scienceInnovation['impact'] !!}</td>
                    <td>{{ number_format(floatval($scienceInnovation['budget']), 0, ',', '.') }}</td>
                    <td>{{ number_format(floatval($scienceInnovation['expenditure']), 0, ',', '.') }}</td>

                    <td>{!! $scienceInnovation['notes'] !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
