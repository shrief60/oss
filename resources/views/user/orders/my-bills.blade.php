@extends('layouts.app')

@section('content')

<div class = "orders">

    @forelse ($orders as $order)
        <div class="card my-2">
            <div class="card-body d-flex justify-content-between align-items-center pointer">
                <span> Order id : {{ $order->id }}</span>
                <span> User : {{ $order->user->name }}</span>
                <span> Total price :{{ $order->order_price }} LE.</span>
            </div>
        </div>
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
    {!! css('admin/items/index') !!}
@endpush


@push('js')
    {!! js('user/home') !!}
@endpush