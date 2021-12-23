<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        return Auth::user()->tasks()->with('lesson')->get();
    }

    public function store(Request $request)
    {
        return Auth::user()->tasks()->create([
            'lesson_id' => $request->input('lesson_id'),
            'detail' => $request->input('detail'),
        ])->with('lesson')->get();
    }

    public function show($id){
        return Auth::user()->tasks()->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $task = Auth::user()->tasks()->findOrFail($id);
        $task->update([
            'achievement_count' => $request->input('achievement_count'),
            'lesson_id' => $request->input('lesson_id'),
            'detail' => $request->input('detail'),
        ]);
        return $task;
    }

    public function destory($id){
        Auth::user()->tasks()->findOrFail($id)->delete();
        return response()->noContent();
    }
}
