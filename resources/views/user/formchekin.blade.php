<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/')}}/formcheckin.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
        
            </div>
            <div class="col-5">
                <div class="card card-checkin mt-4">
                    <div class="card-body">
                        <form class="form" action="{{@$landing ? route('landing.update',@$landing->id) : route('landing.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(@$landing)
                                {{method_field('patch')}}
                            @endif
                        <div class="container">
                            <div class="card-title mt-2">
                                <h1>Check-In</h1>
                            </div>
                            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="nama_pemesan" aria-describedby="emailHelp" 
                                name="nama_pemesan">
                            <label for="nama_pemesan" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="nama_pemesan" aria-describedby="emailHelp" 
                                name="nomor_telepon">
                            <label for="check-in" class="form-label mt-1">Check-In</label>
                                <input type="date" class="form-control form-control-lg" name="check_in" id="check-in">
                            <label for="check-out" class="form-label mt-1">Check-Out</label>
                                <input type="date" class="form-control form-control-lg" name="check_out" id="check-out">
                            <div class="row mt-1">
                                <div class="col-6">
                                    <label for="id_kamar" class="form-label">Type Kamar</label>
                                    <select class="select form-control" name="id_kamar" id="Kamar">
                                        <option value="">-- Pilih Kamar --</option>
                                        @foreach ($kamar as $row)
                                            <option value="{{$row->id}}" {{@$pemesanan->id_kamar == $row->id ? "selected" : "" }}>
                                                {{$row->tipe_kamar}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="jumlah_kamar" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar">
                                </div>
                            </div>
                            <label for="harga_total" class="form-label">Harga Total</label>
                                <input type="text" class="form-control" id="harga_total" name="harga_total">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="hidden" name="status" value="1">
                                </div>
                            </div>
                            <div class="ini-harga mt-2" style="text-align: right">
                                <h5>Rp 500.000/Kamar</h5>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Pesan Sekarang</button>
                            <a href="{{url('user/cetak',$row->id)}}" type="hidden"></a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/js/bootstrap.min.js"></script>

</body>
</html>