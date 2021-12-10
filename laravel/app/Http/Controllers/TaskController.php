<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //認証が実装出来たら認証中のユーザを使うようにする。
        $user = User::first();
        return $user->tasks()->get();
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //認証が実装出来たら認証中のユーザを使うようにする。
        $validatedData = $request->validate([
            'achievement_count' => 'required|numeric',
            'lesson_id' => 'required|numeric',
            'detail' => 'required',
        ]);
        $user = User::first();
        return $user->tasks()->create([
            'achievement_count' => $validatedData->input('achievement_count'),
            'lesson_id' => $validatedData->input('lesson_id'),
            'detail' => $validatedData->input('detail'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // TODO: mashimo 認証が実装出来たら認証中のユーザを使うようにする。
        $user = User::first();
        $task = $user->tasks()->find($id);
        $task->update([
            'achievement_count' => $request->input('achievement_count'),
            'lesson_id' => $request->input('lesson_id'),
            'detail' => $request->input('detail'),
        ]);

        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
