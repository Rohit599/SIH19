@extends('layouts.default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('css/addons/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/addons/datatables-select.min.css') }}">
@stop

  @section('content')
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
                <th>Title</th>
                <th>Address</th>
                <th>Pollution<br>Type</th>
                <th>Sentiment</th>
                <th>Status</th>
                <th>Petition<br>Sign</th>
                <th>Created At</th>
                <th>Change Status</th>
        </thead>
    </table>
        </div>
      </div>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript" src="{{ url('js/addons/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/addons/datatables-select.min.js') }}"></script>
<script>
$(function() {
    $('#issues-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user.issues') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'address', name: 'address' },
            { data: 'pollution', name: 'pollution' },
            { data: 'sentiment', name: 'sentiment' },
            { data: 'status', name: 'status' },
            { data: 'sign_count', name: 'sign_count' },
            { data: 'created_at', name: 'created_at' },
            { data: 'change_status', name: 'change_status' }
        ]
    });
});
</script>
@stop
