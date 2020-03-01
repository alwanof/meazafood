@extends('layouts.master')
@section('title',__('orders.order_manager_title'))
@section('nav')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ __('orders.order_manager_title') }} / {{ __('orders.edit_order') }}</h1>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <!-- Default box -->
    <order-edit-completed-component :csrf_code="{{json_encode(csrf_token())}}" :order_id="{{$order->id}}" :acl="{{json_encode($acl)}}"  :lang={{ json_encode(app()->getLocale()) }} :auth="{{ json_encode(Auth::user()) }}" />

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
@endsection
