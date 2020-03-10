@extends('layouts.master')
@section('title',__('bills.billsManager'))
@section('nav')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ __('bills.billsManager') }}</h1>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <!-- Default box -->

        <div class="row">
            <div class="col-lg-3">
                <div class="small-box bg-gradient-gray">
                    <div class="inner">
                        <h3 class="text-center">Current Month</h3>
                        <hr>
                        <h4>{{coolNumber($billStatistics['income']['month'])}}<sup>$In.</sup></h4>

                        <h4>{{coolNumber(-1*$billStatistics['due']['month'])}}<sup>Dep.</sup></h4>
                        <hr>
                        <h3 class="text-center">{{coolNumber($billStatistics['income']['month']-$billStatistics['due']['month'])}}<sup><small>$Blc.</small></sup></h3>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar-minus"></i>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-center">Last 3.Months</h3>
                        <hr>
                        <h4>{{coolNumber($billStatistics['income']['t3month'])}}<sup>$In.</sup></h4>

                        <h4>{{coolNumber(-1*$billStatistics['due']['t3month'])}}<sup>Dep.</sup></h4>
                        <hr>
                        <h3 class="text-center">{{coolNumber($billStatistics['income']['t3month']-$billStatistics['due']['t3month'])}}<sup><small>$Blc.</small></sup></h3>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 class="text-center">Last Year</h3>
                        <hr>
                        <h4>{{coolNumber($billStatistics['income']['year'])}}<sup>$In.</sup></h4>

                        <h4>{{coolNumber(-1*$billStatistics['due']['year'])}}<sup>Dep.</sup></h4>
                        <hr>
                        <h3 class="text-center">{{coolNumber($billStatistics['income']['year']-$billStatistics['due']['year'])}}<sup><small>$Blc.</small></sup></h3>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar-check"></i>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 class="text-center">All</h3>
                        <hr>
                        <h4>{{coolNumber($billStatistics['income']['all'])}}<sup>$In.</sup></h4>

                        <h4>{{coolNumber(-1*$billStatistics['due']['all'])}}<sup>Dep.</sup></h4>
                        <hr>
                        <h3 class="text-center">{{coolNumber($billStatistics['income']['all']-$billStatistics['due']['all'])}}<sup><small>$Blc.</small></sup></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-double"></i>
                    </div>
                </div>
            </div>
        </div>


    <bill-component :acl="{{json_encode($acl)}}" :orders="{{json_encode($orders)}}" :users="{{json_encode($users)}}" :lang={{ json_encode(app()->getLocale()) }} :auth="{{ json_encode(Auth::user()) }}" ></bill-component>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
@endsection
