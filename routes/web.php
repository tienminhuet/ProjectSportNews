<?php

use App\LoaiTin;
use App\TinTuc;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post_newsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return view('home');
});
Route::get('post_news',function(){
    return view('post_news'); 
});
Route::get('/',    'PageController@home');
Route::get('/about',    'PageController@about');

Route::group(['prefix'=>'tintuc'], function() {
    Route::get('danhsach', 'Post_newsController@getDanhsach');

    Route::get('them', 'Post_newsController@getThem');
    Route::post('them', 'Post_newsController@postThem');
});
// b1: tạo route,ở đây là .../tintuc, sau khi gõ đường dẫn, thì sẽ gọi đến hàm danhsach trong TinTucController
