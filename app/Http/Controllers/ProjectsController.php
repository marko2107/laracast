<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){
      $projects= Project::all();
      //dd($projects);
      return view ('projects.index')->with('projects', $projects);
    }

    public function create(){
      return view ('projects.create');
    }

    public function store(){

      //Project::create([request('title','description')]);

      // 2. nacin
       Project::create([
         'title'=>request('title'),
         'description'=>request('description')
       ]);

      // 1. nacin
      // $project = new Project;
      // $project -> title = request('title');
      // $project -> description = request('description');
      // $project -> save();
      return redirect('/projects');
    }

    public function show(Project $project){
      //$project=Project::findOrFail($id);
      return view ('projects.show')->with('project', $project);
    }

    public function update(Project $project){
      $project->update([
        'title'=>request('title'),
        'description'=>request('description')
      ]);

      //$project=Project::findOrFail($id);

      // $project->title=Request('title');
      // $project->description=Request('description');
      // $project->save();

      return redirect('/projects');
    }

    public function destroy(Project $project){
      $project->delete();
      return redirect('/projects');
    }

    public function edit(Project $project){
      //$project=Project::findOrFail($id);
      return view ('projects.edit')->with('project', $project);
    }
}
