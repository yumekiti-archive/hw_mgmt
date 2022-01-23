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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/', function () {
//     return 'Hello World';
// });

//認証
Route::post('/login', 'UserController@login');

Route::middleware('auth:sanctum')->group(function () {
    //ユーザーの処理
    Route::get('/user', 'UserController@index');
    Route::put('/user', 'UserController@update');
    Route::post('/user', 'UserController@store');
    Route::delete('/user', 'UserController@destory');
    Route::get('/user/{id}', 'UserController@another_user');

    //タスクの処理
    Route::get('/task', 'TaskController@index');
    Route::get('/task/today', 'TaskController@today');
    Route::get('/task/events', 'TaskController@events');
    Route::get('/task/histories', 'TaskController@histories');
    Route::post('/task/date', 'TaskController@date');
    Route::get('/task/rate', 'TaskController@rate');
    Route::get('/task/achievement/{id}', 'TaskController@achievement');
    Route::get('/task/{id}', 'TaskController@show');
    Route::post('/task', 'TaskController@store');
    Route::put('/task/{id}', 'TaskController@update');
    Route::delete('/task/{id}', 'TaskController@destory');

    //レッスンの処理
    Route::get('/lesson', 'LessonController@index');
    Route::get('/lesson/{id}', 'LessonController@show');
    Route::get('/{user_id}/lesson/{id}','LessonController@achievement_lesson');
    Route::post('/lesson', 'LessonController@store');
    Route::put('/lesson/{id}','LessonController@update');
    Route::delete('/lesson/{id}', 'LessonController@destory');
    Route::get('{user_id}/lessons', 'LessonController@another_user');

    //時間割の処理
    Route::get('/timetable', 'TimetableController@index');
    Route::post('/timetable', 'TimetableController@store');
    Route::put('/timetable/{id}', 'TimetableController@update');
    Route::delete('/timetable/{id}', 'TimetableController@destory');

    //招待の処理
    Route::get('/invite', 'InviteController@index');
    Route::post('/invite/{id}/{token}', 'InviteController@invite');
    Route::post('/invite', 'InviteController@store');
    Route::delete('/invite/{id}', 'InviteController@destory');
});