<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function reply(){
        return $this->belongsToMany('App\MessageReply');
    }
}
