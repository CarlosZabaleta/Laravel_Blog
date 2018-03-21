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

Route::get('/tasks/', function () {
    $name = 'Carlos';
    $age = 25;
    $tasks = DB::table('task')->orderby('created_at')->get();

    // To create JSON for an API
    // return $tasks;
    return view('tasks.index', compact('id','name','age','tasks'));
});

Route::get('/tasks/{task}', function($id) {
    $task= DB::table('task')->find($id);
    return view('tasks.show', compact('task'));
});

Route::get('about', function() {
    return view('About Us');
});