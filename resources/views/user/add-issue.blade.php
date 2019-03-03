@extends('layouts.default')
@section('script')
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8&libraries=visualization&callback=initMap">
</script>
<script type="text/javascript">
	var map; var marker; var latitude; var longitude;
	$(document).ready(function(){
	    if (navigator.geolocation) {
	      		navigator.geolocation.getCurrentPosition(showPosition);
	    }
	    function showPosition(position) {
			latitude = position.coords.latitude;
		    longitude = position.coords.longitude;
		    $("#latitude").val(latitude);
		    $("#longitude").val(longitude);
		    var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8"
		    var data ="";
		    var loc = {
		  	lat : position.coords.latitude,
		  	lng : position.coords.longitude
		    }
		    var dataType = "json";
		    $.ajax({
		  	url: url,
		  	data: data,
		  	success: function(data, textStatus, jqXHR) {
		  		if(data['status'] != "ZERO_RESULTS"){
		  			$("#location").val(data.results[0]["formatted_address"]);
		  			console.log('hello');
		  		}
		  		initMap(loc);},
		  		dataType: dataType
		  	});
		}
	});
	function initMap(loc){
		var uluru = loc;
		map = new google.maps.Map(
		document.getElementById('map'), {zoom: 13, center: uluru});
		var marker = new google.maps.Marker({position: uluru, map: map});	
		google.maps.event.addListener(map, 'click', function(event) {
		  	placeMarker(event.latLng);
		});

		function placeMarker(location) {
		  	if(marker != null){
		  	    marker.setMap(null);
		  	}
		  	marker = new google.maps.Marker({
		  	    position: location, 
		  	    map: map
		  	});
		  	latitude = location.lat();
		  	longitude = location.lng();
		  	$("#latitude").val(latitude);
		  	$("#longitude").val(longitude);
		  	// var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+location.lat()+","+location.lng()+"&location_type=ROOFTOP&result_type=street_address&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8";
		  	var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+location.lat()+","+location.lng()+"&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8";
		  	var data ="";
		  	var loc = {
		  	lat : location.lat(),
		  	lng : location.lng()
		  	}
		  	var dataType = "json";
		  	$.ajax({
		  	    url: url,
		  	    data: data,
		  	    success: function(data, textStatus, jqXHR) {
		  	        if(data['status'] != "ZERO_RESULTS"){ $("#location").val(data.results[0]["formatted_address"]);
		  	      	}
		  	      	initMap(loc);
		  	    },
		  	    dataType: dataType
		  	});
		}
	}
</script>
@stop
@section('header')
@include('includes.login_modal')
@stop
@section('content')
<main style="margin-top: 6rem;">
	<div class="container">
		<!-- Material form contact -->
		<div class="card">

			<h5 class="card-header info-color white-text text-center py-4">
				<strong>Create Issue</strong>
			</h5>

			<!--Card content-->
			<div class="card-body px-lg-5 pt-0">

				<!-- Form -->
				<form style="color: #757575;" method="POST" action="{{url('issue')}}" enctype="multipart/form-data" id="add_blog">
					@csrf
					@include('includes.msg')
					<!-- Name -->
					<div class="md-form mt-3">
						<input type="text" id="title" name="title" class="form-control" required>
						<label for="title">Title</label>
					</div>

					<!-- E-mail -->
					<div class="md-form mt-3">
						<p>Description</p>
						<textarea type="text" id="description" class="md-textarea form-control" rows="3" name="description"></textarea>
						<label for="description"></label>
					</div>

					<div class="md-form mt-3" >
						<!--Blue select-->
						<p>Pollution type</p>
						<select class="mdb-select md-form colorful-select dropdown-info" name="pollution">
						    @foreach($pollutions as $pollution)
						  		<option value="{{$pollution->id}}">{{$pollution->name}}</option>
						  	@endforeach
						</select>
						<!--/Blue select-->
					</div>

					<div class="md-form">
						<p>Address</p>
						<div class="form-row">
					    <!-- Grid column -->
					    	<div class="col">
					      <!-- Default input -->
					      		<input type="text" class="form-control" placeholder="Latitude" name="latitude" id="latitude">
					    	</div>
					    <!-- Grid column -->

					    <!-- Grid column -->
					    	<div class="col">
					      <!-- Default input -->
					      		<input type="text" class="form-control" placeholder="Longitude" name="longitude" id="longitude">
					   		</div>
					    <!-- Grid column -->
					    	<div class="col">
					      <!-- Default input -->
					      		<input type="text" class="form-control" placeholder="Your location" id="location" name="location" value="">
					    	</div>
						</div>
					</div>
					<div class="md-form card-body card-body-cascade text-center">
						<div id="map" style="height: 400px; width: 950px; position: relative;"></div>
					</div>

					<!--Message-->
					<div class="md-form mt-3">
						<div class="file-field">
							<div class="btn blue-gradient btn-rounded btn-sm float-left">
								<span><i class="fas fa-upload mr-2" aria-hidden="true"></i>Choose Picture</span>
								<input type="file" name="upload_pic" id="upload_pic" accept="image/*" aria-describedby="fileHelp" data-max-file-size="2M" required>
							</div>
							<div class="file-path-wrapper">
								<input type="text" class="file-path validate" placeholder="Upload your file">
							</div>
						</div>
					</div>
					<div class="md-form mt-3">
						<div class="file-field">
							<div class="btn blue-gradient btn-rounded btn-sm float-left">
								<span><i class="fas fa-upload mr-2" aria-hidden="true"></i>upload Document</span>
								<input type="file" name="upload_file" id="upload_file" data-max-file-size="2M">
							</div>
							<div class="file-path-wrapper">
								<input type="text" class="file-path validate" placeholder="Upload your file">
							</div>
						</div>
					</div>
					<div class="md-form mt-3">
						<p>Blog Tags</p>
						<div class="chips chips-placeholder"></div>
					</div>
					<input type="hidden" id="tags" name="tags">
					<!-- Send button -->
					<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Post</button>

				</form>
				<!-- Form -->

			</div>

		</div>
		<!-- Material form contact -->
	</div>
</main>
@stop