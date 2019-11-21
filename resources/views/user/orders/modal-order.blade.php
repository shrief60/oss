
<!-- Modal -->
<div class="modal fade" id="modal_{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Order items</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            @foreach($order->orderDetails as $prod)
                <div class="card my-2">
                    <div class="card-body d-flex flex-column justify-content-between align-items-start pointer" data-toggle="modal" data-target="#modal_{{ $order->id }}">
                        
                        <span> Item name : {{ $prod->item->name }}</span>
                        <span> Item brand :  {{ $prod->item->brand }}</span>
                        <span>Item description :{{ $prod->item->description }}</span>
                        <span> Total price :{{ $prod->item->price }} LE.</span>
                        <img src="{{ $prod->item->image }}" alt="" class ="image">
                    </div>
                </div>
            @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>