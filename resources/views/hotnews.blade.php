@extends('master')
@section('content')
<div class="container">
    <div class="content">
        <div class="title">hot news</div>
        @foreach($tintuc as $tt)
        <p>{{$tt->TieuDe}}</p><br>
        <p>{{$tt->NoiDung}}</p><br>
        <p>{{$tt->TomTat}}</p><br>
        <p>{{$tt->KeyWord}}</p><br>
        <p>{{$tt->loaitin->Ten}}</p><br>
        @endforeach
        <div class="quote"></div>
    </div>
</div>
@endsection