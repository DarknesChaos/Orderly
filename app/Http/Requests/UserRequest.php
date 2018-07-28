<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch($this->method()){
            case 'POST' :
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:8',
                    'confirm_password' => 'required|min:8|same:password',
                ];

                break;

            case 'PUT' :
                return [
                    'name' => 'required|max:255',
                    'email' => 'required',
                    'password' => 'max:255',
                    'confirm_password' => 'max:255|same:password',
                ];
                break;
        }
    }
}
