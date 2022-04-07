@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
            <div class="card-header d-flex">
                <h1 class="card-title">Table Admin Fasilitas Kamar</h1>
                <a href="{{route('fasilitaskamar.create')}}" class="btn btn-primary" style="margin-left: 40%"> Tambah Fasilitas </a>
            </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitaskamar as $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_fasilitas}}</td>
                    <td>
                        <img src="{{url('') . '/' . $row->foto}}" width="100px">
                    </td>
                    <td>
                        
                        <form action="{{ route('fasilitaskamar.destroy',$row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('fasilitaskamar.edit', $row->id)}}" class="btn btn-warning" >Edit </a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>   
                    </td>
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>

    
@endsection