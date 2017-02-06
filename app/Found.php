<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Found extends Model
{
    //
    protected $table = 'founds';

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function replies(){
        return $this->hasMany('App\FoundReply','found_id','id');
    }

    public function attachments(){
        return $this->hasMany('App\FoundAttachment','found_id','id');
    }
}
