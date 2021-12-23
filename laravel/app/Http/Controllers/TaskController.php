<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        return Auth::user()->tasks()->with('lesson')->get();
    }

    public function today(){
        return Auth::user()->tasks()->whereDate('created_at', Carbon::today())->with('lesson')->get();
    }

    public function rate(){
        return [
            'all' => Auth::user()->tasks()->count(),
            'completion' => Auth::user()->tasks()->where('achievement', '=', true)->count(),
        ];
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
            'achievement' => $request->input('achievement'),
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
