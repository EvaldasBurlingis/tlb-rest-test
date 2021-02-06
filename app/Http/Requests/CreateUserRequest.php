<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'users' => 'required|array',
            'users.*.first_name' => 'required|string|min:2|max:32',
            'users.*.last_name'  => 'required|string|min:2|max:32'
        ];
    }
}
