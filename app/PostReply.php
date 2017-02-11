<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReply extends Model
{
    protected $table = 'post_reply';

    public function user(){
        return $this->belongsTo('App\Post','post_id','id');
    }
}
