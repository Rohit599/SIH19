@extends('layouts.default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('css/addons/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/addons/datatables-select.min.css') }}">
<style type="text/css">
    select {
        display:inline!important;
    }
</style>
@stop

  @section('content')
  <main style="margin-top: 65px;">
  <div class="row">
    <div class="col-md-12 mb-12">
      <!--Card-->
      <div class="card">

        <!--Card content-->
        <div class="card-body card-body-cascade text-center">
          
    <table class="table table-bordered" id="issues-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Post</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Action</th>
        </thead>
    </table>
        </div>
      </div>
    </div>
</div>
</main>
@stop

@section('script')
<script type="text/javascript" src="{{ url('js/addons/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/addons/datatables-select.min.js') }}"></script>
<script>
$(function() {
    $('#issues-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user.blogs') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'cover_img', name: '' },
            { data: 'title', name: 'title' },
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at' },
            { data: 'change_status', name: 'change_status' }
        ]
    });
});
</script>
@stop
