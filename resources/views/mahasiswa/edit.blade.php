@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>Edit Data Mahasiswa</p>
                <form action="{{Route('mahasiswa.update',$mahasiswa->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3">
                        <label for="">NPM</label>
                        <input type="text" class="form-control" name="npm" value="{{$mahasiswa->npm}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$mahasiswa->user->nama}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">- pilih jurusan -</option>
                            <option value="SI" {{$mahasiswa->jurusan == 'SI' ? 'selected' : ''}}>SI</option>
                            <option value="TI" {{$mahasiswa->jurusan == 'TI' ? 'selected' : ''}}>TI</option>
                        </select>
                    </div>
                    <label for="" class="mt-4">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki" {{$mahasiswa->gender == 'Laki-laki' ? 'checked' : ''}}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan" {{$mahasiswa->gender == 'Perempuan' ? 'checked' : ''}}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat">{{$mahasiswa->alamat}}</textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <small>Foto sebelum </small>
                            <img src="{{asset('storage/foto/'.$mahasiswa->foto)}}" alt="" width="100">
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto">
                                <small class="text-danger">Isi jika ingin merubah foto</small>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$mahasiswa->user->username}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                                <small class="text-danger">isi jika ingin merubah password</small>
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