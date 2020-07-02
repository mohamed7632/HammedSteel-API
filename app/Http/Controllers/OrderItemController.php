<?php

namespace App\Http\Controllers;

use App\Item;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    //
    function storeItems($itemID ,$itemName ,$orderID ,$price,$numberOfItems){
        $orderItem = new OrderItem();
        $orderItem->item_id = $itemID;
        $orderItem->order_id = $orderID;
        $orderItem->price = $price;
        $orderItem->itemName = $itemName;
        $orderItem->numberOfItems = $numberOfItems;
        $orderItem->save();
               
    }
    function getAllItem(){
        $order_item =  OrderItem::orderBy('id','desc')->get();
        return $order_item->toJson();
    }
    function getByOrder($orderID){
       $items = OrderItem::where('order_id',$orderID)->get();
       return $items->toJson();
    }
    function deleteItem($id){
        $item  = OrderItem::findOrFail($id);
        $item->delete();

    }
}
