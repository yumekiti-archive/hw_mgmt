<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimetableController extends Controller
{

    public function index()
    {
        return Auth::user()->timetables()->with('lesson')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'week_count' => 'required|numeric',
            'period' => 'required|numeric',
            'lesson_id' => 'required|numeric',
        ]);
        $user = User::first();
        return $user->timetables()->create([
            'week_count' => $validatedData->input('week_count'),
            'period' => $validatedData->input('period'),
            'lesson_id' => $validatedData->input('lesson_id'),
            'user_id'=> $user->id,
        ]);
    }

    public function update(Request $request, $id)
    {
        // TODO: mashimo 認証が実装出来たら認証中のユーザを使うようにする。
        $user = User::first();
        $timetable = $user->timetables()->find($id);
        $timetable->update([
            'week_count' => $request->input('week_count'),
            'period' => $request->input('period'),
            'lesson_id' => $request->input('lesson_id'),
            'user_id'=> $user->id,
        ]);
        return $timetable;
    }
    
    public function destory($id){
        $user = User::first();
        $timetable = $user->timetables()->find($id)->delete();
        return  $id;
    }
}
