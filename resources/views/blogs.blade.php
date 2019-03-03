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
			<div class="container-fluid">
				<div class="row no-gutters">

					<!-- Leftmost part starts -->
					<div class="col-lg-3 my-3">
						<div class="card m-4">
							<form action="" class="md-form mt-1 ml-4">
								<h6 style="font-weight: bold; color: grey;">FILTER BY CATEGORY </h6>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="materialInline1">
									<label class="form-check-label" for="materialInline1">Air</label><br>
									<input type="checkbox" class="form-check-input" id="materialInline2">
									<label class="form-check-label" for="materialInline2">Water</label><br>
									<input type="checkbox" class="form-check-input" id="materialInline3">
									<label class="form-check-label" for="materialInline3">Land</label><br>
									<input type="checkbox" class="form-check-input" id="materialInline3">
									<label class="form-check-label" for="materialInline3">Noise</label>
								</div>
							</form><hr><br>

							<form action="" class="md-form ml-4 mb-2 mt-0">
								<h6 style="font-weight: bold; color: grey;">SORT BY</h6>
								<div class="form-check">
									<input type="radio" class="form-check-input" id="sort1" name="groupOfMaterialRadios">
									<label class="form-check-label" for="sort1">NEWEST</label><br>
									<input type="radio" class="form-check-input" id="sort2" name="groupOfMaterialRadios">
									<label class="form-check-label" for="sort2">OLDEST</label>
								</div><br>
							</form><hr>

							<!-- Subscribing Button starts -->
							<div class="text-center">
								<button type="button" class="btn blue-gradient btn-lg btn-block mt-1 waves-effect waves-light" data-toggle="modal" data-target="#orangeModalSubscription">Subscribe to our newsletter</button>
							</div>
							<!-- Subscribing button ends -->
							<hr>


							<!-- Subscribing Modal starts-->
							<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notify modal-info" role="document">
									<!--Content--> 
									<div class="modal-content">
										<!--Header-->
										<div class="modal-header text-center">
											<h4 class="modal-title white-text w-100 font-weight-bold py-2">Subscribe</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true" class="white-text">×</span>
											</button>
										</div>
										<!--Body-->
										<div class="modal-body">
											<!--Body-->
											<div class="md-form">
												<input type="email" id="name" class="form-control validate white-text">
												<label data-error="wrong" data-success="right" for="name">Your Name</label>
											</div>
											<div class="md-form">
												<input type="email" id="email5" class="form-control validate white-text">
												<label data-error="wrong" data-success="right" for="email5">Your email</label>
											</div>

											<div class="md-form">
												<input type="email" id="pincode" class="form-control validate white-text">
												<label data-error="wrong" data-success="right" for="pincode">Your Pincode</label>
												<div class="form-group mt-0">
													<input class="form-check-input" type="checkbox" id="checkbox624">
													<label for="checkbox624" class="white-text form-check-label"><a href="#" class="green-text font-weight-bold">Accept the
													Terms and Conditions</a></label>
												</div>
											</div>

											<!--Grid row-->
											<div class="row d-flex align-items-center mb-4">

												<!--Grid column-->
												<div class="text-center mb-3 col-md-12">
													<button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1 waves-effect waves-light" data-toggle="modal" data-target="#successSubscribe">Subscribe Me</button>
												</div>
												<!--Grid column-->

											</div>
											<!--Grid row-->

										</div>
									</div>
								</div>
								<!--/.Content-->
							</div>

							<!-- Subscribing Modal ends-->
							<!-- Success Subscribing Modal starts-->
							<div class="modal fade" id="successSubscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notify modal-success" role="document">
									<!--Content-->
									<div class="modal-content">
										<!--Header-->

										<!--Body-->
										<div class="modal-body">
											<div class="text-center">
												<i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
												<p>Thanks For Subscribing Us</p>
											</div>
										</div>
									</div>
									<!--/.Content-->
								</div>
							</div>

							<!-- Success Subscribing Modal ends-->

							<!-- Add Blog here starts-->
							<div class="text-center mb-3 col-md-12">
								<button type="button" class="btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light" data-toggle="modal" data-target="#successSubscribe">Want to add Blog here? Create Your own blog</button>
							</div>
							<!-- Add Blog here ends -->
						</div>
					</div>


					<!-- Leftmost Part ends -->

					<!-- Center Body Starts -->
					<div class="col-lg-8 ml-3">
						<!-- Section: Blog v.1 -->
						<section class="my-5">
							<!-- Grid row -->
							<div class="row">

								<!-- Grid column -->
								<div class="col-lg-5">

									<!-- Featured image -->
									<div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
										<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image">
										<a>
											<div class="mask rgba-white-slight waves-effect waves-light"></div>
										</a>
									</div>

								</div>
								<!-- Grid column -->

								<!-- Grid column -->
								<div class="col-lg-7">

									<!-- Category -->
									<a href="#!" class="green-text">
										<h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>Food</h6>
									</a>
									<!-- Post title -->
									<a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Title of the Blog</strong></h3></a>
									<!-- Excerpt -->
									<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
									placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis.</p>
									<!-- Post data -->
									<p>by <a><strong>Carine Fox</strong></a>, 19/08/2018</p>

								</div>
								<!-- Grid column -->

							</div>
							<!-- Grid row -->

							<hr class="my-3">

							<!-- Grid row -->
							<div class="row">

								<!-- Grid column -->
								<div class="col-lg-7">

									<!-- Category -->
									<a href="#!" class="pink-text">
										<h6 class="font-weight-bold mb-3"><i class="fas fa-image pr-2"></i>Lifestyle</h6>
									</a>
									<!-- Post title -->
									<a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Title of the Blog</strong></h3></a>
									<!-- Excerpt -->
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
										deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
									provident.</p>
									<!-- Post data -->
									<p>by <a><strong>Carine Fox</strong></a>, 14/08/2018</p>

								</div>
								<!-- Grid column -->

								<!-- Grid column -->
								<div class="col-lg-5">

									<!-- Featured image -->
									<div class="view overlay rounded z-depth-2">
										<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Sample image">
										<a>
											<div class="mask rgba-white-slight waves-effect waves-light"></div>
										</a>
									</div>

								</div>
								<!-- Grid column -->

							</div>
							<!-- Grid row -->

							<hr class="my-3">

							<!-- Grid row -->
							<div class="row">

								<!-- Grid column -->
								<div class="col-lg-5">

									<!-- Featured image -->
									<div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
										<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img (28).jpg" alt="Sample image">
										<a>
											<div class="mask rgba-white-slight waves-effect waves-light"></div>
										</a>
									</div>

								</div>
								<!-- Grid column -->

								<!-- Grid column -->
								<div class="col-lg-7">

									<!-- Category -->
									<a href="#!" class="indigo-text">
										<h6 class="font-weight-bold mb-3"><i class="fas fa-suitcase pr-2"></i>Travels</h6>
									</a>
									<!-- Post title -->
									<a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Title of the Blog</strong></h3></a>
									<!-- Excerpt -->
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
									magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro qui dolorem ipsum quia sit amet.</p>
									<!-- Post data -->
									<p>by <a><strong>Carine Fox</strong></a>, 11/08/2018</p>
									<!-- Read more button -->

								</div>
								<!-- Grid column -->

							</div>
							<!-- Grid row -->

						</section>
						<hr class="my-3">
						<!-- Section: Blog v.1 -->


					</div>
					<!-- Center Part ends -->
					<!-- Floating up button starts-->
					<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
						<a href="#top-section" class="btn-floating btn-large green waves-effect waves-light">
							<i class="fas fa-arrow-up"></i>
						</a>
					</div>
					<!-- Floating up button ends-->

				</div>    <!--Sabse upar wali row ka ending div-->


			</div>
			@stop
		</main>