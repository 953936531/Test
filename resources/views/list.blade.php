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
<div>
    @if($dakey['code'] == '200')
   <p>金额: {{$dakey['amount']}}</p>
    <table>
        <tr>
            <td>ID</td>
            <td>金额</td>
        </tr>
        @foreach($dakey['data'] as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['total_amount']}}</td>
        </tr>
        @endforeach
    </table>
    @else

    <div>
        {{$dakey['message']}}
    </div>
    @endif
</div>
@stop

@section('script')

@stop