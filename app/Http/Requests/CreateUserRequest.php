<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $hashedToken = Hash::make('xNiEeqjQhA9kdw96DCKBIR9');
        $token = $request->bearerToken();

        if( Hash::check($token, $hashedToken)) return true;
        return false;
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
