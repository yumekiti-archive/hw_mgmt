<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return 'Hello World';
});

//ユーザーの処理
Route::get('/user', 'UserController@index');

Route::put('/user', 'UserController@update');

Route::post('/user', 'UserController@store');

Route::delete('/user', 'UserController@destory');

//タスクの処理
Route::get('/task', 'TaskController@index');

Route::post('/task', 'TaskController@store');

Route::put('/task/update/{id}', 'TaskController@update');

Route::delete('/task/{id}', 'TaskController@destory');

//レッスンの処理
Route::get('/lesson', 'LessonController@index');

Route::post('/lesson', 'LessonController@store');

Route::put('/lesson/update/{id}', 'LessonController@update');

Route::delete('/lesson/{id}', 'LessonController@destory');

//時間割の処理
Route::get('/timetable', 'TimetableController@index');

Route::post('/timetable', 'TimetableController@store');

Route::put('/timetable/update/{id}', 'TimetableController@update');

Route::delete('/timetable/{id}', 'TimetableController@destory');

//
Route::get('/invite', 'InviteController@index');


