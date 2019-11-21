@extends('layouts.app')

@section('content')

<div class = "main-content d-flex  justify-content-center  flex-column w-100">
        <div class="alert alert-success w-75 ml-4" role="alert">
                Your item is deleted Successfully.
        </div>
        <div class = "items d-flex flex-wrap align-items-start justify-content-start w-100 px-4 py-2">
            @forelse($items as $item)
                <div class="item  mx-2  w-20" id = "item-{{ $item->id }}">

                    <div class = "item-image"  style = 'background-image:url({{ $item->image }})'></div>
                    <div class = "item-details px-2 py-2">
                        <h6 class = "item-name pointer">{{ $item->name }} </h4>
                        <p class = "item-description f-14 my-1">Descrition: {{ $item->description }} </p>
                        <p class = "brand f-14 my-1">Brand : {{ $item->brand }} </p>
                        <p class = "price my-1"> {{ $item->price }} <span class ="price-quot"> EGP </span>  </p>
                    </div>
                    <div class = "px-2 d-flex py-2 order-section">
                        <input type="checkbox" name="item" id="item_{{ $item->id }}" value="{{ $item->id }}" class = 'input-order' >
                        <span class = "f-14"> Order this Item</span>
                    </div>

                </div>
                @empty
                    <div class="card w-100">
                        <div class="card-body">
                            This is No Products.
                        </div>
                    </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center align-items-center">

                      <button class = "btn btn-primary w-25 align-self-center" data-toggle="modal" data-target="#order-items"> Order </button>
                      <!-- Modal -->
                      <div class="modal fade" id="order-items" tabindex="-1" role="dialog" aria-labelledby="order-items" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="order-items">Request Order</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id = "order-request">
                                    <div class ="form-group">
                                        <label for="address">Address</label>
                                        <input class="form-control" type="text" name="address" id="address" placeholder="address">
                                    </div>
                                    <div class ="form-group">
                                        <label for="note">Note</label>
                                        <textarea class = "form-control" name="note" id="note" rows="3" placeholder="Enter note..."></textarea>
                                    </div>
                                    <div class ="form-group">
                                        <label for="date">Delivery date</label>
                                        <input type="datetime-local" name="date" id = "date" class = "form-control">
                                    </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary"  id ="request-order">Confirm</button>
                            </div>
                          </div>
                        </div>
                      </div>
        </div>

    </div>

@endsection




@push('css')
    {!! css('admin/items/index') !!}
@endpush


@push('js')
    {!! js('user/home') !!}
@endpush
