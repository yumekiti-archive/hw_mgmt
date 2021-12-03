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

    public function store(Request $request)
    {
        $user = User::first();
        return $user->timetables()->create([
            'week_count' => $request->input('week_count'),
            'period' => $request->input('period'),
            'lesson_id' => $request->input('lesson_id'),
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

}
