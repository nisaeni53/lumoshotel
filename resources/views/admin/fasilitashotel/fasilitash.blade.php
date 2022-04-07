@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
            <div class="card-header d-flex">
                <h1 class="card-title">Table Admin Fasilitas Hotel</h1>
                <a href="{{route('fasilitashotel.create')}}" class="btn btn-primary" style="margin-left: 41%"> Tambah Fasilitas </a>
            </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitashotel as $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_fasilitas}}</td>
                    <td>{{$row->foto}}</td>
                    <td>{{$row->keterangan}}</td>
                    <td class="d-flex">
                        <a href="{{route('fasilitashotel.edit', $row->id)}}" class="btn btn-warning mr-2" >Edit </a>
                        <form action="{{ route('fasilitashotel.destroy',$row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Delete</button>
                        </form>   
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection