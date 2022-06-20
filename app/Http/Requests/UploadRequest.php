<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
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
