<?php
namespace App\Http\Controllers;

use App\Http\Requests\postMahasiswaRequest;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    //fungsi halaman data mahasiswa
    public function index()
    {
        //memanggil data mahasiswa keseluruhan
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    //fungsi halaman tambah data mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    //fungsi simpan data mahasiswa
    public function store(postMahasiswaRequest $request)
    {
        //memanipulasi data $request dan mengkripsi password 
        $input              = $request->all();
        $input['password']  = Hash::make($request->password);
        $input['role']      = 'mahasiswa';

        // mengupload gambar dari inputan ke project
        if ($request->foto) 
        {
            $name_file        = $request->npm.'_' . $request->foto->getClientOriginalName();
            $input['foto']    = $name_file;
            $request->file('foto')->move('storage/foto/', $name_file);
        }

        //menyimpan data user dan data mahasiswa sekaligus
        $user               = User::create($input);
        $input['user_id']   = $user->id;
        $mahasiswa          = Mahasiswa::create($input);

        return redirect()->route('mahasiswa.index')->with('success','data berhasil disimpan');
    }

    //fungsi halaman edit 
    public function edit($id)
    {
        //memanggil data mahasiswa berdasarkan id yang di kirim
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }
    
    //fungsi update data mahasiswa
    public function update(Request $request, $id)
    {
        //memanggil data mahasiswa berdasarkan id yang dikirm
        $mahasiswa = Mahasiswa::findorfail($id);
        $user      = $mahasiswa->user;
        
        //manipulasi data $request
        $input     = $request->all();


        // mengupload gambar dari inputan ke project
        if ($request->foto) {

            //menghapus file terdahulu
            if ($mahasiswa->foto) {
                Storage::delete('public/foto/'. $mahasiswa->foto);
            }

            $name_file        = $request->npm.'_' . $request->foto->getClientOriginalName();

            $input['foto']    = $name_file;
            $request->file('foto')->move('storage/foto', $name_file);
        }

       
        if($request->password)
        {
            $input['password']  = Hash::make($request->password);
        }else{
            $input['password']  = $user->password;
        }

        $mahasiswa->update($input);
        $user->update($input);

        return redirect()->route('mahasiswa.index')->with('success','data berhasil diubah');
    }

    //fungsi delete data mahasiswa
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findorfail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success','data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $request->flash();
        if(isset($request->keyword))
        {
            $mahasiswa = Mahasiswa::where('npm','LIKE','%'.$request->keyword.'%')
                        ->latest()->get();
            return view('mahasiswa.index',compact('mahasiswa'));
        }else{
            return redirect()->route('mahasiswa.index');
        }
    }

    public function print()
    {
        $mahasiswa = Mahasiswa::latest()->get();

        return view('mahasiswa.print',compact('mahasiswa'));
    }
}
