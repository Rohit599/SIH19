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
                  <a class="nav-link show" data-toggle="tab" href="#panel17" role="tab" aria-selected="false">
                    <i class="fas fa-user mr-1"></i> Login</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link show active" data-toggle="tab" href="#panel18" role="tab" aria-selected="true">
                    <i class="fas fa-user-plus mr-1"></i> Register</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 17-->
                <div class="tab-pane fade in" id="panel17" role="tabpanel">

                  <!--Body-->
                  <form class="modal-body mb-1" id="login_form">
                  	<meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="md-form form-sm">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="text" id="email" class="form-control form-control-sm">
                      <label for="email">Your email</label>
                    </div>

                    <div class="md-form form-sm">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="password" class="form-control form-control-sm">
                      <label for="password">Your password</label>
                    </div>
                    <div class="text-center mt-4">
                      <button class="btn btn-info waves-effect waves-light" type="submit">Log in
                        <i class="fas fa-sign-in ml-1"></i>
                      </button>
                      <p>or sign in with:</p>
                      <a type="button" class="btn-floating btn-fb btn-sm waves-effect waves-light"><i class="fab fa-facebook-f"></i></a>
                      <a type="button" class="btn-floating btn-tw btn-sm waves-effect waves-light"><i class="fab fa-twitter"></i></a>

                    </div>
                  </form>
                  <!--Footer-->
                  <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                      <p>Not a member?
                        <a href="#" class="blue-text">Sign Up</a>
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
                <div class="tab-pane fade active show" id="panel18" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body">
                    <div class="md-form form-sm">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="text" id="form14" class="form-control form-control-sm">
                      <label for="form14">Your email</label>
                    </div>

                    <div class="md-form form-sm">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="form5" class="form-control form-control-sm">
                      <label for="form5">Your password</label>
                    </div>

                    <div class="md-form form-sm">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="form6" class="form-control form-control-sm">
                      <label for="form6">Repeat password</label>
                    </div>

                    <div class="text-center form-sm mt-4">
                      <button class="btn btn-info waves-effect waves-light">Sign up
                        <i class="fas fa-sign-in ml-1"></i>
                      </button>
                    </div>

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <div class="options text-right">
                      <p class="pt-1">Already have an account?
                        <a href="#" class="blue-text">Log In</a>
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
			<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

				<div class="text-center">
					<h2 class="font-weight-bold mt-4">Issues <a id="homepage-cta-news" alt="See all News" class="btn btn-info btn-rounded btn-sm waves-effect waves-light" href="https://mdbootstrap.com/publications/front-end/bootstrap-news/" role="button">See all Issues</a> </h2>
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
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom text-center pt-3" style="background-color: #40bff5">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
					<div class="carousel-item">
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
							  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
					<div class="carousel-item">
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
							  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
					<div class="carousel-item">
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
							  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
					<div class="carousel-item">
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
							  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
					<div class="carousel-item">
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
							  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <hr>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							  </div>

							  <!-- Card footer -->
							  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
							    <ul class="list-unstyled list-inline font-small">
							      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
							      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
							      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
							    </ul>
							  </div>

							</div>
							<!-- Card -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<section class="section widget-content mt-5">

			            <!-- Heading -->
			            <h5 class="dark-grey-text font-weight-bold">
			              <strong>FEATURED POSTS</strong>
			            </h5>
			            <hr>

			            <!--/ Heading -->
			            <div class="card card-body pb-0">
			              <div class="single-post">

			                <!-- Grid row -->
			                <div class="row">
			                  <div class="col-4">

			                    <!-- Image -->
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(121).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 25/08/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 114</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>Title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			              <div class="single-post">
			                <!--  Grid row -->
			                <div class="row">
			                  <!-- Image -->
			                  <div class="col-4">
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(30).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>
			                  <!--/ Image -->

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 21/08/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 96</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>This is title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			              <div class="single-post">
			                <!-- Grid row -->
			                <div class="row">
			                  <!-- Image -->
			                  <div class="col-4">
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(118).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>
			                  <!--/ Image -->

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 19/07/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 105</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>This is title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			              <div class="single-post">
			                <!-- Grid row -->
			                <div class="row">
			                  <!-- Image -->
			                  <div class="col-4">
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(124).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>
			                  <!--/ Image -->

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 26/06/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 82</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>This is title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			              <div class="single-post">
			                <!-- Grid row -->
			                <div class="row">
			                  <!-- Image -->
			                  <div class="col-4">
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>
			                  <!--/ Image -->

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 26/06/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 82</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>This is title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/ Excerpt -->
			                </div>
			                <!--/ Grid row -->
			              </div>

			              <div class="single-post">
			                <!-- Grid row -->
			                <div class="row">
			                  <!-- Image -->
			                  <div class="col-4">
			                    <div class="view overlay rgba-white-slight">
			                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(119).jpg" class="img-fluid rounded-0" alt="sample image">
			                      <a>
			                        <div class="mask waves-light waves-effect waves-light"></div>
			                      </a>
			                    </div>
			                  </div>
			                  <!--/ Image -->

			                  <!-- Excerpt -->
			                  <div class="col-8">
			                    <div class="post-data">
			                      <p class="font-small mb-0">
			                        <i class="far fa-clock-o"></i> 26/06/2016</p>
			                      <a>
			                        <i class="far fa-comments"></i> 82</a>
			                    </div>

			                    <h6>
			                      <a>
			                        <strong>This is title of the news</strong>
			                      </a>
			                    </h6>

			                  </div>
			                  <!--/Excerpt -->
			                </div>
			                <!--/Grid row -->
			              </div>
			            </div>
			          </section>
		</div>	
	</div>
</div>

@stop