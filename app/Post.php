<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function replies(){
        return $this->hasMany('App\PostReply','post_id','id');
    }

    public function attachments(){
        return $this->hasMany('App\PostAttachment','post_id','id');
    }




}
