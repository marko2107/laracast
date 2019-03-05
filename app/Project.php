<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function tasks(){
    return $this->hasMany(Task::class);
  }

    //protected $guarded=[];
     protected $fillable = [
      'title','description'
    ];
}

v16 04:39m
