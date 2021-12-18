<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return Auth::get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|unique:posts|email:rfc,dns',
            'password' => 'required|password:api',
        ]);
        return User::create([
            'name' => $validatedData->input('name'),
            'email' => $validatedData ->input('email'),
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

    public function destory(){
        $user = User::first();
        $user->delete();
        return $user;
    }

    public function login(Request $request){
        if(Auth::attempt($request->all())) {
            return Auth::user();
        }
        return response(204);
    }

}
