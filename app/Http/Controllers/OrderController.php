<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\Mail\requestOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function create( Request $request ){
      
        $order = new Order();
        $order->user_id = auth()->id();
        $order->shipping_address = $request->address ;
        $order->shipping_note = $request->note ;
        $order->shipping_date = $request->date;
        $order->save();
        $order_id = $order->id ;
        $order_components = $request->results;
        for( $i = 0 ; $i < count($order_components) ; $i++)
        {
            $order_details = new OrderDetails();
            $order_details->order_id = $order_id ;
            $order_details->item_id = $order_components[$i];
            $order_details->quantity = 1;
            $order_details->save();
        }
        $user = auth()->user()->email;
        Mail::to($user)->send(new requestOrder( $order ));

        if($request->ajax() )
        {
            return api(['status' => "created"]);
        }  
       
        return redirect()->back();

    }
    public function index(){
        $user  = auth()->user();
        $orders = $user->orders()->with('orderDetails')->get();
        return view('user.orders.my-orders' , compact('orders'));
    }
    public function show_bills(){
        $user  = auth()->user();
        $orders = $user->orders()->with('orderDetails')->get();
        return view('user.orders.my-bills' , compact('orders'));
    }
}
