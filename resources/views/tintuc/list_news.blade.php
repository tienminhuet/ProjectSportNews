<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('master')
@section('content')
@foreach($tintuc as $tt)
<div> {{$tt->id}}</div>
<div> {{$tt->TieuDe}}</div>
<div> {{$tt->NoiDung}}</div>

@endforeach
<img src="upload/tintuc/DSC_1048.JPG" alt="" with="300px"/>
@endsection
</body>
</html>