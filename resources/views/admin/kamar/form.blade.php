@extends('admin.layout.app')
@section('content')

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
                            @foreach ($fasilitaskamar as $row)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->kamar->tipe_kamar}}</td>
                                <td>{{$row->nama_fasilitas}}</td>
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
                @endif          
        </div>
    </div>
</div>

    
@endsection