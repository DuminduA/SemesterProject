<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Mockery\Exception;

class ItemController extends Controller{

    public function search( Request $request){
        $this->validate($request,[
            'search' => 'required',
            'searchOption' => 'required'
        ]);
        $string = $request['search'];
        $option = $request['searchOption'];
        $check = Item::all();
        if (sizeof($check)==0){
            $items=array();
            $heading = '"No Item in the in Inventory"';
            return view('searchItem', ['items' => $items,'heading'=>$heading]);
        }
        if($option==1) {
            $items = Item::where('name', $string)->get();
        }else{
            $items = Item::where('category', $string)->get();
        }
        if (!isset($items)){
            $items=array();
            $heading = '"Item Not Found"';
            return view('searchItem', ['items' => $items,'heading'=>$heading]);
        }

        $heading = 'Available Items';
        return view('searchItem', ['items' => $items,'heading'=>$heading]);
    }

    public function getsearchItem(){
        $items = Item::all();
        $heading = 'Available Items';
        return view('searchItem',['items'=>$items,'heading'=>$heading]);
    }


    public function getUpdateItems(){
        $items = Item::all();
        return view('updateItems',['items'=>$items]);
    }
    
    public function getNewItem(){
        return view('newItem');
    }


    public function addNewItem(Request $request){

        $this->validate($request,[
            'itemID' => 'required|unique:items',
            'name' => 'required|max:20',
            'category' => 'required|max:20',
            'buyPrice' => 'required',
            'sellPrice' => 'required',
            'quantity' => 'required'
        ]);

        $item = new Item();
        $item->itemID = $request['itemID'];
        $item->name = $request['name'];
        $item->category = $request['category'];
        $item->buyPrice = $request['buyPrice'];
        $item->sellPrice = $request['sellPrice'];
        $item->quantity = $request['quantity'];
        $request->staff()->item()->save($item);
        $message = 'There was an error';
        if ($item->save()){
            $message = 'Item added successfully';
        }

        return redirect()->route('newItem')->with(['message' => $message]);
    }

    public function deleteItem($itemID){
        $item = Item::where('itemID',$itemID)->first();
        $item->delete();
        return redirect()->route('updateItems')->with(['message'=>'Successfully Deleted']);
    }

    public function editItem($itemID){
        $item = Item::where('itemID',$itemID)->first();
        return view('editItem',['item'=>$item]);
    }

    public function addEditItem(Request $request,Item $item){
        $item->delete();
        $this->validate($request,[
            'itemID' => 'required|unique:items',
            'name' => 'required|max:20',
            'category' => 'required|max:20',
            'buyPrice' => 'required',
            'sellPrice' => 'required',
            'quantity' => 'required'
        ]);

        $item = new Item();
        $item->itemID = $request['itemID'];
        $item->name = $request['name'];
        $item->category = $request['category'];
        $item->buyPrice = $request['buyPrice'];
        $item->sellPrice = $request['sellPrice'];
        $item->count = $request['quantity'];
        $item->staff()->item();
        $item->save();
        
        return redirect()->route('updateItems');
    }

}