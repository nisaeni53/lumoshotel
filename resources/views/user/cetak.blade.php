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
    <!-- Bukti -->
    <div id="pesan" class="row justify-content-center">
        <div class="col-7">    
            <div class="card">
                <div class="card-header">
                    <h1>Lumos<b>Hotel</b></h1>
                    <h6 class="text-center">Tangkap layar laman ini sebagai bukti pemesanan kepada resepsionis.</h6>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Bukti Pemesanan</h4>
                    <p>Pemesanan atas nama <b>{{ $item->nama_pemesan }}</b>, dengan detail:<br>
                    1. Tanggal check in: {{ $item->check_in }}<br>
                    2. Tanggal check out: {{ $item->check_out }}<br>
                    3. Nomor Hp: {{ $item->nomor_telepon }}<br>
                    4. Tipe Kamar: {{ $item->kamar->tipe_kamar }}<br>
                    5. Jumlah Kamar: {{ $item->jumlah_kamar }}<br>
                    6. Total Harga: {{ $item->harga_total }}</p>                        
                    <center><a href="/landing" class="btn btn-primary mb-3">Selesai</a></center>
                </div>
            </div>
        </div>
    </div>
<!-- Akhir Bukti -->
    <script src="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/js/bootstrap.min.js"></script>
    
</body>
</html>