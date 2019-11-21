<?php

namespace App\Services;

use App\Item;
use Carbon\Carbon;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;



class ItemService
{
    public static function CreateItem( CreateItemRequest $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->brand = $request->brand;
        if ($request->exists('image')) {
                $item->image = $request->file('image')->store("/items", 'public');
            }
        $item->save();
    }
    public static function UpdateItem(Item $item , UpdateItemRequest $request ){
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->brand = $request->brand;
        if ($request->exists('image')) {
                $item->image = $request->file('image')->store("/items", 'public');
            }
        $item->save();
    }


}
