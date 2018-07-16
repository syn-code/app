<?php

namespace App\Http\Controllers;

//don't need this import here
//use Illuminate\Http\Request;

//calling the Task Model to reference the queries
use App\Task;

class TasksConstroller extends Controller
{
    //we need to add an index method

    public function index()
    {
        //anything in here we can think of it as the same

        $task = Task::all();

    return view('task.index', compact('task'));

    }

    public function show(Task $task) //This is going to find a Task::find(wildcard);
    {
        //$task = Task::find($id);
        return $task;
        //Task::incomplete();
        //dd($task);
        //return view('task.show', compact('task'));
    }
}
