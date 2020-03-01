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
    <bill-component :acl="{{json_encode($acl)}}" :orders="{{json_encode($orders)}}" :users="{{json_encode($users)}}" :lang={{ json_encode(app()->getLocale()) }} :auth="{{ json_encode(Auth::user()) }}" ></bill-component>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
@endsection
