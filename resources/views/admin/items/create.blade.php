@extends('admin.items.main')

@section('form-header')
<h3 class = "title"> Create Item </h3>
@endsection
@section('form')
     <form class = "w-75" action={{ route('items.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name">
                </div>           
                <div class="form-group">
                <label for="description">Item   Description</label>
                <textarea class="form-control" id="description" placeholder="Enter Item descrition .." rows="3" name ="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Item Price</label>
                    <input type="number" class="form-control" id="price" placeholder="price" name = "price">
                </div>
                <div class="form-group">
                    <label for="name">Brand Name</label>
                    <input type="text" class="form-control" id="brand" placeholder="brand name" name = "brand">
                </div>
                <div class="form-group">
                    <label for="item_img">Item Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection

@push('css')
    {!! css('admin/items/create') !!}
@endpush