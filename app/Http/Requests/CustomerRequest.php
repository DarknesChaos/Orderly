<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
                    'address' => 'required|max:255',
                    'phone' => 'required|between:4,17',
                    'email' => 'required|email|unique:customers',
                ];

                break;

            case 'PUT' :
                return [
                    'name' => 'required|max:255',
                    'address' => 'required|max:255',
                    'phone' => 'required|between:4,17',
                    'email' => 'required|email',
                ];
                break;
        }
    }
}
