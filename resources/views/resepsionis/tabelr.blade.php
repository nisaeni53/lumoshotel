@extends('resepsionis.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
            <div class="card-header d-flex">
                <h1 class="card-title">Table Resepsionis Hotel</h1>
                <form class="form" method="get" action="{{ route('search') }}" style="margin-left: 38%">
                    <div class="form-group w-100 mb-3">
                        <input type="text" name="search" id="search" placeholder="Masukkan keyword" value="{{ $keyword }}">
                        <button type="submit">Cari</button>
                    </div>
                </form>
            </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama Pemesan</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Check in</th>
                        <th>Tanggal Check out</th>
                        <th>Tipe Kamar</th>
                        <th>Jumlah Kamar</th>
                        {{-- <th>Harga Total</th> --}}
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemesanan as $key => $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_pemesan}}</td>
                    <td>{{$row->nomor_telepon}}</td>
                    <td>{{$row->check_in}}</td>
                    <td>{{$row->check_out}}</td>
                    <td>{{$row->kamar->tipe_kamar}}</td>
                    <td>{{$row->jumlah_kamar}}</td>
                    <td> @if ($row->status == 1)
                        <form action="{{ route('index.update',$row->id) }}" name="status" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="2">
                            <button type="submit" class="btn btn-danger">Check in</button>
                        </form>
                        @elseif ($row->status == 2)
                        <form action="{{ route('landing.update',$row->id) }}" name="status" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="3">
                            <button type="submit" class="btn btn-success">Check out</button>
                        </form>
                        @else
                        <button type="submit" class="btn btn-primary">Selesai</button>
                        @endif
                    </td>    
                </tbody>
                    @endforeach
            </table>
            {{ $pemesanan->links() }}
        </div>
    </div>
</div>
@endsection