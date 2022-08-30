<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>Tabel Barang</h1>
            <a href="{{ route('create') }}" class="btn btn-primary">Tambah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">kode_barang</th>
                        <th scope="col">nama_barang</th>
                        <th scope="col">stock</th>
                        <th scope="col">harga</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $item -> id }}</th>
                        <td>{{ $item -> itemType-> name }}</td>
                        <td>{{ $item -> kode_barang }}</td>
                        <td>{{ $item -> nama_barang }}</td>
                        <td>{{ $item -> stock }}</td>
                        <td>{{ $item -> harga }}</td>
                        <td>
                            <a href="{{route('edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('destroy', $item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Hapus</button>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $items->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>