@extends('admin.layout.app')
@section('content')
@if(session('success'))
    <div class="container">
        <div class="alert alert-success mt-2" role="alert">
            {{session('success')}}
        </div>
    </div>
@endif
@if(session('error'))
    <div class="container">
        <div class="alert alert-danger mg-2" role="alert">
            {{session('error')}}
        </div>
    </div>
@endif
<div class="container">
    <div class="card mt-5">
        <div class="card-header d-flex">
            <h1 class="card-title">Table Admin Kamar</h1>
            <a href="{{route('kamar.create')}}" class="btn btn-primary" style="margin-left: 56%"> Tambah Tipe </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id Kamar</th>
                        <th>Tipe kamar</th>
                        <th>Tersedia</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($kamar as $row)
                    @php
                        $i++;
                    @endphp
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->tipe_kamar}}</td>
                    <td>{{$row->stok}}</td>
                    <td>
                        <img src="{{url('') . '/' . $row->foto}}" width="100px">
                    </td>
                    <td>{{$row->harga}}</td>
                    <td>
                        <a href="{{route('kamar.edit', $row->id)}}" class="btn btn-warning mr-2" >Edit </a>
                        <button type="button" class="btn btn-danger" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$i}}">Hapus</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Data ini?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{$row->tipe_kamar}}
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('kamar.destroy',$row->id) }}" method="POST">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>   
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