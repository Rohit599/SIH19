@extends('layouts.default')
@section('content')
<form action="{{ route('issue.store') }}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="title">Issue Title <font color="red">*</font></label>
	<input type="text" name="title"><br>
	<label for="description">Issue Description <font color="red">*</font></label>
	<textarea name="description"></textarea><br>
	<label for="title">Pollution Type <font color="red">*</font></label>
	<select name="pollution">
		@foreach($pollutions as $pollution)
		<option value="{{$pollution->id}}">{{$pollution->name}}</option>
		@endforeach
	</select>
	<br>
	<input type="text" name="latitude" id="latitude">
	<input type="text" name="longitude" id="longitude">
	<input type="text" id="location" name="location" value="">
	<input type="file" name="upload_file" id="upload_file">
	<div id="type-selector" class="controls">
		<button id="chooseLoc" onclick="openMap()">Choose Location</button>
	</form>
	<div id="map" style="height: 400px; width: 400px; position: relative;">fsd</div>
	<input type="submit" name="submit">
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<script type="text/javascript">
		

                  // Sets a listener on a radio button to change the filter type on Places
                  // Autocomplete.
                  // function setupClickListener(id, types) {
                  // 	var radioButton = document.getElementById(id);
                  // 	radioButton.addEventListener('click', function() {
                  // 		autocomplete.setTypes(types);
                  // 	});
                  // }
                  // setupClickListener('changetype-all', []);
                  // setupClickListener('changetype-address', ['address']);
                  // setupClickListener('changetype-establishment', ['establishment']);
                  // setupClickListener('changetype-geocode', ['geocode']);



	      var map; var marker;var latitude; var longitude;
	      // var x = document.getElementById("demo");
	      $(document).ready(function(){
	      	if (navigator.geolocation) {
	      		navigator.geolocation.getCurrentPosition(showPosition);
	      	}
	      	function showPosition(position) {
                  		// var map;
		  // x.innerHTML = "Latitude: " + position.coords.latitude + 
		  // "<br>Longitude: " + position.coords.longitude;
		  latitude = position.coords.latitude;
		  longitude = position.coords.longitude;
		  $("#latitude").val(latitude);
		  $("#longitude").val(longitude);
		  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&location_type=ROOFTOP&result_type=street_address&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8"
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

		  	// alert('hello');
		  	var uluru = loc;
		  	      // The map, centered at Uluru
		  	      map = new google.maps.Map(
		  	      	document.getElementById('map'), {zoom: 13, center: uluru});
		  	      // The marker, positioned at Uluru
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
		  	      	var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+location.lat()+","+location.lng()+"&location_type=ROOFTOP&result_type=street_address&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8"
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
		  	      			if(data['status'] != "ZERO_RESULTS"){$("#location").val(data.results[0]["formatted_address"]);
		  	      		}
		  	      		initMap(loc);
		  	      	},
		  	      		dataType: dataType
		  	      	});
		  	      }
		  	  }
		//   	  var input = /** @type {!HTMLInputElement} */(
		// 	document.getElementById('location'));
		// var types = document.getElementById('type-selector');
		// // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		// // map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

		// var autocomplete = new google.maps.places.Autocomplete(input);
		// autocomplete.bindTo('bounds', map);

		// autocomplete.addListener('place_changed', function() {
		// 	marker.setVisible(false);
		// 	var place = autocomplete.getPlace();

		// 	if (!place.geometry) {
  //           // User entered the name of a Place that was not suggested and
  //           // pressed the Enter key, or the Place Details request failed.
  //           window.alert("No details available for input: '" + place.name + "'");
  //           return;
  //       }

  //         // If the place has a geometry, then present it on a map.
  //         if (place.geometry.viewport) {
  //         	map.fitBounds(place.geometry.viewport);
  //         } else {
  //         	map.setCenter(place.geometry.location);
  //           map.setZoom(17);  // Why 17? Because it looks good.
  //       }
  //       marker.setIcon(/** @type {google.maps.Icon} */({
  //       	url: place.icon,
  //       	size: new google.maps.Size(71, 71),
  //       	origin: new google.maps.Point(0, 0),
  //       	anchor: new google.maps.Point(17, 34),
  //       	scaledSize: new google.maps.Size(35, 35)
  //       }));
  //       marker.setPosition(place.geometry.location);
  //       marker.setVisible(true);

  //       var item_Lat =place.geometry.location.lat()
  //       var item_Lng= place.geometry.location.lng()
  //       var item_Location = place.formatted_address;
  //         //alert("Lat= "+item_Lat+"_____Lang="+item_Lng+"_____Location="+item_Location);
  //         $("#lat").val(item_Lat);
  //         $("#lng").val(item_Lng);
  //         $("#location").val(item_Location);
  //         var address = '';
  //         if (place.address_components) {
  //         	address = [
  //         	(place.address_components[0] && place.address_components[0].short_name || ''),
  //         	(place.address_components[1] && place.address_components[1].short_name || ''),
  //         	(place.address_components[2] && place.address_components[2].short_name || '')
  //         	].join(' ');
  //         }
  //     });
		  // https://maps.googleapis.com/maps/api/geocode/json?latlng=26.8467088,80.9461592&location_type=ROOFTOP&result_type=street_address&key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8&libraries=visualization&callback=initMap">
	</script>
	@stop
{{-- AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8 --}}