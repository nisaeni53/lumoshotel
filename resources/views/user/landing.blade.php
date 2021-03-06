@extends('user.layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset ('css/')}}/landing.css">
    <div class="container">
        <div class="jumbroton">
            {{-- <div class="photo-jumbroton mt-2 d-flex">
                <img src="image/imgutama.png" alt="" style="width: 100%">
            </div> --}}
            <div class="judul">
                <h1>Selamat Datang di Lumos Hotel</h1>
            </div>
            <div class="subjudul mt-4">
                <h5>
                    Lumos Hotel, terdapat layanan penjemputan ke bandara, kolam renang, serta wifi gratis untuk para penghuninya. Pesan sekarang juga!!
                </h5>
            </div>
        </div>
        <div class="check-form">
            <form action="">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10 cekin px-4 py-2">
                        <div class="row">
                            <div class="col-5">
                                <label for="check-in" class="form-label">Check-In</label>
                                <input type="date" class="form-control form-control-lg" name="" id="check-in">
                            </div>
                            <div class="col-5">
                                <label for="check-out" class="form-label">Check-Out</label>
                                <input type="date" class="form-control form-control-lg" name="" id="check-out">
                            </div>
                            <div class="col-2">
                                <a href="{{route('landing.create')}}" class="btn btn-primary mt-4"> Pesan </a>
                                {{-- <button class="btn btn-primary mt-4">Pesan</button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </form>
        </div>
        <div class="pilih-ruangan mt-5">
            <div class="title">
                <h1><center>Pilihan Kamar</center></h1>
            </div>
            <div class="choice-room mt-3">
                <div class="row">
                    @php
                        $fas = 0;
                    @endphp
                    @foreach ($kamar as $item)
                    @php
                        $fas++;
                    @endphp
                    <div class="col-4">
                        <div class="card">
                            <img src="{{asset('image/')}}/kamar1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <h5 class="price">{{$item->harga}}</h5>
                                    <div class="information-room d-flex">
                                        <h4 class="name-room">{{$item->tipe_kamar}}</h4>
                                        <p class="btnselengkapnya">
                                            @if (@$fasilitaskamar)
                                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapse{{$fas}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Selengkapnya
                                            </a>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapse{{$fas}}">
                                        <div class="card card-body">
                                            @for ($i = 0; $i < count($item->fasilitaskamar); $i++)
                                                <option value="">
                                                    {{$item->fasilitaskamar[$i]->nama_fasilitas}}
                                                </option>
                                            @endfor
                                            @endif 
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="facility mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="title">
                        <h1 style="font-weight: bolder">Yang anda dapatkan</h1>
                        <h5 style="font-weight:400;">Anda akan mendapatkan semua fasilitas ini di Lumos Hotel</h5>
                    </div>
                    <div class="name-facility mt-4">
                        <div class="facility-1 d-flex mt-2">
                            <img src="{{asset('image/')}}/pantai.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Pantai </h5>
                        </div>
                        <div class="facility-2 d-flex mt-2">
                            <img src="{{asset('image/')}}/pool.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Kolam Renang </h5>
                        </div>
                        <div class="facility-3 d-flex mt-2">
                            <img src="{{asset('image/')}}/nicefoood.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Sarapan </h5>
                        </div>
                        <div class="facility-4 d-flex mt-2">
                            <img src="{{asset('image/')}}/campfire.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Perkemahan </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('image/')}}/bg1.png" alt="" class="bg-pils">
                    <div class="fasilitas-pilih">
                        <div class="tab-content" id="pills-tabContent" style="margin-left: 5%;">
                            <div class="tab-pane fade show active" id="pills-fasilitas1" role="tabpanel" aria-labelledby="pills-fasilitas1-tab"><img src="{{asset('image/')}}/fasilitas1.jpg" alt="" height="300"></div>
                            <div class="tab-pane fade" id="pills-fasilitas2" role="tabpanel" aria-labelledby="pills-fasilitas2-tab"><img src="{{asset('image/')}}/fasilitas2.jpg" alt="" height="300"></div>
                            <div class="tab-pane fade" id="pills-fasilitas3" role="tabpanel" aria-labelledby="pills-fasilitas3-tab"><img src="{{asset('image/')}}/fasilitas3.jpg" alt="" height="300"></div>
                            <div class="tab-pane fade" id="pills-fasilitas4" role="tabpanel" aria-labelledby="pills-fasilitas4-tab"><img src="{{asset('image/')}}/fasilitas4.jpg" alt="" height="300"></div>
                        </div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-fasilitas1-tab" data-bs-toggle="pill" data-bs-target="#pills-fasilitas1" type="button" role="tab" aria-controls="pills-fasilitas1" aria-selected="true"><img src="{{asset('image/')}}/fasilitas1.jpg" alt=""></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-fasilitas2-tab" data-bs-toggle="pill" data-bs-target="#pills-fasilitas2" type="button" role="tab" aria-controls="pills-fasilitas2" aria-selected="false"><img src="{{asset('image/')}}/fasilitas2.jpg" alt=""></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-fasilitas3-tab" data-bs-toggle="pill" data-bs-target="#pills-fasilitas3" type="button" role="tab" aria-controls="pills-fasilitas3" aria-selected="false"><img src="{{asset('image/')}}/fasilitas3.jpg" alt=""></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-fasilitas4-tab" data-bs-toggle="pill" data-bs-target="#pills-fasilitas4" type="button" role="tab" aria-controls="pills-fasilitas4" aria-selected="false"><img src="{{asset('image/')}}/fasilitas4.jpg" alt=""></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection