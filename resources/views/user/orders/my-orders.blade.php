@extends('layouts.app')

@section('content')

<div class = "orders">

    @forelse ($orders as $order)
        <div class="card my-2">
            <div class="card-body d-flex justify-content-between align-items-center pointer" data-toggle="modal" data-target="#modal_{{ $order->id }}">
                <span> Order id : {{ $order->id }}</span>
                <span> User name: {{ $order->user->name }}</span>
                <span> Delivery date :{{ $order->shipping_date }}</span>
                <span> Total price :{{ $order->order_price }} LE.</span>
            </div>
        </div>
        @include('user.orders.modal-order')
    @empty

        <div class="card my-2">
            <div class="card-body">
              This is No Orders.
            </div>
        </div>
    @endforelse


</div>
   
@endsection


            

@push('css')
    {!! css('user/orders/index') !!}
@endpush


@push('js')
    {!! js('user/home') !!}
@endpush