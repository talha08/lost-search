<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    //
    protected $table = 'losts';

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function founds(){
        return $this->hasMany('App\LostReply','lost_id','id');
    }

}
