@extends('layouts.default')
@section('content')
<div class="title m-b-md">
    <a href="{{url('/issue/create')}}">Add Issue</a>
    <a href="{{url('/issues')}}">View All Existing Issues</a>
    <a href="{{url('logout')}}">Logout</a>
</div>
<div>
	@if(isset($issues))
		@foreach($issues as $issue)
			{{$issue->title}}
		@endforeach
	@endif
</div>
@stop