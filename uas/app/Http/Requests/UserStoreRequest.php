<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'username' => 'required|unique:user',
            'email' => 'required|email:rfc,dns',
        ];
    }

    function messages(){
        return [
            'nama.required' => 'Wajib di Isi',
            'username.required' => 'Wajib di Isi',
            'username.unique' => ' Username Tersebut Sudah Terdaftar',
            'email.required' => 'Wajib di Isi',
        ];
    }
}