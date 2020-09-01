<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        $id = $this->user;
        return [
            'name' => 'required|max:255|unique:user,name,' . $id,
            'street' => 'required|max:255|unique:user,' . $id,
            'postcode' => 'required|max:255|unique:user,' . $id,
            'city' => 'required|max:255|unique:user,' . $id,
            'country' => 'required|max:255|unique:user,' . $id,
            'email' => 'required|email|max:255|unique:user,email,' . $id,
            'password' => 'required|confirmed|min:6'
        ];
    }

}