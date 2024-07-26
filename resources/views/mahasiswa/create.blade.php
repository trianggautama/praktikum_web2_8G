@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>Tambah Data Mahasiswa</p>
                <form action="{{Route('mahasiswa.store')}}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">NPM</label>
                        <input type="text" class="form-control" name="npm">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">- pilih jurusan -</option>
                            <option value="SI">SI</option>
                            <option value="TI">TI</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="float-end mt-4">
                        <a href="{{Route('mahasiswa.index')}}" class="btn btn-secondary"> kembali</a>
                        <button type="submit" class="btn btn-success">simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection