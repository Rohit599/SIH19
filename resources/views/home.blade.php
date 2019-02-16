@extends('layouts.default')
@section('content')
@if($service == 'facebook')
<div class="title m-b-md">
    Welcome {{ $user->getName() }} ! <br> .
    <a href="{{url('/issue/create')}}">Add Issue</a>
</div>
@endif

@if($service == 'twitter')
<div class="title m-b-md">
    Welcome {{ $user->getName() }} ! <br> 
    <a href="{{url('/issue/create')}}">Add Issue</a>
    {{-- Your username is : {{ $details->nickname }}<br>
    Total Tweets : {{ $details->user['statuses_count']}}<br>
    Followers : {{ $details->user['followers_count']}}<br>
    Following : {{ $details->user['friends_count']}} --}}
</div>
@endif
@stop