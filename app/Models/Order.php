<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function getOrderPriceAttribute(){
        $products = $this->orderDetails ; 
        $total_price = 0;
       
        foreach($products as $prod)
        {
            $total_price += $prod->item->price ;
        }
        return $total_price ;
    }
}
