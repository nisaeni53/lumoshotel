@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-title">
                {{@$kamar ? 'Ubah' : 'Tambah'}} Fasilitas Kamar
                <h1>Form Fasilitas Kamar</h1>
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
                            <img src="{{url('') . '/' . $fasilitaskamar->foto}}" width="17%" height="5%">
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
        </div>
    </div>
</div>

    
@endsection