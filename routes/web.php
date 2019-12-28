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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/random', 'CounterController@randomView');
Route::post('/random', 'CounterController@random');
Route::get('/counter', 'SimpleCounter@countView');
Route::post('/counter', 'SimpleCounter@count');

Route::get('/about','AboutController@index');

Route::get('/student-form/create', 'StudentController@create');
Route::post('/student-form/create', 'StudentController@store');
Route::get('/student-list', 'StudentController@index');

route::get('/student/remove/{id}','StudentController@destroy');

Route::get('/student/update/{id}', 'StudentController@edit');
Route::post('/student/update/{id}', 'StudentController@update');
// Route::get('/about',function(){
//     return view('about');
// });