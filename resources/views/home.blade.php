@extends('layouts.master')
@section('title','Dashboard')

@section('nav')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('noticenter.title')}}</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
@endsection
@section('content')
  <!-- Default box -->
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              @can('access_orders_statistic')
              <div class="row">
                  <div class="col-lg-6">
                      <!-- small box -->
                      <div class="small-box bg-gradient-gray">
                          <div class="inner">
                              <h3>{{$data['oDraft']}}</h3>

                              <p>Drafts</p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-drafting-compass"></i>
                          </div>

                      </div>
                      <!-- small box -->
                      <div class="small-box bg-warning">
                          <div class="inner">
                              <h3>{{$data['oPending']}}</h3>

                              <p>Pending</p>
                          </div>
                          <div class="icon">
                              <i class="far fa-pause-circle"></i>
                          </div>

                      </div>

                  </div>
                  <div class="col-lg-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                          <div class="inner">
                              <h3>{{$data['oApproved']}}</h3>

                              <p>Appeoved</p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-check nav-icon"></i>
                          </div>

                      </div>
                      <!-- small box -->
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h3>{{$data['oDone']}}</h3>

                              <p>Completed</p>
                          </div>
                          <div class="icon">
                              <i class="fas fa-check-double"></i>
                          </div>

                      </div>
                  </div>
              </div>
                  @endcan
          </div>
          <div class="col-lg-6">
              @can('access_financial_statistic')
              <div class="card card-success">
                  <div class="card-header">
                      <h3 class="card-title">Financial Chart</h3>

                      <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="chart">
                          <canvas id="chart"></canvas>
                      </div>
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
                  @endcan
          </div>
      </div>


  </div>

      <!-- /.card -->


@endsection

@section('css')
          <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.min.css')}}">
          <style>
              .dropdown-item{
                  white-space: normal !important;
              }
          </style>
    @endsection

@section('js')
          <script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

          <script>
              var ctx = document.getElementById('chart');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                          labels: @json($months),
                          datasets: [
                              {
                                  label: 'Billed',
                                  data: @json($billsValue),
                                  backgroundColor: '#5cb85c' // green
                              },
                              {
                                  label: 'Due',
                                  data: @json($dueValue),
                                  backgroundColor: '#d9534f' // yellow
                              },

                          ]
                      },
                  options: {
                      scales: {
                          xAxes: [{ stacked: true }],
                          yAxes: [{ stacked: true }]
                      }
                  }
              });

              $(function () {
                  //var ctx = document.getElementById('chart');
              })
          </script>
    @endsection
