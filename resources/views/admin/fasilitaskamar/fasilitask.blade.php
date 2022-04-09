@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
            <div class="card-header d-flex">
                <h1 class="card-title">Table Admin Fasilitas Kamar</h1>
            </div>
            <h5>Pemberitahuan!!!</h5>
            <p class="title">Pada halaman ini hanya bisa melihat data fasilitas kamar saja. 
                Jika ingin menambah, mengubah dan menghapus, silahkan ke halaman data kamar.
                Pilih berdasarkan tipe kamar pada halaman edit.
            </p>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Tipe Kamar</th>
                        <th>Nama Fasilitas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitaskamar as $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->kamar->tipe_kamar}}</td>
                    <td>{{$row->nama_fasilitas}}</td>
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>

    
@endsection