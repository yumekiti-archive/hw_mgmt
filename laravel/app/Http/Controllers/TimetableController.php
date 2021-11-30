<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;
use App\User;

class TimetableController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = User::first();
        return $user->timetables()->get();
    }
}
