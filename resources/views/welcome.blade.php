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
                  <form class="modal-body mb-1" id="login_form" method="POST" action="{{url('login')}}">
                  	@csrf
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
                  <form class="modal-body" method="POST" action="{{url('register')}}">
                  	@csrf
                  	@include('includes.msg')
                  	<div class="md-form form-sm">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="text" id="name" class="form-control form-control-sm" name="name">
                      <label for="name">Your name</label>
                    </div>
                    <div class="md-form form-sm">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="text" id="email" class="form-control form-control-sm" name="email">
                      <label for="">Your email</label>
                    </div>

                    <div class="md-form form-sm">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="password" class="form-control form-control-sm" name="password">
                      <label for="password">Your password</label>
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

@section('content')
<div class="container-fluid wow fadeIn" data-wow-delay="0.3s">
	<div class="row">
		<div class="col-md-9 mb-9 text-center">
			<section>
				<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
					<div class="text-center">
						<h2 class="h1-responsive font-weight-bold my-5">Issues</h2>
					</div>

					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-multi" data-slide-to="1"></li>
						<li data-target="#carousel-example-multi" data-slide-to="2"></li>
						<li data-target="#carousel-example-multi" data-slide-to="3"></li>
						<li data-target="#carousel-example-multi" data-slide-to="4"></li>
						<li data-target="#carousel-example-multi" data-slide-to="5"></li>
					</ol>
					<!--/.Indicators-->

					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="col-md-4">
							<!-- Card -->
								<div class="card">
							  <!-- Card image -->
								  	<div class="view overlay">
								    	<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
								    	<a>
								      	<div class="mask rgba-white-slight"></div>
								    	</a>
								  	</div>

							  <!-- Button -->
							  		<a class="btn-floating btn-action ml-auto mr-4" style="background-color: #40bff5"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  		<div class="card-body">

							    <!-- Title -->
							   			<h4 class="card-title">{{$issues[0]['title']}}</h4>
							    		<hr>
							    <!-- Text -->
							    		<p class="card-text">{{$issues[0]['description']}}</p>

							  		</div>

							  <!-- Card footer -->
							  		<div class="rounded-bottom text-center pt-3" style="background-color: #40bff5">
							    		<ul class="list-unstyled list-inline font-small">
							      			<li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>{{date('d/m/y',strtotime($issues[0]['updated_at']))}}</li>
							      			<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      			<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      			<li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    		</ul>
							  		</div>

								</div>
							<!-- Card -->
							</div>
						</div>
						@for($i = 1; $i < sizeof($issues); $i++)
							<div class="carousel-item">
								<div class="col-md-4">
							<!-- Card -->
									<div class="card">

							  <!-- Card image -->
							  			<div class="view overlay">
							    			<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Issue Image">
							    			<a>
							      				<div class="mask rgba-white-slight"></div>
							    			</a>
							  			</div>

							  <!-- Button -->
							  			<a class="btn-floating btn-action ml-auto mr-4"><i class="fas fa-chevron-right pl-1" style="background-color: #40bff5"></i></a>

							  <!-- Card content -->
							  			<div class="card-body">

							    <!-- Title -->
							    			<h4 class="card-title">{{$issues[$i]['title']}}</h4>
							    			<hr>
							    <!-- Text -->
							    			<p class="card-text">{{$issues[$i]['description']}}</p>

							  			</div>

							  <!-- Card footer -->
							  			<div class="rounded-bottom text-center pt-3" style="background-color: #40bff5">
							    			<ul class="list-unstyled list-inline font-small">
							      				<li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>{{date('d/m/y',strtotime($issues[$i]['updated_at']))}}</li>
							      				<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      				<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      				<li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    			</ul>
							  			</div>

									</div>
							<!-- Card -->
								</div>
							</div>
						@endfor
					</div>
				</div>
				<div class="text-center">
					<h2 class="h1-responsive font-weight-bold my-5"><a id="homepage-cta-news" alt="See all News" class="btn btn-info btn-sm waves-effect waves-light" href="https://mdbootstrap.com/publications/front-end/bootstrap-news/" role="button">See all Issues</a> </h2>
				</div>
			</section>
			<hr class="my-5">
			<!-- Section: Blog v.2 -->
			<section class="text-center my-5">

			  <!-- Section heading -->
			  <h2 class="h1-responsive font-weight-bold my-5">Recent posts</h2>
			  <!-- Section description -->
			  <p class="dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
			    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
			    qui officia deserunt mollit anim id est laborum.</p>

			  <!-- Grid row -->
			  <div class="row">

			    <!-- Grid column -->
			    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

			      <!-- Featured image -->
			      <div class="view overlay rounded z-depth-2 mb-4">
			        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" alt="Sample image">
			        <a>
			          <div class="mask rgba-white-slight"></div>
			        </a>
			      </div>

			      <!-- Category -->
			      <a href="#!" class="pink-text">
			        <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i>Adventure</h6>
			      </a>
			      <!-- Post title -->
			      <h4 class="font-weight-bold mb-3"><strong>Title of the news</strong></h4>
			      <!-- Post data -->
			      <p>by <a class="font-weight-bold">Billy Forester</a>, 15/07/2018</p>
			      <!-- Excerpt -->
			      <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
			        quo minus id quod maxime placeat facere possimus voluptas.</p>
			      <!-- Read more button -->
			      <a class="btn btn-pink btn-rounded btn-md">Read more</a>

			    </div>
			    <!-- Grid column -->

			    <!-- Grid column -->
			    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

			      <!-- Featured image -->
			      <div class="view overlay rounded z-depth-2 mb-4">
			        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Sample image">
			        <a>
			          <div class="mask rgba-white-slight"></div>
			        </a>
			      </div>

			      <!-- Category -->
			      <a href="#!" class="deep-orange-text">
			        <h6 class="font-weight-bold mb-3"><i class="fas fa-graduation-cap pr-2"></i>Education</h6>
			      </a>
			      <!-- Post title -->
			      <h4 class="font-weight-bold mb-3"><strong>Title of the news</strong></h4>
			      <!-- Post data -->
			      <p>by <a class="font-weight-bold">Billy Forester</a>, 13/07/2018</p>
			      <!-- Excerpt -->
			      <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
			        voluptatum deleniti atque corrupti quos dolores.</p>
			      <!-- Read more button -->
			      <a class="btn btn-deep-orange btn-rounded btn-md">Read more</a>

			    </div>
			    <!-- Grid column -->

			    <!-- Grid column -->
			    <div class="col-lg-4 col-md-6 mb-0">

			      <!-- Featured image -->
			      <div class="view overlay rounded z-depth-2 mb-4">
			        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" alt="Sample image">
			        <a>
			          <div class="mask rgba-white-slight"></div>
			        </a>
			      </div>

			      <!-- Category -->
			      <a href="#!" class="blue-text">
			        <h6 class="font-weight-bold mb-3"><i class="fas fa-fire pr-2"></i>Culture</h6>
			      </a>
			      <!-- Post title -->
			      <h4 class="font-weight-bold mb-3"><strong>Title of the news</strong></h4>
			      <!-- Post data -->
			      <p>by <a class="font-weight-bold">Billy Forester</a>, 11/07/2018</p>
			      <!-- Excerpt -->
			      <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
			        quia consequuntur magni dolores eos qui ratione.</p>
			      <!-- Read more button -->
			      <a class="btn btn-info btn-rounded btn-md">Read more</a>

			    </div>
			    <!-- Grid column -->

			  </div>
			  <!-- Grid row -->

			</section>
			<!-- Section: Blog v.2 -->
		</div>
		<div class="col-md-3 mb-3">
			<section class="section widget-content mt-5">

			            <!-- Heading -->
			            <h5 class="dark-grey-text font-weight-bold">
			              <strong>FEATURED POSTS</strong>
			            </h5>
			            <hr>

			            <div class="card card-body pb-0">
			            @foreach ($news as $n)

			              <div class="single-post">

			                <!-- Grid row -->
			                <div class="row">
			                  <div class="col-4">
			                    <!-- Image -->
			                    <div class="view overlay rgba-white-slight">
			                      <img src="{{ $n->urlToImage }}" class="img-fluid rounded-0" alt="sample image" width="94px">
			                      <a href="{{ $n->url }}" target="_blank">
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <h6>
			                      <a href="{{ $n->url }}" target="_blank" class="black-text">
			                        <strong>{{ $n->title }}</strong>
			                      </a>
			                    </h6>

			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> {{ $n->publishedAt }}
			                      </p>
			                    </div>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			            @endforeach

			            </div>


			          </section>
		</div>	
	</div>
</div>

@if(session('msg') || $errors->any())
<script>
	$(document).ready(function() {
	$('#login_modal').trigger('click');
});
</script>
@endif

@stop