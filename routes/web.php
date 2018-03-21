<?php

use App\Task;

/**
 * Controller tasks.index view
 */
Route::get('/tasks', function () {
    $name = 'Carlos';
    $age = 25;
    // $tasks = DB::table('tasks')->latest()->get();

    // Eloquent and dedicated Class
    $tasks= Task::get();
    // To create JSON for an API
    // return $tasks;
    return view('tasks.index', compact('name','age','tasks'));
});

/**
 * Controller tasks.show view, show all of the view on separate pages by id
 */

Route::get('/tasks/{task}', function($id) {
    // $tasks= DB::table('tasks')->find($id);
    
    // Eloquent and dedicated Class
    $tasks = App\Task::find($id);
    
    return view('tasks.show', compact('tasks'));
});

Route::get('about', function() {
    return view('about');
});