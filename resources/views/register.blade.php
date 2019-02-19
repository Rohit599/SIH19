@extends('layouts.default')
@section('content')
@if (!isset($user) && !$errors->any())
	<a href="redirect/facebook">Login in with Facebook</a>
	<a href="redirect/twitter">Login in with Twitter</a>
	<br>
	<br>
@endif
<form action="{{ route('user.register') }}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="name" value="@if (old('name') != null) {{ old('name') }} @elseif (isset($user)) {{ $user['name']}} @endif" required><br>
    @if ($errors->has('name'))
        <small class="form-text text-muted text-danger mb-4">{{ $errors->first('name') }}</small>
    @endif
    <br>
	<input type="email" name="email" value="@if (old('email') != null) {{ old('email') }} @elseif (isset($user)) {{ $user['email']}} @endif" required><br>
    @if ($errors->has('email'))
        <small class="form-text text-muted text-danger mb-4">{{ $errors->first('email') }}</small>
    @endif
    <br>
	<input type="password" name="password" required><br>
    @if ($errors->has('password'))
        <small class="form-text text-muted text-danger mb-4">{{ $errors->first('password') }}</small>
    @endif
    <br>
	<input type="password" name="password_confirmation" required><br>
    @if ($errors->has('password_confirmation'))
        <small class="form-text text-muted text-danger mb-4">{{ $errors->first('password_confirmation') }}</small>
    @endif
	<input type="submit">
</form>
@stop