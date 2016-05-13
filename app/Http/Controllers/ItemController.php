<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller{

    public function getTest(){
        return view('Test');
    }

    public function getNewItem(){
        $items = Item::all();
        return view('newItem',['items' => $items]);
    }


    public function addNewItem(Request $request){

        $this->validate($request,[
            'itemID' => 'required|unique:items',
            'name' => 'required|max:20',
            'category' => 'required|max:20',
            'buyPrice' => 'required',
            'sellPrice' => 'required',
            'count' => 'required'
        ]);

        $itemID = $request['itemID'];
        $name = $request['name'];
        $category = $request['category'];
        $buyPrice = $request['buyPrice'];
        $sellPrice = $request['sellPrice'];
        $count = $request['count'];

        $item = new Item();
        $item->itemID = $itemID;
        $item->name = $name;
        $item->category = $category;
        $item->buyPrice = $buyPrice;
        $item->sellPrice = $sellPrice;
        $item->count = $count;
        $massage = 'There was an error';
        if ($item->save()){
            $massage = 'Item added successfully';
        }

        return redirect()->route('newItem')->with(['message' => $massage]);
    }



}