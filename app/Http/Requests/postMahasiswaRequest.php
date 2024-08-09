<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama'          => 'required',
            'npm'           => 'required',
            'jurusan'       => 'required',
            'gender'        => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'alamat'        => 'required',
            'foto'          => ['required','mimes:jpg,JPG,jpeg,png','max:2000'],
            'username'      => ['required','unique:users'],
            'password'      => ['required','min:8'],
        ];
    }
}
