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
                        <div class="container">
                            <div class="card-title mt-2">
                                <h1>Check-In</h1>
                            </div>
                            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="nama_pemesan" aria-describedby="emailHelp" 
                                name="nama_fasilitas">
                            <label for="nama_pemesan" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nama_pemesan" aria-describedby="emailHelp" 
                                name="nama_fasilitas">
                            <label for="check-in" class="form-label mt-1">Check-In</label>
                                <input type="date" class="form-control form-control-lg" name="" id="check-in">
                            <label for="check-out" class="form-label mt-1">Check-Out</label>
                                <input type="date" class="form-control form-control-lg" name="" id="check-out">
                            <div class="row mt-1">
                                <div class="col-6">
                                    <label for="Kamar" class="form-label">Type Kamar</label>
                                    <select class="select form-control" name="" id="Kamar">
                                        <option value="">-- Pilih Kamar --</option>
                                        @foreach ($kamar as $row)
                                            <option value="{{$row->id}}">
                                                {{$row->tipe_kamar}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="Jumlah" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="Jumlah" name="nama_fasilitas">
                                </div>
                            </div>
                            <div class="ini-harga mt-2" style="text-align: right">
                                <h5>Rp 500.000/Kamar</h5>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/js/bootstrap.min.js"></script>

</body>
</html>