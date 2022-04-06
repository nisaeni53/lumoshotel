@extends('admin.layout.app')
@section('content')

{{-- <body class="bg-primary"> --}}
<div class="container">
    <div class="card mt-5">
        <div class="card-head">
            <div class="card-header">
                <a href="{{route('fasilitashotel.create')}}" class="btn btn-primary"> Tambah Fasilitas </a>
            </div>
            <div class="card-title">
                <h1>Table Admin Fasilitas Hotel</h1>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitashotel as $row)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama_fasilitas}}</td>
                    <td>{{$row->foto}}</td>
                    <td>{{$row->keterangan}}</td> 
                    <td>
                        <a href="{{route('fasilitashotel.edit', $row->id)}}" class="btn btn-warning" >Edit </a>
                        <a href="#" data-id="{{$row->id}}" class="btn btn-danger btn-del">Delete</a>
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>
{{-- </body> --}}
@endsection


@push('scripts')
<script>
    $(document).on('click', '.btn-del', function () {
        var id = $(this).data('id');
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        'url': '{{url('fasilitashotel')}}/' + id,
                        'type': 'post',
                        'data': {
                            '_method': 'DELETE',
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (response) {
                            if (response == 1) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                window.setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data gagal dihapus!'
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush