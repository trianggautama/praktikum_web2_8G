@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body text-center">
            <h2>Selamat Datang user : 
                <span class="text-primary">{{$userLoggedIn->nama}}</span>
            </h2>
        </div>
    </div>
@endsection