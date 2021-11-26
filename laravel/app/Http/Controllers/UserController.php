<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //User 追加
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

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

    public function update(Request $request)
    {
        // TODO: mashimo 認証が実装出来たら認証中のユーザを使うようにする。
        $user = User::first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }

}
