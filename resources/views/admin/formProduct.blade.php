@extends('master')

@section('content')
<form action="/uploadfile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama">
    <input type="file" name="gambar" >
    <input type="submit" name="upload" value="upload">
</form>
@endsection