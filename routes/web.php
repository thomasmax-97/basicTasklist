<?php

use App\Task;
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
    $task = Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
        'tasks' => $task
    ]);
});

Route::post('/task', 'TasksController@store');


Route::delete('task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
