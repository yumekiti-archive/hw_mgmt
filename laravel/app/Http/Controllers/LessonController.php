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
        $validatedData = $request->validate([
            'title' => 'required|max:30|alpha_num',
            'limit' => 'required|numeric',
        ]);
        return Lesson::create([
            'title' => $validatedData->input('title'),
            'limit' => $validatedData->input('limit'),
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $lesson = Lesson::find($id);
        $lesson->update([
            'title' => $request->input('title'),
            'limit' => $request->input('limit'),
        ]);

        return $lesson;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return 
     */
    public function destory($id){
        $lesson = Lesson::find($id);
        $lesson->delete();
    }

}