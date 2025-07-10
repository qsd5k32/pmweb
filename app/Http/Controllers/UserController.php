<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Users',
            'data' => User::all()
        ]);
    }
    public function list()
    {
        $users = User::select('Id', 'Username', 'FirstName', 'LastName', 'Email')->get();
        return response()->json([
            'message' => 'Users',
            'data' => $users
        ]);
    }
}
