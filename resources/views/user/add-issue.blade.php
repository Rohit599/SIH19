@extends('layouts.default')
@section('content')
	<form action="event" method="POST">
		<label for="title">Issue Title <font color="red">*</font></label>
		<input type="text" name="title"><br>
		<label for="description">Issue Description <font color="red">*</font></label>
		<textarea name="description"></textarea><br>
		<label for="title">Pollution Type <font color="red">*</font></label>
		<select name="cars">
			@foreach($pollutions as $pollution)
		  		<option value="{{$pollution->id}}">{{$pollution->name}}</option>
		  	@endforeach
		</select>
		<br>
		<p id="demo"></p>
		<input type="text" id="location" name="location" value="">
		<button id="chooseLoc" onclick="openMap()">Choose Location</button>
	</form>
	<script type="text/javascript">
		var x = document.getElementById("demo");
		$(document).ready(function(){
			if (navigator.geolocation) {
			    navigator.geolocation.getCurrentPosition(showPosition);
			}
		});
		function showPosition(position) {
		  x.innerHTML = "Latitude: " + position.coords.latitude + 
		  "<br>Longitude: " + position.coords.longitude;
		}
	</script>
@stop