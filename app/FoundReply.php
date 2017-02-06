<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoundReply extends Model
{
    protected $table = 'found_reply';

    public function user(){
        return $this->belongsTo('App\Found','found_id','id');
    }
}
