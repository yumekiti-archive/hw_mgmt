<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //User 追加
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

    }

    public function store()
    {

    }


    public function show()
    {
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        $user->id();
        $user->name();
        return $home;
        
    }
}
