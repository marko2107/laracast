<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    public function update(Task $task){
      $task->update([
        'completed'=>request()->has('completed')
      ]);
      return back();
    }

    public function store(Project $project){
      //dd($project);
      $validator = request()->validate(['description'=> 'required']);
      Task::create([
        'project_id'=>$project->id,
        'description'=>$validator
      ]);
      return back();
    }
}
