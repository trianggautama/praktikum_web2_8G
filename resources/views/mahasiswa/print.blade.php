@extends('layouts.print')
@section('content')
    <div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NPM</td>
                            <td>Jurusan</td>
                            <td> Tempat , Tanggal Lahir</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mahasiswa->user->nama}}</td>
                            <td>{{$mahasiswa->npm}}</td>
                            <td>{{$mahasiswa->jurusan}}</td>
                            <td>{{$mahasiswa->tempat_lahir}}, {{Carbon\carbon::parse($mahasiswa->tanggal_lahir)->format('d-m-Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection