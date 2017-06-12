<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  // link tags to projects model
  public function projects() {
    return $this->belongsToMany('App\Project', 'project_tag');
  }
}
