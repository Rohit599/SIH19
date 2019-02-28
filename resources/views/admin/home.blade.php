@extends('layouts.admin')

@section('css')
<link href="{{ url('css/modules/charts.min.css') }}" rel="stylesheet">
<style type="text/css">
.cascading-admin-card {
 margin-top: 20px;
}
.cascading-admin-card .admin-up {
 margin-left: 4%;
 margin-right: 4%;
 margin-top: -20px;
 }.cascading-admin-card .admin-up .fab, .cascading-admin-card .admin-up .far, .cascading-admin-card .admin-up .fas {
  padding: 1.7rem;
  font-size: 2rem;
  color: #fff;
  text-align: left;
  margin-right: 1rem;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  }.cascading-admin-card .admin-up .fab, .cascading-admin-card .admin-up .far, .cascading-admin-card .admin-up .fas, .z-depth-2 {
    -webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19)!important;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19)!important;
    }.cascading-admin-card .admin-up .data {
      float: right;
      margin-top: 2rem;
      text-align: right;
    }
  </style>
  @stop

  @section('content')
  <div class="row">


    <!--Grid column-->
    <div class="col-xl-4 col-md-4 mb-4">

      <!--Card-->
      <div class="card card-cascade cascading-admin-card">

        <!--Card Data-->
        <div class="admin-up">
          <i class="fas fa-bolt danger-color"></i>
          <div class="data">
            <p>Issues</p>
            <h4 class="ml-4 mt-4 mb-2 font-weight-bold">{{ $air_issue + $noise_issue + $soil_issue + $water_issue }}</h4>
          </div>
        </div>
        <!--/.Card Data-->

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-xl-4 col-md-4 mb-4">

      <!--Card-->
      <div class="card card-cascade cascading-admin-card">

        <!--Card Data-->
        <div class="admin-up">
          <i class="fas fa-users warning-color"></i>
          <div class="data">
            <p>Users</p>
            <h4 class="ml-4 mt-4 mb-2 font-weight-bold">{{ $user }}</h4>
          </div>
        </div>
        <!--/.Card Data-->

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-xl-4 col-md-4 mb-4">

      <!--Card-->
      <div class="card card-cascade cascading-admin-card">

        <!--Card Data-->
        <div class="admin-up">
          <i class="fas fa-align-left light-blue lighten-1"></i>
          <div class="data">
            <p>Blogs</p>
            <h4 class="ml-4 mt-4 mb-2 font-weight-bold">{{ $blog }}</h4>
          </div>
        </div>
        <!--/.Card Data-->

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->


  </div>

  <div class="row">
    <div class="col-md-6 mb-6">
      <!--Card-->
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header purple">
          <h5 class="mb-0">Issues opened in last 7 days</h5>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body card-body-cascade text-center">
          <canvas id="7daysissue"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-6">

      <!--Card-->
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header purple">
          <h5 class="mb-0">Pollution wise Issue</h5>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body card-body-cascade text-center">

        	<canvas id="pollution"></canvas>

        </div>
        <!--/.Card content-->

      </div>
      <!--/.Card-->

    </div>
  </div>
  @stop

  @section('script')

  <script>
  //pie
  var ctxP = document.getElementById("pollution").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: ["Air", "Noise", "Soil", "Water"],
      datasets: [{
        data: [{{ $air_issue }}, {{ $noise_issue }}, {{ $soil_issue }}, {{ $water_issue }}],
        backgroundColor: ["#F7464A", "#949FB1", "#FDB45C", "#2196F3"],
        hoverBackgroundColor: ["#FF5A5E", "#A8B3C5", "#FFC870", "#03A9F4"]
      }]
    },
    options: {
      responsive: true
    }
  });

  var ctx = document.getElementById("7daysissue").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
      "{{ date("d-m-Y", strtotime('-6 days')) }}",
      "{{ date("d-m-Y", strtotime('-5 days')) }}",
      "{{ date("d-m-Y", strtotime('-4 days')) }}",
      "{{ date("d-m-Y", strtotime('-3 days')) }}",
      "{{ date("d-m-Y", strtotime('-2 days')) }}",
      "{{ date("d-m-Y", strtotime('-1 days')) }}",
      "{{ date("d-m-Y") }}"
      ],
      datasets: [{
        label: 'Issues Open',
        data: [
        {{ $issue_date[date("Y-m-d", strtotime('-6 days'))] }}, 
        {{ $issue_date[date("Y-m-d", strtotime('-5 days'))] }}, 
        {{ $issue_date[date("Y-m-d", strtotime('-4 days'))] }}, 
        {{ $issue_date[date("Y-m-d", strtotime('-3 days'))] }}, 
        {{ $issue_date[date("Y-m-d", strtotime('-2 days'))] }}, 
        {{ $issue_date[date("Y-m-d", strtotime('-1 days'))] }}, 
        {{ $issue_date[date("Y-m-d")] }}
        ],
        backgroundColor: [
        "rgba(255, 99, 132, 0.2)", 
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)", 
        "rgba(75, 192, 192, 0.2)", 
        "rgba(54, 162, 235, 0.2)",
        "rgba(153, 102, 255, 0.2)", 
        "rgba(201, 203, 207, 0.2)"
        ],
        borderColor: [
        "rgb(255, 99, 132)", 
        "rgb(255, 159, 64)", 
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)", 
        "rgb(54, 162, 235)", 
        "rgb(153, 102, 255)", 
        "rgb(201, 203, 207)"
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>
@stop
