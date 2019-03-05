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
      $project = new Project;
      $project -> title = request('title');
      $project -> description = request('description');
      $project -> save();
      return redirect ('/projects');

    }

    public function show(){

    }

    public function update($id){
      $project=Project::findOrFail($id);
      $project->title=Request('title');
      $project->description=Request('description');
      $project->save();

      return redirect('/projects');
    }

    public function destroy($id){
      $project=Project::findOrFail($id)->delete();
      return redirect('/projects');
    }

    public function edit($id){
      $project=Project::findOrFail($id);
      return view ('projects.edit')->with('project', $project);
    }
}
