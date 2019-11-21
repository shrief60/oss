<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{

     /*************************************** */
    /************ Relations ***************** */

    public function Item(){
        return $this->belongsTo(Item::class) ;
    }

    public function Order(){
        return $this->belongsTo(Order::class) ;
    }


}
