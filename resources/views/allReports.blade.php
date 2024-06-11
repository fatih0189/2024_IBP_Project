<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 0.25rem;
            margin-bottom: 15px;
        }
        .card-title {
            margin-bottom: 0;
        }
        .table {
            background-color: #fff;
            border-radius: 0.25rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .table th,
        .table td {
            padding: 10px 15px;
        }
        .table th {
            background-color: #007bff;
            color: #fff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="card-header" style="padding: 100px">
        <h3 style="font-size: 72px; font-family: roboto" class="card-title">Kahve Zinciri Duyurular Listesi</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>İçerik</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports->sortBy('role') as $report)
                    <tr>
                        <td>{{ $report->title }}</td>
                        <td>{{ $report->description }}</td>
                        <td>{{ Str::substr($report->content, 0, 150) }}...</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
