<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;
use App\User;
use App\Lesson;

class LessonController extends Controller
{
    //
    public function index(Request $request)
    {
        return Lesson::all();
    }

    public function store(Request $request)
    {
        return Lesson::create([
            'title' => $request->input('title'),
            'limit' => $request->input('limit'),
        ]);
    }

}
