<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanHoi extends Model
{
    protected $table = "phanhoi";
    public function tintuc(){
        return $this->belongsTo('App\TinTuc','IDTT','id');
    }
}
