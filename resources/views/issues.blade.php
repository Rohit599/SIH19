@extends('layouts.default')
@section('content')
<main style="margin-top: 65px;">
	<div class="container-fluid wow fadeIn" data-wow-delay="0.3s">
		<div class="row">
			<div class="col-md-3 mb-3 ">
			</div>
			<div class="col-md-9 mb-9">
				@foreach ($issues as $issue)
					<div class="media .z-depth-1 m-3 border">
						<img src="{{ url('uploads/'.$issue->image) }}" alt="thumbnail" class="img-thumbnail d-flex m-3" style="width: 200px">
						<div class="media-body m-3">
							<h5 class="mt-0 font-weight-bold"><a href="{{ url('issue/'.$issue->id) }}">{{ $issue->title }}</a></h5>
							<i class="fa  fa-calendar"></i> {{\Carbon\Carbon::parse($issue->created_at)->diffForHumans()}} By <a href="{{ url('issues/user/'.$issue->user_id) }}">{{ $issue->user->name }}</a>
							<div class="progress md-progress" style="height: 20px">
							    <div class="progress-bar  progress-bar-striped" role="progressbar" style="width: {{ $issue->signs_count }}%; height: 20px" aria-valuenow="{{ $issue->signs_count }}" aria-valuemin="0" aria-valuemax="100">{{ $issue->signs_count }}/100 Sign completed</div>
							</div>
						</div>
					</div>
				@endforeach
				<br>
				{{ $issues->links() }}
			</div>
		</div>
	</div>
</main>
@stop