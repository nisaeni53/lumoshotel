@extends('admin.layout.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-title">
                <h1>Table Resepsionis</h1>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id pinjam</th>
                        <th>Nama Barang</th>
                        <th>Jumlah pinjam</th>
                        <th>Tanggal pinjam</th>
                        <th>Tanggal kembali</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 01 </td>
                        <td>Buku</td>
                        <td> 100 </td>
                        <td>10-1-2021</td>
                        <td>12-1-2021</td>
                    </tr>
                    <tr>
                        <td> 02 </td>
                        <td>Infocus</td>
                        <td> 100 </td>
                        <td>10-1-2021</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td> 03 </td>
                        <td>Printer</td>
                        <td> 100 </td>
                        <td>10-1-2021</td>
                        <td>12-1-2021</td>
                    </tr>
                    <tr>
                        <td> 04 </td>
                        <td>Laptop</td>
                        <td> 100 </td>
                        <td>10-1-2021</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


    
@endsection