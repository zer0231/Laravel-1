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

// Route::get('/about',function(){
//     return view('about');
// });