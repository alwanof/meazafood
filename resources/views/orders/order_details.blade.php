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
                        <div class="card-header">
                            <h4>{{$order->user->name}}

                                <small class="float-right">
                                    {{$order->created_at}}
                                    <i class="fa fa-clock"></i>
                                </small>
                            </h4>
                        </div>
                        <div class="card-body">

                            {!! $order->desc !!}
                        </div>
                        <div class="card-footer">
                            <h4 class="card-title">Admin Notes : </h4>
                            <p class="card-text">
                                {!! $order->note !!}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        @if($order->status_note)
                        <div class="card-header">
                            <h2 >
                                <span class="badge badge-warning p-2">
                                    <a href="{{(substr($order->status_note, 4)=='http')?$order->status_note:'#'}}" target="_blank">
                                        {{(substr($order->status_note, 4)=='http')?'Tracking':$order->status_note}}
                                    </a>
                                </span>
                            </h2>
                        </div>
                        @endif
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
                        <div class="card-footer bg-info h4">

                            <b>({{$order->summary}}.00$)</b><sup><del>{{$order->total}}.00$</del></sup>
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
