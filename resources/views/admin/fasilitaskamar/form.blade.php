@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-title">
                <h1>{{@$fasilitaskamar ? 'Ubah' : 'Tambah'}} Fasilitas Kamar</h1>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{@$fasilitaskamar ? route('fasilitaskamar.update',@$fasilitaskamar->id) : url('admin/fasilitaskamar/{id_kamar}'. @$fasilitaskamar->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(@$fasilitaskamar)
                    {{method_field('patch')}}
                @endif

                @if (!@$fasilitaskamar)
                @endif
                <label for="id_kamar" class="form-label">Tipe Kamar</label>
                  <input type="text" name="" class="form-control" value="{{$kamar[0]->tipe_kamar}}" disabled>
                  <input type="hidden" name="id_kamar" class="form-control" value="{{@$fasilitaskamar ? $fasilitaskamar->id_kamar : $kamar[0]->id }}">
                <div class="mt-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                    <input type="text" class="form-control" id="nama_fasilitas" aria-describedby="emailHelp" 
                    name="nama_fasilitas" value="{{old('nama_fasilitas', @$fasilitaskamar ? $fasilitaskamar->nama_fasilitas : '')}}">
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>

    
@endsection