@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-title">
                {{@$fasilitaskamar ? 'Ubah' : 'Tambah'}} Fasilitas Kamar
                <h1>Form Fasilitas Hotel</h1>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{@$fasilitaskamar ? route('fasilitaskamar.update',@$fasilitaskamar->id) : route('fasilitaskamar.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(@$fasilitaskamar)
                    {{method_field('patch')}}
                @endif
                <div class="mb-3">
                  <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                  <input type="text" class="form-control" id="nama_fasilitas" aria-describedby="emailHelp" 
                  name="nama_fasilitas" value="{{old('nama_fasilitas', @$fasilitaskamar ? $fasilitaskamar->nama_fasilitas : '')}}">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="text" class="form-control" id="foto" name="foto"
                  value="{{old('foto', @$fasilitaskamar ? $fasilitaskamar->foto : '')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

    
@endsection