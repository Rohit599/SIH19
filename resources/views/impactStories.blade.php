@section('css')
<style type="text/css">
header{
	height: 100%;
}
</style>
@stop
@extends('layouts.default')
@section('header')
<!-- Intro Section -->
<div id="intro" class="view">

	<div class="mask rgba-black-strong">
		<div class="container-fluid d-flex align-items-center justify-content-center h-100">
			<div class="row d-flex justify-content-center text-center">
				<div class="col-md-10">
					<!-- Heading -->
					<h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Cosmo Green</h2>
					<!-- Divider -->
					<hr class="hr-light">

					<!-- Description -->
					<h4 class="white-text my-4">An Idea to build a Swachh Bharat(Clean India)</h4>
					<button type="button" class="btn btn-outline-white waves-effect waves-light">Read more<i class="fa fa-book ml-2"></i></button>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade show" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog cascading-modal" role="document">
	<div class="modal-content">

		<!--Modal cascading tabs-->
		<div class="modal-c-tabs">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
				<li class="nav-item waves-effect waves-light">
					<a class="nav-link show active" data-toggle="tab" href="#panel17" role="tab" aria-selected="true">
						<i class="fas fa-user mr-1"></i> Login</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a class="nav-link show" data-toggle="tab" href="#panel18" role="tab" aria-selected="false">
							<i class="fas fa-user-plus mr-1"></i> Register</a>
						</li>
					</ul>

					<!-- Tab panels -->
					<div class="tab-content">
						<!--Panel 17-->
						<div class="tab-pane fade active show" id="panel17" role="tabpanel">

							<!--Body-->
							<form class="modal-body mb-1" id="form_login" method="POST" action="{{url('login')}}">
								<meta name="csrf-token" content="{{ csrf_token() }}">
								@include('includes.msg')
								<div class="md-form form-sm">
									<i class="fas fa-envelope prefix"></i>
									<input type="text" id="email" class="form-control form-control-sm" name="email">
									<label for="email">Your email</label>
								</div>

								<div class="md-form form-sm">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="password" class="form-control form-control-sm" name="password">
									<label for="password">Your password</label>
								</div>
								<div class="text-center mt-4">
									<button class="btn btn-info waves-effect waves-light" type="submit">Log in
										<i class="fas fa-sign-in ml-1"></i>
									</button>
									<p>or sign in with:</p>
									<a type="button" class="btn-floating btn-fb btn-sm waves-effect waves-light" href="{{url('redirect/facebook')}}"><i class="fab fa-facebook-f"></i></a>
									<a type="button" class="btn-floating btn-tw btn-sm waves-effect waves-light" href="{{url('redirect/twitter')}}"><i class="fab fa-twitter"></i></a>

								</div>
							</form>
							<!--Footer-->
							<div class="modal-footer">
								<div class="options text-center text-md-right mt-1">
									<p>Not a member?
										<a class="blue-text show" data-toggle="tab" href="#panel18" role="tab" aria-selected="false">Sign Up</a>
									</p>
									<p>Forgot
										<a href="#" class="blue-text">Password?</a>
									</p>
								</div>
								<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
							</div>

						</div>
						<!--/.Panel 7-->

						<!--Panel 18-->
						<div class="tab-pane fade in" id="panel18" role="tabpanel">

							<!--Body-->
							<form class="modal-body" method="POST" action="{{url('register')}}" id="form_register">
								<meta name="csrf-token" content="{{ csrf_token() }}">

								@include('includes.msg')
								<div class="md-form form-sm">
									<i class="fas fa-envelope prefix"></i>
									<input type="text" id="name1" class="form-control form-control-sm" name="name">
									<label for="name1">Your name</label>
								</div>
								<div class="md-form form-sm">
									<i class="fas fa-envelope prefix"></i>
									<input type="text" id="email1" class="form-control form-control-sm" name="email">
									<label for="email1">Your email</label>
								</div>

								<div class="md-form form-sm">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="password1" class="form-control form-control-sm" name="password">
									<label for="password1">Your password</label>
								</div>

								<div class="md-form form-sm">
									<i class="fas fa-lock prefix"></i>
									<input type="password" id="password_confirmation" class="form-control form-control-sm" name="password_confirmation">
									<label for="password_confirmation">Repeat password</label>
								</div>

								<div class="text-center form-sm mt-4">
									<button class="btn btn-info waves-effect waves-light">Sign up
										<i class="fas fa-sign-in ml-1"></i>
									</button>
								</div>
								<!--Footer-->
								<div class="modal-footer">
									<div class="options text-right">
										<p class="pt-1">Already have an account?
											<a data-toggle="tab" href="#panel17" role="tab" aria-selected="true" class="blue-text">Log In</a>
										</p>
									</div>
									<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!--/.Panel 8-->
						</div>

					</div>
				</div>
			</div>
		</div>
		@stop
		<main>
			@section('content')
			<div class="container-fluid wow fadeIn" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-9 mb-9 text-center">
						<section>

						</section>
					</div>
				</div>
			</div>
			@stop
		</main>