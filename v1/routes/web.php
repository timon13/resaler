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

Route::get('cache-data', function () {

    $user = \Cache::remember('user', 60, function () {
        return \App\Models\User::first();
    });

    if(isset($user)) {
        echo print_r($user);
    }


});
