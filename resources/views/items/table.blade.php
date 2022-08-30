@extends('layouts.admin')

@push('style')

<link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endpush
    

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Item</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Item</h6>
        <a href="{{ route('create') }}" class="btn btn-primary fa-pull-right">Tambah Barang</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <td class= "d-flex">
                            <a href="{{route('edit', $item->id)}}" class="btn btn-warning mr-2">Edit</a>
                            <form action="{{route('destroy', $item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            {{ $items->links() }}
        </div>
    </div>
</div>

@push('script')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endpush
@endsection