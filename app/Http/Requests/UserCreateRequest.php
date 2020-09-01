<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|max:255|unique:user',
            'street' => 'required|max:255|unique:user',
            'postcode' => 'required|max:255|unique:user',
            'city' => 'required|max:255|unique:user',
            'country' => 'required|max:255|unique:user',
            'email' => 'required|email|max:255|unique:user',
            'password' => 'required|confirmed|min:6'
        ];
    }

}