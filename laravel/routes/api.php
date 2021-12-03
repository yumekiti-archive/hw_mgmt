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

Route::get('/user', 'UserController@index');

Route::put('/user', 'UserController@update');

Route::post('/user', 'UserController@store');

Route::delete('/user', 'UserController@destory');

Route::get('/task', 'TaskController@index');

Route::post('/task', 'TaskController@store');

Route::get('/timetable', 'TimetableController@index');

Route::post('/timetable', 'TimetableController@store');

Route::put('/timetable/update/{id}', 'TimetableController@update');