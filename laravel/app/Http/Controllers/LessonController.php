<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = User::first();
        return $user->lessons()->get();
    }

}
