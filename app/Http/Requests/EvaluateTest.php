<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class EvaluateTest extends FormRequest
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

    protected function getValidatorInstance()
    {
        $data = $this->answer;

        $this->session()->flash('prev_answer', $data);

        return parent::getValidatorInstance();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_praktikan' => 'required|max:50',
            'nim_praktikan' => 'required|max:11',
            'kelas_praktikan' => 'required|max:9',
            'shift_praktikan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute tidak boleh lebih dari :max'
        ];
    }

    public function getRedirectUrl()
    {
        return url()->previous();
    }

    public function formatErrors(Validator $validator)
    {
        $this->session()->flash('form', 'evaluate_praktikum');

        return $validator->getMessageBag()->toArray();
    }
}
