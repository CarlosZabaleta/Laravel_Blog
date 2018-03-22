<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Task;

/**
 * php artisan make:controller TaskController
 * Create a public function inside the NameController to connect to the view
 */
class TaskController extends Controller
{
    public function index(){
        $name = 'Carlos';
        $age = 25;
        $tasks= Task::get();
        return view('tasks.index', compact('name','age','tasks'));
    }

/**
 * Controller tasks.show view, show all of the view on separate pages by id
 */
    public function show(Task $task){
        return view('tasks.show', compact('task'));
    }
}
