<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnakRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|max:255',
            'foto' => 'image|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'foto.max' => 'Gambar yang diupload harus berukuran maksimal 5MB.'
        ];
    }
}
