@extends('layouts.default')

@section('header')
<!-- Intro Section -->
<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="mask rgba-black-light">
		<div class="container h-100 d-flex justify-content-center align-items-center">
			<div class="row pt-5 mt-3">
				<div class="col-md-12">
					<div class="text-center">
						<h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>welcome to my Full2Study</strong></h1>
						<hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
						<h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>An online portal to Buy & Sell study materials.</strong></h5>
						<a href="{{ url('/') }}" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Buy</a>
						<a href="{{ url('/sell') }}" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Sell</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('content')
<section id="products" class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 mb-3">
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
			<div class="col-md-9 mb-9">
				<div class="hoverable" style="color:white;margin:20px;background-color:#4B515D;padding-right:20px;padding-left:20px;padding-top:20px">
					<!-- Card -->
					<div class="float-left">
						<p class="h2">Issues</p>
					</div>
					<div class="float-right">
						<button type="button" class="btn indigo">View All</button>
					</div>
					<br>
					<br>
					<hr>
					<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

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

								<div class="col-md-4 mb-4">
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
								<div class="col-md-4 mb-4">
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
								<div class="col-md-4 mb-4">

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
								</div>
								<!-- Card -->
							</div>
							<div class="carousel-item">
								<div class="col-md-4 mb-4">

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
								</div>
								<!-- Card -->
							</div>
							<div class="carousel-item">
								<div class="col-md-4 mb-4">

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
								</div>
								<!-- Card -->
							</div>
							<div class="carousel-item">
								<div class="col-md-4 mb-4">

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
								</div>
								<!-- Card -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop