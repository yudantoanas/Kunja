<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_modul' => 'required',
            'judul_modul' => 'required',
            'penyusun_modul' => 'required',
            'modul_image' => 'required|image|mimes:jpeg,jpg,bmp,png|max:10000',
            'modul_file' => 'required|file|mimes:pdf|max:10000',
            'tesawal_file' => 'required|file|mimes:pdf|max:10000'
        ];
    }
}
