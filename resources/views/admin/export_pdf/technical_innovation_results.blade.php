<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Danh sách kết quả hội thi STKT</title>

    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8px; /* Giảm kích thước phông chữ */
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
    <h1>Danh sách kết quả hội thi STKT</h1>
    <table>
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Tên hồ sơ STKT</th>
                <th>Tác giả</th>
                <th>Lĩnh vực</th>
                <th>Năm thi</th>
                <th>Xếp hạng</th>
                <th>Hiệu quả</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technicalInnovationResults as $index => $technicalInnovationResult)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $technicalInnovationResult['nameDossier'] }}</td>
                    <td>{{ $technicalInnovationResult['unit_nameDossier'] }}</td>
                    <td>{{ $technicalInnovationResult['fieldDossier'] }}</td>
                    <td>{{ $technicalInnovationResult['year'] }}</td>
                    <td>{{ $technicalInnovationResult['rank'] }}</td>
                    <td>{{ $technicalInnovationResult['effectiveDossier'] }}</td>
                    <td>{{ $technicalInnovationResult['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
