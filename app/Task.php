<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project(){
      return $this->belongsTo('App\Project','project_id');
    }
    protected $fillable = [
     'completed', 'project_id', 'description'
   ];
}


//App\Task::first()->project; radi
