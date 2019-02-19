@extends('layouts.default')
@section('content')
<div class="title m-b-md">
    <a href="{{url('/issue/create')}}">Add Issue</a>
    <a href="{{url('logout')}}">Logout</a>
</div>
@stop