<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
        return view('mahasiswa.edit');
    }
    
    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
    }
}
