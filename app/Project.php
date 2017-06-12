<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // link tags to projects
    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function images() {
      return $this->hasMany('App\ProjectImage');
    }
}
