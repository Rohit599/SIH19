@extends('layouts.default')
@section('content')
<main>
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
</main>
@stop