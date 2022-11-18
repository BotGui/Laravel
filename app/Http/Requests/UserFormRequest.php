<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name'                  => ['required', 'min:3'],
            'email'                 => ['required', 'email'],
            'password'              => ['required', 'min:3', 'confirmed'],
            'password_confirmation' => ['required', 'min:3']

        ];
    }

    public function messages()
    {
        return [
            'name.required'                  => 'O campo nome é obrigatório!',
            'name.min'                       => 'O campo nome precisa de pelo menos :min caracteres.',
            'email.required'                 => 'O campo e-mail é obrigatório!',
            'password.required'              => 'O campo senha é obrigatório!',
            'password.min'                   => 'O campo senha precisa de pelo menos :min caracteres!',
            'password_confirmation.required' => 'O campo comfirme a senha é obrigatório!',
            'password_confirmation.min'      => 'O campo senha precisa de pelo menos :min caracteres!',
            'password.confirmed'             => 'O campo senha deve ser identico ao campo confirme a senha!'
        ];
    }
}
