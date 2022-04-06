@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-header">
                <a href="{{route('fasilitaskamar.create')}}" class="btn btn-primary"> Tambah Fasilitas </a>
            </div>
            <div class="card-title">
                <h1>Table Admin Fasilitas Kamar</h1>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id Fasilitas Kamar</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitaskamar as $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_fasilitas}}</td>
                    <td>{{$row->foto}}</td>
                    <td>
                        <a href="#" class="btn btn-warning" >Edit </a>
                        <a href="#" data-id="{{$row->id}}" class="btn btn-danger btn-del">Delete</a>
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>

    
@endsection