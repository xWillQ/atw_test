<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'type' => 'required|string|in:front,back',
            'github' => 'url|nullable',
            'city' => 'string|nullable',
            'phone' => 'string|nullable',
            'birthday' => 'date|nullable',
        ];
    }
}
