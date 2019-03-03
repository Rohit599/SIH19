@extends('layouts.default')
@section('content')
<main style="margin-top: 6rem;">
	<div class="container">
		<!-- Material form contact -->
		<div class="jumbotron text-center hoverable p-4">

			@include('includes.msg')
		  <!-- Grid row -->
		  <div class="row">

		  

		    <!-- Grid column -->
		    <div class="col-md-7 text-md-left ml-3 mt-3">

		      <!-- Excerpt -->
		      <h3 class="h2 mb-2">{{$issue->title}}</h3>
		      <p class="font-weight-normal">{{strip_tags($issue->description)}} </p><br>
		      <div class="row" style="color: gray; font-size: 18px; font-weight: bold; font-family: Arial; ">
		      <div class="col s1" style="border-right: 2px solid grey;">4033 ACTIONS THIS WEEK</div>
		      <div class="col s1" style="border-right: 2px solid grey;">40,763 SUPPORTERS</div>
		      <div class="col s1" style="border-right: 2px solid grey;">3.5M ADD-UP SUPPORTERS</div>
		      </div>
		 
		    </div>
		    <!-- Grid column -->

		      <!-- Grid column -->
		    <div class="col-md-4 offset-md-1 mx-3 my-3">

		      <!-- Featured image -->
		      <div class="view overlay">
		        <img src="https://d1u4oo4rb13yy8.cloudfront.net/nipjaycepf-1453029400.jpg" class="img-fluid" alt="Sample image for first version of blog listing" style="height: 300px; width: 600px;">
		        <a>
		          <div class="mask rgba-white-slight"></div>
		        </a>
		      </div>

		    </div>
		    <!-- Grid column -->
		  </div>
		  <!-- Grid row -->
		  <!-- Horizontal Steppers -->
		<div class="row">
		  <div class="col-md-12">

		    <!-- Stepers Wrapper -->
		    <ul class="stepper stepper-horizontal">

		      <!-- First Step -->
		      <li class="completed hoverable">
		        <a href="#!">
		          <span class="circle">1</span>
		          <span class="label">GET STARTED</span>
		        </a>
		      </li>

		      <!-- Second Step -->
		      <li class="active hoverable">
		        <a href="#signpetition">
		          <span class="circle">2</span>
		          <span class="label">SIGN PETITION</span>
		        </a>
		      </li>

		       <!-- Second Step -->
		      <li class="active hoverable">
		        <a href="#tweet">
		          <span class="circle">3</span>
		          <span class="label">TWEET</span>
		        </a>
		      </li>

		        <!-- Second Step -->
		      <li class="active hoverable">
		        <a href="#recruit">
		          <span class="circle">3</span>
		          <span class="label">RECRUIT YOUR FRIENDS</span>
		        </a>
		      </li>

		      <!-- Third Step -->
		      <li class="active hoverable">
		        <a href="#!">
		          <span class="circle"><i class="fas fa-exclamation"></i></span>
		          <span class="label">PROGRESS REPORT</span>
		        </a>
		      </li>

		    </ul>
		    <!-- /.Stepers Wrapper -->

		  </div>
		</div>
		<!-- /.Horizontal Steppers -->

		</div>
		<div class="jumbotron text-center hoverable p-4">

		  <!-- Grid row -->
		  <div class="row">

		     <!-- Grid column -->
		    <div class="col-md-4 offset-md-1 mx-3 my-3">

		      <!-- Featured image -->
		      <div class="view overlay">
		        <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
		        <a>
		          <div class="mask rgba-white-slight"></div>
		        </a>
		      </div>

		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-md-7 text-md-left ml-3 mt-3" id="progress">

		      <!-- Excerpt -->
		      <h2 class="h2 mb-1">PROGRESS OF ISSUE</h2>
		      <p class="font-weight-normal">{{$issue->status}}<span id="dots">...</span><span id="more"></span></p>
		      
		 
		    </div>
		    <!-- Grid column -->

		     
		  </div>
		  <!-- Grid row -->

		</div>
		<div class="card" id="signpetition">
		<div class="card-body">
		<div class="row mt-1">
		  <div class="col-md-8">

		    <!-- Stepers Wrapper -->
		    <ul class="stepper stepper-vertical">

		      <!-- First Step -->
		      <li class="completed">
		        <a href="#!">
		          <span class="circle">1</span>
		          <span class="label"><h5 class="text-blue" style="font-weight: bold;">SIGN PETITION</h5></span>
		        </a>
		        <!-- Section Description -->
		        <!--Form div -->
		        <div class="col-sm-12">
		      <div class=" card step-content grey lighten-3" style="font-family: helvetica;">
		      	@if($c == 1)
			          <h5> You had already signed this petition. Thank for you support and don't forget to share it. </h5>

		      	@elseif ($issue->signs_count < 100)
		      		{{-- expr --}}
		          <h5> Type your name to sign petition, this will be considered as your signature digitally. </h5>
		            <!-- Default horizontal form -->
		            <form action="{{ url('issue/sign') }}" method="POST">
		            	<input type="hidden" value="{{$issue->id}}" name="id" id="id">
		            	@csrf
		              <!-- Grid row -->
		              <div class="form-group row">
		                <!-- Default input -->
		                <div class="col-sm-12">
		                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
		                </div>
		              </div>
		              <!-- Grid row -->
		              <!-- Grid row -->
		              <button type="submit" class="btn blue-gradient my-4 btn-block waves-effect waves-light" type="submit">Sign Petition</button>
		              <!-- Grid row -->
		            </form>
		            <!-- Default horizontal form -->
		            <!-- Horizontal material form -->
		        @else
			          <h5> This petition had already reached goal of 100 petition sign. </h5>

		      	@endif
		                     
		      </div>
		    </div>
		    <!--Form div-->

		      </li>

		      <!-- Second Step -->
										<li class="active" id="tweet">
											<!--Section Title -->
											<a href="#">
												<span class="circle">2</span>
												<span class="label"><h5 class="text-blue" style="font-weight: bold;">TWEET YOUR SUPPORT FOR A #GREENNEWDEAL</h5></span>
											</a>
											<!-- Section Description -->
											<div class="step-content grey lighten-3">
												<a href="https://twitter.com/intent/tweet?button_hashtag=MyRightToBreathe&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="Join us in Helping the people of Delhi breathe Clean Air #CosmoGreen" data-related="CPCB_OFFICIAL,CSEINDIA" data-show-count="false">Tweet #MyRightToBreathe</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        
											</div>
										</li>

		
		      <!-- Third Step -->
		      <li class="active" id="recruit">
		        <a href="#!">
		          <span class="circle">3</span>
		          <span class="label"><h5 class="text-blue" style="font-weight: bold;">RECRUIT YOUR FRIENDS </h5></span>
		        </a>
		        <!-- Section Description -->
		        <div class="step-content grey lighten-3">
		          Share this Issue using one of these social channels:<br>
		            <button type="button" class="btn btn-md btn-tw"><i class="fab fa-twitter pr-1"></i> TWEET</button>
		            <button type="button" class="btn btn-md btn-fb"><i class="fab fa-facebook-f pr-1"></i> SHARE</button>
		            <button type="button" class="btn btn-md btn-ins"><i class="fab fa-instagram left"></i> Instagram</button>
		            <button type="button" class="btn btn-md btn-email"><i class="fa fa-envelope pr-1"></i>EMAIL</button>

		     
		        </div>
		      </li>
		      

		      <!-- Fourth Step -->
		      <li>
		        <a href="#progress">
		          <span class="circle">4</span>
		          <span class="label"><h5 class="text-blue" style="font-weight: bold;">GET UPDATES </h5></span>
		        </a>
		      </li>

		    </ul>

		    <!-- /.Stepers Wrapper -->
		  </div>

		<!--Right Side -->
		  <div class="col-md-4">
		    <p style="color: black; font-size: 72px; font-weight: bold; font-family: Verdana; margin-top: 200px; margin-left: 80px;"> {{$issue->signs_count}} </p>
		    <p style="color: black; font-size: 24px; font-weight: bold; font-family: Verdana; margin-top: -20px; margin-left: 80px;">Signatures OF 100 GOAL </p>
		  <div class="progress">
		  <div class="progress-bar" role="progressbar" aria-valuenow="{{$issue->signs_count}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$issue->signs_count}}%">
		    70% Completed
		  </div>
		  </div>
		  <br><br><br><br><br>

		  <div class="card m-2 mr-4 mt-4 ml-4">
      
     
      	<p class="h4 h4-responsive font-weight-bold text-uppercase mt-2 ml-2" style="font-family:Raleway">Follow us on Twitter</p> <hr>
      <a href="https://twitter.com/SIH2019?ref_src=twsrc%5Etfw" class="twitter-follow-button " data-size="large" data-show-count="false">Follow @SIH2019</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <br>
      <a class="twitter-timeline" data-height="592" href="https://twitter.com/SIH2019?ref_src=twsrc%5Etfw">Tweets by SIH2019</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     
      <!-- Material form subscription -->
   
        <!-- Material form subscription -->
    </div>
		
		  </div>

		<!--Right Side-->

		</div>



		</div>
		</div>
		<!-- Material form contact -->
	</div>
</main>
@stop