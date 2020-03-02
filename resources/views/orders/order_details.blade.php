@extends('layouts.master')
@section('title',__('orders.order_manager_title'))
@section('nav')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ __('orders.order_manager_title') }} / {{ __('orders.order_details') }}</h1>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <!-- Default box -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title mt-3">
                        <h3 align="center">Order Details</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Order Owner : <b>{{$order->user->name}}</b></h4>
                        <p class="card-text mt-5">
                            Order Description : <p>{!! $order->desc !!}</p>
                        </p>
                        <p class="card-text mt-3">
                            Order Date : {{$order->created_at}}
                        </p>
                        <p class="card-text mt-3 h3">
                            Total : <b>({{$order->summary}}.00$)</b><sup><del>{{$order->total}}.00$</del></sup>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title mt-3">
                        <h3 align="center">Order Items</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->product->title}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->discount}}</td>
                                    <td>
                                        @if($item->discount == 0)
                                            {{$item->price * $item->amount}}.00
                                        @elseif($item->discount > 0)
                                            @if(strpos($item->discount,'%'))
                                                {{($item->price * (100 - rtrim($item->discount,'%')))*$item->amount / 100}}
                                            @else
                                                {{($item->price * $item->amount)-$item->discount}}.00$
                                            @endif
                                        @else
                                            {{$item->price * $item->amount}}.00
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Notes : </h5>
                        <p class="card-text">
                            {!! $order->note !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Status : </h5>
                        <p class="card-text">
                            <h3><span class="bg-warning p-1"><a href="{{(substr($order->status_note, 4)=='http')?$order->status_note:'#'}}">{{$order->status_note}}</a></span></h3>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
@endsection
