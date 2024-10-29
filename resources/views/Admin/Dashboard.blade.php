@extends('Layouts.Base')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Tabel Pegawai</h3>
    </div> <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td>1.</td>
                    <td>Riko</td>
                    <td>63888282</td>
                    <td>Palu</td>
                    <td>
                        <div class="btn btn-warning">Edit</div>
                        <div class="btn btn-danger">Hapus</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"> <a class="page-link" href="#">«</a> </li>
            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
            <li class="page-item"> <a class="page-link" href="#">»</a> </li>
        </ul>
    </div>
</div>
@endsection


