<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);

        $project->addTask($attributes);

        return back();
    }
}
