<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
        $user = \App\User::find($this->users);
        
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'name' => 'required|max:255',
                    'cpf' => 'required:cpf',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|max:255',
                    'cpf' => 'required:cpf',
                    'email' => 'required|email|max:255|unique:users,email,'.$user->id,                   
                ];
            }
            default:break;
        }
    }
    
    public function messages() {
        return [
            'name.required' => 'O campo NOME deve ser OBRIGATÓRIO.',
            'name.max' => 'O campo NOME deve ter até 255 caracteres.',
            'cpf.required'  => 'O campo CPF é OBRIGATÓRIO.',
            'cpf.cpf'  => 'Informe um CPF VÁLIDO.',
            'email.required'  => 'O campo EMAIL deve ser OBRIGATÓRIO.',
            'email.email'  => 'Informe um endereço de email VÁLIDO.',
            'password.required'  => 'O campo SENHA deve ser OBRIGATÓRIO.',
            'password.min'  => 'A SENHA deve possuir pelo menos 6 caracteres.',
            'password.confirmed'  => 'A SENHA deve ser idêntica a confirmação.',
        ];
    }
}
