<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LostReply extends Model
{
    protected $table = 'lost_reply';

    public function user(){
        return $this->belongsTo('App\Lost','lost_id','id');
    }
}
