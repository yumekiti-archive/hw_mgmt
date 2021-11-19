<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //User 追加
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::get();
    }

    public function store()
    {

    }


    public function show()
    {
        
    }
}
