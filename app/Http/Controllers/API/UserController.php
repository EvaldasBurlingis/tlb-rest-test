<?php

namespace App\Http\Controllers\API;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $data = $request->all();
        $data = $data['users'];

        $response_data = Helper::format_full_name($data);

        return response()->json([
            'users' => $response_data,
            'message' => 'User added successfully'
        ], 200);
    }
}
