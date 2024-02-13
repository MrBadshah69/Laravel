<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home/{id}/{name}/{age}', function ($id , $name , $age) {
    echo "<h1>User ID:" . $id . "</h1>";
    echo "<h1>User Name:" . $name . "</h1>";
    echo "<h1>User Age:" . $age . "</h1>";
    return view('lecture');
})->whereNumber("id");