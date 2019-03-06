<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $guarded=[];
     protected $fillable = [
      'title','description'
    ];

    public function tasks(){
      return $this->hasMany('App\Task', 'project_id');
    }

}
//App\Project::first()->tasks; radi
