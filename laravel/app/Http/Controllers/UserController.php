<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //User 追加
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::get();
    }

    public function store(Request $request)
    {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    }


    public function show()
    {
        
    }
}
