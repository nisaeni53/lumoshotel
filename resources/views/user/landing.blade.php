@extends('user.layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset ('css/')}}/landing.css">
    <div class="container">
        <div class="jumbroton">
            {{-- <div class="photo-jumbroton mt-2 d-flex">
                <img src="image/imgutama.png" alt="" style="width: 100%">
            </div> --}}
            <div class="judul">
                <h1>Enjoy Your Dream Vacation</h1>
            </div>
            <div class="subjudul mt-4">
                <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, eos repellendus dolore nesciunt facilis</h5>
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
                                <button class="btn btn-primary mt-4">Masuk</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </form>
        </div>
        <div class="pilih-ruangan mt-5">
            <div class="title">
                <h1><center>Entire Room of Choice</center></h1>
            </div>
            <div class="choice-room mt-3">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="{{asset('image/')}}/kamar1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <h5 class="price">Rp 15.000</h5>
                                    <div class="information-room d-flex">
                                        <h4 class="name-room">Signature Room</h4>
                                        <p class="btnselengkapnya">
                                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Selengkapnya
                                            </a>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapse1">
                                        <div class="card card-body">
                                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="{{asset('image/')}}/kamar2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <h5 class="price">Rp 15.000</h5>
                                    <div class="information-room d-flex">
                                        <h4 class="name-room">Signature Room</h4>
                                        <p class="btnselengkapnya">
                                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Selengkapnya
                                            </a>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapse2">
                                        <div class="card card-body">
                                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="{{asset('image/')}}/kamar3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <h5 class="price">Rp 15.000</h5>
                                    <div class="information-room d-flex">
                                        <h4 class="name-room">Signature Room</h4>
                                        <p class="btnselengkapnya">
                                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Selengkapnya
                                            </a>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapse3">
                                        <div class="card card-body">
                                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="facility mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="title">
                        <h1 style="font-weight: bolder">What you Get</h1>
                        <h5 style="font-weight:400;">lorem ipsum dolor sit amet, constrecture cipslicing elit sed efencict, libero</h5>
                    </div>
                    <div class="name-facility mt-4">
                        <div class="facility-1 d-flex mt-2">
                            <img src="{{asset('image/')}}/pantai.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Beach </h5>
                        </div>
                        <div class="facility-2 d-flex mt-2">
                            <img src="{{asset('image/')}}/pool.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Infinity Pool </h5>
                        </div>
                        <div class="facility-3 d-flex mt-2">
                            <img src="{{asset('image/')}}/nicefoood.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Nice Food </h5>
                        </div>
                        <div class="facility-4 d-flex mt-2">
                            <img src="{{asset('image/')}}/campfire.png" alt="" height="30">
                            <h5 style="font-weight:400;"> Campfire </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tab-content" id="pills-tabContent">
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
    
@endsection