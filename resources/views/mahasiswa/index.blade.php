@extends('layouts.main')
@section('content')
    <div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <p>Data Mahasiswa</p>
                </div>
                <div class="col-md">
                    <div class="float-end">
                        <a href="{{Route('mahasiswa.create')}}" class="btn btn-primary">+ tambah data</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NPM</td>
                            <td>Jurusan</td>
                            <td> Tempat , Tanggal Lahir</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection