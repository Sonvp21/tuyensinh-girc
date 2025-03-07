<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danh sách đăng ký</title>

    <!-- Tailwind CSS & DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

</head>

<body class="bg-gray-100 p-5">

    <div class="container mx-auto bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">📋 Danh sách đăng ký</h2>

        <!-- Bảng dữ liệu -->
        <div class="overflow-x-auto">
            <table id="applyTable" class="min-w-full border border-gray-300 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <th class="px-4 py-2 border">STT</th>
                        <th class="px-4 py-2 border">Họ & Tên</th>
                        <th class="px-4 py-2 border">SĐT</th>
                        <th class="px-4 py-2 border">Ngày Sinh</th>
                        <th class="px-4 py-2 border">Địa Chỉ</th>
                        <th class="px-4 py-2 border">Tỉnh</th>
                        <th class="px-4 py-2 border">Trường THPT</th>
                        <th class="px-4 py-2 border">Ngành Học</th>
                        <th class="px-4 py-2 border">Facebook</th>
                        <th class="px-4 py-2 border">Thời Gian Đăng Ký</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applies as $key => $apply)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $apply->name }}</td>
                            <td class="px-4 py-2">{{ $apply->phone }}</td>
                            <td class="px-4 py-2">{{ date('d/m/Y', strtotime($apply->birthday)) }}</td>
                            <td class="px-4 py-2">{{ $apply->address }}</td>
                            <td class="px-4 py-2">{{ $apply->province }}</td>
                            <td class="px-4 py-2">{{ $apply->high_school }}</td>
                            <td class="px-4 py-2">{{ $apply->major }}</td>
                            <td class="px-4 py-2 text-center">
                                @if ($apply->facebook_link)
                                    <a href="{{ $apply->facebook_link }}" target="_blank" class="text-blue-600 hover:text-blue-800">🔗 Xem</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-2">{{ date('H:i, d/m/Y', strtotime($apply->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let table = $('#applyTable').DataTable({
                "paging": true,
                "lengthMenu": [10, 25, 50, 100],
                "ordering": true,
                "searching": true,
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ dòng",
                    "info": "Hiển thị _START_ đến _END_ trong _TOTAL_ kết quả",
                    "search": "🔍 Tìm kiếm:",
                    "paginate": {
                        "first": "Đầu",
                        "last": "Cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                },
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'excelHtml5',
                    text: '📥 Xuất Excel',
                    title: 'Danh_sach_dang_ky',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':visible'
                    }
                }]
            });

            // Nút xuất Excel bên ngoài DataTable
            $('#exportExcel').on('click', function() {
                table.button('.buttons-excel').trigger();
            });
        });
    </script>

</body>

</html>
