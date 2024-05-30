<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function create(Request $request) {

        Users::create($request->all());

        return response()->json([
            'message' => 'Пользователь успешно создан!'
        ]);
    }
}