<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAttachment extends Model
{
    protected $table = 'post_attachment';
    public $timestamps = false;

    public function found(){
        return $this->belongsTo('App\Post','post_id','id');
    }
}
