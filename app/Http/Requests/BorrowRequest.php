<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BorrowRequest extends FormRequest
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
            'end_day_borrow' => 'after:day_borrow',
        ];
    }

    public function messages(){
        return [
            'end_day_borrow.after' => 'End day borrow is after day borrow',
        ];
    }
}
