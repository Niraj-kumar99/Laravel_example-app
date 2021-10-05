<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return "Hello Everyone";
});
*/

/*
Parameterized route with single parameter .

Route::get('/posts/{id}', function ($id) {
    return $id;
});
*/

/*
//Parameterized route with multiple parameter .
Route::get('/posts/{roll_no}/{student_name}', function ($id , $student_name) {
    return $id. '   '.$student_name;
});
*/

//move from one route to another.
Route::get('/', function() {
    return "<a href='contact-us'>Contact</a>";
});

Route::get('contact-us', function() {
    return "U reached us...";
});
