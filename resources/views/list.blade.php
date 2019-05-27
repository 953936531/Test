@extends('layouts.layout')
@section('css')
    <style>
        td{
            height:200px;
            width:200px;
            text-align: center;
            border:1px solid black;
        }
    </style>
@stop
@section('content')
    <table>
        <tr>
            <th>姓名</th>
            <th>年龄</th>
            <th>头像</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td><img style="width:150px;height:150px;" src="/upload/{{$user->imgPath}}" alt=""></td>
        </tr>
        @endforeach
    </table>
@stop

@section('script')

@stop