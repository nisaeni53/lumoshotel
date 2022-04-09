@extends('admin.layout.app')
@section('content')

<div class="container">
        <h1 style="margin-top: 35px;">Administrator</h1>
        <div class="row mt-5">
            <div class="col-4">
                <a href="kamar">
                <div class="card">
                    <img src="{{asset('image/')}}/admintypekamar.png" class="card-img-top" alt="...">
                    <div class="card-body" style="border-radius: 0px 0px 25px 25px;">
                        <p class="card-text">
                            <div class="information-room">
                                <h4 class="name-room">Data Kamar</h4>
                            </div>
                            <center>
                                <p>Melihat, Menambah, Menghapus,  Merubah Data Kamar</p>
                            </center>
                        </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="fasilitaskamar">
                <div class="card" >
                    <img src="{{asset('image/')}}/adminfasilitaskamar.png" class="card-img-top" alt="...">
                    <div class="card-body" style="border-radius: 0px 0px 25px 25px;">
                        <p class="card-text">
                            <div class="information-room">
                                <h4 class="name-room">Fasilitas Kamar</h4>
                            </div>
                            <center>
                                <p>Melihat Data Fasilitas Kamar</p>
                            </center>
                        </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="fasilitashotel">
                    <div class="card">
                        <img src="{{asset('image/')}}/adminfasilitashotel.png" class="card-img-top" alt="...">
                        <div class="card-body" style="border-radius: 0px 0px 25px 25px;">
                            <p class="card-text">
                                <div class="information-room">
                                    <h4 class="name-room">Fasilitas Hotel</h4>
                                </div>
                                <center>
                                    <p>Melihat, Menambah, Menghapus,  Merubah Data Fasilitas Hotel</p>
                                </center>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</div>
@endsection
