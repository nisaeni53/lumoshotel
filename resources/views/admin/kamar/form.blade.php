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
        <div class="card-head">
            <div class="card-title">
                <h1>{{@$kamar ? 'Ubah' : 'Tambah'}} Fasilitas Kamar</h1>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{@$kamar ? route('kamar.update',$kamar->id) : route('kamar.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(@$kamar)
                    {{method_field('patch')}}
                @endif
                <div class="mb-3">
                  <label for="tipe_kamar" class="form-label">Tipe kamar</label>
                  <input type="text" class="form-control" id="tipe_kamar" aria-describedby="emailHelp" 
                  name="tipe_kamar" value="{{old('tipe_kamar', @$kamar ? $kamar->tipe_kamar : '')}}">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto"
                    value="{{old('foto', @$kamar ? $kamar->foto : '')}}">
                </div>
                @if(@$kamar)
                    <div class="mb-3">
                        <img src="{{url('') . '/' . $kamar->foto}}" width="17%" height="5%">
                    </div>
                @endif
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" aria-describedby="emailHelp" 
                    name="stok" value="{{old('stok', @$kamar ? $kamar->stok : '')}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="stok" aria-describedby="emailHelp" 
                    name="harga" value="{{old('harga', @$kamar ? $kamar->harga : '')}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

                @if (@$fasilitaskamar)
                    <hr>
                    <h3>Detail</h3>
                    <a href="{{url('/admin/fasilitaskamar/'. $kamar->id . '/create')}}" class="btn btn-primary"> Add Produk </a>
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipe kamar</th>
                                <th>Nama Fasilitas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($fasilitaskamar as $row)
                            @php
                                $i++;
                            @endphp
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->kamar->tipe_kamar}}</td>
                                <td>{{$row->nama_fasilitas}}</td>
                                <td>
                                    <a href="{{route('fasilitaskamar.edit', $row->id)}}" class="btn btn-warning mr-2" >Edit </a>
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
                                                {{$row->nama_fasilitas}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('fasilitaskamar.destroy',$row->id) }}" method="POST">
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
                @endif          
        </div>
    </div>
</div>

    
@endsection