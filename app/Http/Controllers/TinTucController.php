<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;

class TinTucController extends Controller
{
    //
    public function danhsach() {
        $tintuc = TinTuc::all();
        return view('hotnews', ['tintuc'=>$tintuc]);//?

    }
    // Ham danhsach co nhiem vu lay toan bo du lieu tai bang tin tuc, sau do tra lai du lieu ra cai view hotnews
    // Xong tao them mang tintuc de chua du lieu cua cai @tintuc
}
