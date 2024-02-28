<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cetak Data</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Buku</b></p>
        <table class="table" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>Buku Id</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
        @foreach($data as $bk)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$bk->judul}}</td>
            <td>{{$bk->penulis}}</td>
            <td>{{$bk->penerbit}}</td>
            <td>{{$bk->tahunterbit}}</td>
        </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>

    <a href="/ukk_fia2024" class="btn btn-secondary">Back</a>

</body>
</html>