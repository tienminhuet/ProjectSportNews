<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\LoaiTin;

class Post_newsController extends Controller
{
    public function getDanhsach() {
        $tintuc = TinTuc::all();
        return view('tintuc.list_news', ['tintuc'=>$tintuc]);
    }

    public function getThem()
    {
        //Lay ra toan bo loai tin
        $loaitin = LoaiTin::all();
        // Dua ve form them tin,do du lieu cua loai tin
        return view('tintuc.post_news', ['loaitin' => $loaitin]);
    }
    public function postThem(Request $request)
    {
        $this->validate(
            $request,
            [
                'tieude' => 'required|unique:tintuc,TieuDe|min:3|max:100',
                'noidung' => 'required',
                'loaitin' => 'required',
                'hinh' => 'image|mimes:jpg,png,jpeg,svg|max:2048'
            ],
            [
                'tieude.required' => 'Ban phai dien tieu de',
                'tieude.min' => 'Tieu de phai co tren 3 ki tu',
                'tieude.max' => 'Tieu de phai co duoi 100 ki tu',
                'tieude.unique' => 'Tieu de bi trung lap',
                'noidung.required' => 'Ban phai dien noi dung tin',
                'loaitin.required' => 'Ban phai chon loai tin',
                'hinh.image' => 'Anh khong dung dinh dang',
                'hinh.mimes' => 'Duoi anh phai la jpg, png, jpeg hoac svg',
                'hinh.max' => 'Anh phai nho hon 2MB'
            ]
        );

        $tintuc = new TinTuc;
        $tintuc->NoiDung = $request->noidung;
        $tintuc->TieuDe = $request->tieude;
        $tintuc->IDLoaiTin = $request->loaitin;
        
        //Kiem tra xem da cho hinh chua
        if($request->hasFile('hinh')) {
            // lay thong tin file anh
            $file = $request->file('hinh');
            //lay ten goc cua anh
            $name = $file->getClientOriginalName();
            // doi ten anh tranh trung lap
            $hinhanh = str_random(4)."_".$name;
            //kiem tra anh trong fileupload, neu trung thi doi ten
            while (file_exists('upload/tintuc'.$hinhanh)) {
                $hinhanh = str_random(4)."_".$name;  
            }
            // di chuyen anh vao file upload
            $file->move('upload/tintuc'. $hinhanh);
            // luu thong tin duong dan cua anh moi
            $tintuc->HinhAnh = $hinhanh;
        } else {
            // 
            $tintuc->HinhAnh = "";
        }
        $tintuc->save();

        return redirect("tintuc/them")->with('thongbao', 'Ban da them tin thanh cong');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
