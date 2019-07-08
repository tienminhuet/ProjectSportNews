<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = "tintuc";//nảng mà model muon sử dụng
    public function loaitin() {
        return $this->belongsTo('App\LoaiTin', 'IDLoaiTin', 'id');
    }
}
