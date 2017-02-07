<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoundAttachment extends Model
{
    protected $table = 'found_attachment';
    public $timestamps = false;

    public function found(){
        return $this->belongsTo('App\Found','found_id','id');
    }
}
