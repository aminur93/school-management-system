<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
    
Route::get('/noPermission', function () {
        return view('permission.noPermission');
});

Route::group(['middleware' => ['authen']], function (){
    
    Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashBoardController@dashboard']);
});

Route::group(['middleware' => ['authen','roles'], 'roles' => ['Admin']], function (){
    
    Route::get('/course',['as'=>'course','uses'=>'CourseController@index']);
    Route::get('/course/create',['as'=>'course.create','uses'=>'CourseController@create']);
});


