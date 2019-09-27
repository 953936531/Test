@extends('layouts.layout')

@section('content')
    <form action="{{url('/home')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        姓名:<input type="text" name="name"> <br>
        年龄: <input type="text" name="age"> <br>
        头像: <input type="file" name="img"> <br>
        <button type="submit">提交</button>
    </form>
@stop

@section('script')

@stop