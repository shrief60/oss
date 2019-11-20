<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Item extends Model
{
    
    /*************************************** */
    /************ Relations ***************** */
    


    /*************************************** */
    /************ Accessor ***************** */
    public function getImageAttribute($image)
    {
        return  ($image !=null) ? asset(Storage::url($image)) : asset('images/icons/default_product.jpg');
    }
}
