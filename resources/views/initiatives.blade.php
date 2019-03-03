@extends('layouts.default')

@section('content')
<main style="margin-top: 75px;">



<!-- Campaign carousels starts below -->
<div id="campaignCarousel" class="carousel slide carousel-multi-item v-2 my-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="save-water.jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Make Every drop of Water Count</h4>
            <p class="card-text d-none d-md-block">663 million people in the world live without clean water. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="swach.jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Swach Bharat Abhiyaan</h4>
            <p class="card-text d-none d-md-block">One Step Towards Cleanliness</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="save-tree.jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Save Trees Save Lives</h4>
            <p class="card-text d-none d-md-block">One Adult Tree can provide enough clean air to 5 peoples.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#campaignCarousel" role="button" data-slide="prev">
      <div class="btn-floating rounded-0">
        <i class="fas fa-chevron-left green darken-4"></i>
        <span class="sr-only">Previous</span></div>
      </a>
      <a class="carousel-control-next" href="#campaignCarousel" role="button" data-slide="next">
        <div class="btn-floating rounded-0">
          <i class="fas fa-chevron-right green"></i>
          <span class="sr-only">Next</span></div>
        </a>
      </div>
      <!--Campagin carousels ends above -->

      <!-- Main content starts -->
      <div class="container-fluid">
        <div class="row no-gutters">

          <!-- Leftmost part starts -->
          <div class="col-lg-3">
            <div class="card my-3">

              <form class="form-inline active-cyan-4 mt-3 ml-4">
                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search By Keyword" aria-label="Search">
                <i class="fas fa-search" aria-hidden="true"></i>
              </form><br>

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
              </form>
            </div>





            <!-- Subscribing Button starts -->
            <div class="text-center">
              <button type="button" class="btn blue-gradient btn-lg btn-block mt-1" data-toggle="modal" data-target="#subscribeForm">Subscribe to our newsletter</button>
            </div>
            <!-- Subscribing button ends -->
            <hr class="mb-3 black">
            <!-- Follow on twitter section starts -->
            <p class="h4 h4-responsive font-weight-bold text-uppercase" style="font-family:Raleway">Follow us on Twitter</p>
            <a href=""class="h4 h4-responsive font-weight-bold text-uppercase" style="font-family:Spectral; color:rgb(27, 94, 32);">@cosmo_green</a>
            <div class="mr-5 text-justify font-weight-normal">
              <p> <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">A bipartisan group of lawmakers just introduced a bill to ban drilling in Alaska's Arctic Wildlife Refuge! “We can just introduced
              </div>
              <a href="" class="green-text">https://t.co/SB8QqmO09h </a>
              <div class="inline"> 29 minutes ago </div>
            </p>
          </div>
          <div class="mr-5 text-justify font-weight-normal">
            <p> <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">A bipartisan group of lawmakers just introduced a bill to ban drilling in Alaska's Arctic Wildlife Refuge! “We can just introduced
            </div>
            <a href="" class="green-text">https://t.co/SB8QqmO09h </a>
            <div class="inline"> 29 minutes ago </div>
          </p>
        </div>
        <div class="mr-5 text-justify font-weight-normal">
          <p> <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">A bipartisan group of lawmakers just introduced a bill to ban drilling in Alaska's Arctic Wildlife Refuge! “We can just introduced
          </div>
          <a href="" class="green-text">https://t.co/SB8QqmO09h </a>
          <div class="inline"> 29 minutes ago </div>
        </p>
      </div>
      <!-- Follow on twitter section ends -->


      <!-- Subscribing Modal starts-->
      <div class="modal fade" id="subscribeForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog form-dark" role="document">
        <!--Content-->
        <div class="modal-content card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(1).jpg');">
          <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
            <!--Header-->
            <div class="modal-header text-center">
              <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><a
                class="green-text font-weight-bold"><strong> SUBSCRIBE US</strong></a></h3>
                <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
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
                    <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                    Terms and Conditions</a></label>
                  </div>
                </div>

                <!--Grid row-->
                <div class="row d-flex align-items-center mb-4">

                  <!--Grid column-->
                  <div class="text-center mb-3 col-md-12">
                    <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" data-toggle="modal" data-target="#successSubscribe">Subscribe Me</button>
                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

              </div>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!-- Subscribing Modal ends-->
      <!-- Success Subscribing Modal starts-->
      <div class="modal fade" id="successSubscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
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


  </div>


  <!-- Leftmost Part ends -->

  <!-- Center Body Starts -->
  <div class="col-lg-8 ml-5">
    <!-- Section: Blog v.1 -->
    <section class="my-3">
      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5">

          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="save-water.jpg" alt="Swach Bharat">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

          <!-- Category -->
          <a href="#!" class="green-text">
            <h6 class="font-weight-bold mb-3"><i class="fas fa-tint pr-2"></i>Water</h6>
          </a>
          <!-- Post title -->
          <a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Make Every drop of Water Count</strong></h3></a>
          <!-- Excerpt -->
          <p>663 million people in the world live without clean water. That’s nearly 1 in 10 people worldwide. The majority live in isolated rural areas and spend hours every day walking to collect water for their family.
          </p>
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
            <h6 class="font-weight-bold mb-3"><i class="fas fa-dumpster pr-2"></i>Garbage</h6>
          </a>
          <!-- Post title -->
          <a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Swach Bharat Abhiyaan</strong></h3></a>
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
            <img class="img-fluid" src="swach.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
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
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

          <!-- Category -->
          <a href="#!" class="indigo-text">
            <h6 class="font-weight-bold mb-3"><i class="fab fa-pagelines pr-2"></i>Tree</h6>
          </a>
          <!-- Post title -->
          <a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Save Trees Save Lives</strong></h3></a>
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
      <hr class="my-3">
      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-7">

          <!-- Category -->
          <a href="#!" class="green-text">
            <h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>Food</h6>
          </a>
          <!-- Post title -->
          <a href="../view-blog/view-blog.html"><h3 class="font-weight-bold mb-3 black-text"><strong>Save Food</strong></h3></a>
          <!-- Excerpt -->
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
          placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis.</p>
          <!-- Post data -->
          <p>by <a><strong>Carine Fox</strong></a>, 19/08/2018</p>

        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-lg-5">

          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <hr class="my-3">

    </section>
    <!-- Section: Blog v.1 -->


    <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Show More</button>
    </div>

  </div>
  <!-- Center Part ends -->
  <!-- Floating up button starts-->
  <div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <a href="#top-section" class="btn-floating btn-large green">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
  <!-- Floating up button ends-->

</div>    <!--Sabse upar wali row ka ending div-->
<p class="h4 h4-responsive mt-5">You May Also like</p>
<hr class="mb-3 black">
<!-- extra thingds -->
<div id="impactCarousels" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Impact 1</h4>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Impact-2</h4>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
          alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Impact-3</h4>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Impact-4</h4>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Impact-5</h4>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title font-weight-bold h5-responsive">Impact-6</h5>
            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#impactCarousels" role="button" data-slide="prev">
    <div class="btn-floating rounded-0">
      <i class="fas fa-chevron-left green darken-4"></i>
      <span class="sr-only">Previous</span></div>
    </a>
    <a class="carousel-control-next" href="#impactCarousels" role="button" data-slide="next">
      <div class="btn-floating rounded-0">
        <i class="fas fa-chevron-right green"></i>
        <span class="sr-only">Next</span></div>
      </a>
    </div>

  </div>    <!-- container wala ending div-->

  <!-- Main content ends -->
</div>
</main>
@stop

@section('script')
<script>

  // object-fit polyfill run
  objectFitImages();

  /* init Jarallax */
  jarallax(document.querySelectorAll('.jarallax'));

  jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
  });


  $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<3;i++) {
      next=next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    }
  });


  // Tooltip for location search start
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
    // Tooltip for location search ends
  </script>
@stop
