@extends('layouts.app')

@section('content')
    <div class = "main-content d-flex  justify-content-center  flex-column w-100">
        <div class="alert alert-success w-75 ml-4" role="alert">
                Your item is deleted Successfully.
        </div>
        <div class = "items d-flex flex-wrap align-items-start justify-content-start w-100 px-4 py-2">
            @foreach($items as $item)
                <div class="item  mx-2  w-20" id = "item-{{ $item->id }}">
                    
                    @if(auth()->user()->type == "Admin")
                        <img src="{{ asset('images/delete.svg') }}" class="delete-icon pointer" id = "delete-item" data-id = "{{ $item->id }}">
                        <a href="{{ route('items.edit' , ['item' => $item->id]) }}" class="edit-href pointer">
                            <img src="{{ asset('images/edit-tool.svg') }}" class="edit-icon pointer" id = "edit-item" data-id = "{{ $item->id }}">
                        </a>
                    @endif
                    <div class = "item-image"  style = 'background-image:url({{ $item->image }})'></div>
                    <div class = "item-details px-2 py-2">
                        <h6 class = "item-name pointer">{{ $item->name }} </h4>
                        <p class = "item-description f-14 my-1">Descrition: {{ $item->description }} </p>
                        <p class = "brand f-14 my-1">Brand : {{ $item->brand }} </p>
                        <p class = "price my-1"> {{ $item->price }} <span class ="price-quot"> EGP </span>  </p>
                    </div>
                    @if(auth()->user()->type != "Admin")
                        <div class = "px-2 d-flex py-2 order-section">
                            <input type="checkbox" name="item" id="" class = 'input-order' >
                            <span class = "f-14"> Order this Item</span>
                        </div>  
                    @endif
                </div>
            @endforeach
        </div>

    </div>
   
@endsection
            

@push('css')
    {!! css('admin/items/index') !!}
@endpush


@push('js')
    {!! js('admin/items/index') !!}
@endpush