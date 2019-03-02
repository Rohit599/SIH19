@extends('layouts.admin')

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
            </tr>
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
        ajax: '{!! route('get.issues') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' }
        ]
    });
});
</script>
@stop
