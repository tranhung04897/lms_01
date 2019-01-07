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
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:50',
            'name' => 'required|max:50',
            'address' => 'required',
            'phone' => 'required',

        ];
    }

    public function messages(){
        return [
            'email.required' => trans('errors.email-required'),
            'email.email'=> trans('errors.email-email'),
            'password.required' => trans('errors.password-required'),
            'password.max' => trans('errors.password-max'),
            'password.min' => trans('errors.password-min'),
            'name.required' => trans('errors.name-required'),
            'name.max' => trans('errors.name-max'),
            'address.required' => trans('errors.address-required'),
            'phone.required' => trans('errors.phone-required'),

        ];
    }
}
