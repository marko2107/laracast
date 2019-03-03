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
}
