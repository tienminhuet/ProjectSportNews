@extends('master')
@section('content')
<div class="container">
    <div class="content">
        <div class="title">contact</div>
        @foreach($phanhoi as $tt)
        <p>{{$tt->HoTen}}</p><br>
        <p>{{$tt->Email}}</p><br>
        <p>{{$tt->NoiDung}}</p><br>
        <p>{{$tt->tintuc->Ten}}</p><br>
        @endforeach
        <div class="quote"></div>
    </div>
</div>
@endsection