<?php

use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

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
    return view('tasks');
});

Route::post('/task', function (Request $request) {
    //
});

Route::delete('tastks/{id}', function ($id) {
    //
});
