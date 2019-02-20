@extends('layouts.default')
@section('content')
<main class="mt-5">
	<div class="container-fluid">

	    <!--Grid row-->
	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-5">
	        	<a href="redirect/facebook">Login in with Facebook</a>
	        	<a href="redirect/twitter">Login in with Twitter</a>
	        	<a href="register">Register</a>

	        	<br>
	        	@include('includes.msg')
	        	<br>

	        	<form action="{{ url('login') }}" method="POST">
	        		{{ csrf_field() }}
	        		<input type="email" name="email" required="">
	        		<input type="password" name="password" required="">
	        		<input type="submit">
	        	</form>

	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-md-7">



	        </div>
	        <!--Grid column-->

	    </div>

	</div>
</main>
@stop