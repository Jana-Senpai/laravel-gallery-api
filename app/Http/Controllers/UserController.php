<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUser()
    {
        $users = User::all();

        return response()->json([
            "data" => $users
        ]);
    }

    public function totalUser()
    {
        $totalUser = User::count();

        return response()->json([
            "totaluser" => $totalUser
        ]);
    }
}
