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
                    <td>
                        <img src="{{url('') . '/' . $row->foto}}" width="100px">
                    </td>
                    <td>{{$row->keterangan}}</td>
                    <td>
                        <form action="{{ route('fasilitashotel.destroy',$row->id) }}" method="POST">
                            <a href="{{route('fasilitashotel.edit', $row->id)}}" class="btn btn-warning mr-2" >Edit </a>
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                        </form>   
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tbody> 
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
