@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>Tambah Data Mahasiswa</p>
                <form action="{{Route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">NPM</label>
                        <input type="text" class="form-control" name="npm">
                        @error('npm')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                        @error('nama')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">- pilih jurusan -</option>
                            <option value="SI">SI</option>
                            <option value="TI">TI</option>
                        </select>
                        @error('jurusan')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <label for="" class="mt-4">Gender</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                    </div>
                    @error('gender')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir">
                                @error('tempat_lahir')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                        @error('alamat')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto">
                        @error('foto')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username">
                                @error('username')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
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