<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class TambahPraktikum extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
     */
    public function authorize()
    {
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
            'nama_praktikum' => 'required',
            'jumlah_modul' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nama_praktikum.required' => 'Nama Praktikum tidak boleh kosong',
            'jumlah_modul.required' => 'Jumlah Modul tidak boleh kosong'
        ];
    }

    protected function getRedirectUrl()
    {
        return url()->previous();
    }

    protected function formatErrors(Validator $validator)
    {
        $this->session()->flash('form', 'tambah_praktikum');

        return $validator->getMessageBag()->toArray();
    }
}
