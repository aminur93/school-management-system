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
    
    //Course Route
    Route::get('/course',['as'=>'course','uses'=>'CourseController@index']);
    Route::get('/course/create',['as'=>'course.create','uses'=>'CourseController@create']);
    
    //Academic Route
    Route::get('/academic',['as'=>'academic','uses'=>'AcademicController@index']);
    Route::post('/academic/store',['as'=>'academic.store','uses'=>'AcademicController@store']);
    Route::get('/academic/getdata',['as'=>'academic.getData','uses'=>'AcademicController@getData']);
    Route::post('/academic/update',['as'=>'academic.update','uses'=>'AcademicController@update']);
    Route::get('/academic/delete-academic/{academic_id}',['uses'=>'AcademicController@destroy']);
    
    //Program Route
    
});


