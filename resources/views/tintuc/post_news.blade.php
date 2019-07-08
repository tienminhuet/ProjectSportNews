@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
            <form action="tintuc/them" method="POST" enctype="multipart/form-data">
                <!-- luon phai co dong nay -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="hinh"/>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <label>Loai tin </label>
                    <select name="loaitin">
                        @foreach($loaitin as $lt)
                            <option value="{{$lt->id}}">{{$lt->Ten}}</option>
                            @endforeach
                    </select><br>
                    <label>Tieu de </label>
                    <input type="text" name="tieude" placeholder="Them tieu de..."><br>
                    <label>Noi dung </label>
                    <textarea rows="4" cols="50" name="noidung">
                             Enter text here...</textarea>

                    <p>The text area above is outside the form element, but should still be a part of the form.</p>

                    <p><b>Note:</b> The form attribute is not supported in IE.</p>
                    <label>Hinh anh</label>
                    
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success"><span style="color:black">Submit<span></button>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>
@endsection