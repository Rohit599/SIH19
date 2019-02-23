@extends('layouts.default')
<main style="margin-top: 6rem;">
	<div class="container">
		<!-- Material form contact -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Create Blog</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form style="color: #757575;" method="POST" action="{{url('blog')}}" enctype="multipart/form-data">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="title" class="form-control" required>
                <label for="title">Title</label>
            </div>

            <!-- E-mail -->
            <div class="md-form">
            	<p>Content</p>
                <textarea type="text" id="description" class="md-textarea form-control" rows="3"></textarea>
  				<label for="description"></label>
            </div>

            <!--Message-->
            <div class="md-form">
              <div class="file-field">
                <div class="btn blue-gradient btn-rounded btn-sm float-left">
                  <span><i class="fas fa-upload mr-2" aria-hidden="true"></i>Choose Picture</span>
                  <input type="file" name="upload_file" required>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
              </div>
            </div>
            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Post</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->
	</div>
</main>
@section('content')
@stop