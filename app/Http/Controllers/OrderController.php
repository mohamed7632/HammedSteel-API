<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
class OrderController extends Controller
{
    function getOrder($order_id){
         $order=Order::find($order_id)->items()->get();
        // $items=$order->with('items')->get();
    //    $items=Order::find($order_id)->items->get();
    //   $items=Order::with('items')->first();        
        return $order->toJson();

    }
    function getAllOrder(){
        $data=Order::get();
        return response()->json( [$data] );

    }
}
