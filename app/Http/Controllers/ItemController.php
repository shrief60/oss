<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view( 'admin/items/index' , compact('items') );
    }

    public function create(){
        return view( 'admin/items/create');
    }
    public function store(CreateItemRequest $request){
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price ;
        $item->description = $request->description;
        $item->brand = $request->brand;
        if( $request->exists('image') )
        {
            $item->image = $request->file('image')->store("/items", 'public');
        }
        $item->save();
        return redirect()->route('items.index');
    }

    public function edit(Item $item){
        return view('admin/items/edit' , compact('item'));
    }
    public function update(UpdateItemRequest $request , Item $item){
        $item->name = $request->name;
        $item->price = $request->price ;
        $item->description = $request->description;
        $item->brand = $request->brand;
        if( $request->exists('image') )
        {
            $item->image = $request->file('image')->store("/items", 'public');
        }
        $item->save();
        return redirect()->route('items.index');
    }
    public function destroy(Request $request , Item $item){
        $status =$item->delete();
        if($request->ajax() )
        {
            return api(['status' => $status]);
        }  
        return redirect()->back();
    }
}
