<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimetableController extends Controller
{

    public function index()
    {
        return Auth::user()->timetables()->with(['lesson', 'lesson_color'])->get();
    }

    public function store(Request $request)
    {
        return Auth::user()->timetables()->create([
            'week_count' => $request->input('week_count'),
            'period' => $request->input('period'),
            'lesson_id' => $request->input('lesson_id'),
            'user_id'=> Auth::user()->id,
        ]);
    }

    public function update(Request $request, $id)
    {
        return Auth::user()->timetables()->findOrFail($id)->update([
            'week_count' => $request->input('week_count'),
            'period' => $request->input('period'),
            'lesson_id' => $request->input('lesson_id'),
        ]);
    }
    
    public function destory($id){
        Auth::user()->timetables()->findOrFail($id)->delete();
        return response()->noContent();
    }
}
