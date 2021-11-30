<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;
use App\User;

class TimetableController extends Controller
{

    public function index(Request $request)
    {
        $user = User::first();
        return $user->timetables()->get();
    }

    public function store(Request $request)
    {
        //
        return Timetable::create([
            'week_count' => $request->input('week_count'),
            'period' => $request->input('period'),
            'lesson_id' => $request->input('lesson_id'),
        ]);
    }
}
