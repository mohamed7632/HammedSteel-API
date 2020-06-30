<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function makeOrder($username , $totalPrice , $paid , $paidBy){
            $order = new Order();
            $order->customer_name = $username;
            $order->total_price = $totalPrice;
            $order->paid = $paid;
            $order->paidBy = $paidBy;
            $order->save();
            return $order->toJson();
    }
    function getOrders(){
        $orders =  Order::all();
        return $orders->toJson();
    }
    function updateOrder($id , $paid){
        $order = Order::findOrFail($id);
        $x['paid']=$paid + $order->paid;
        Order::where('id', $id )->update($x);
    }
    public function delete($id)
    {
        $order  = Order::findOrFail($id);
        $order->delete();
    }
    public function deleteItem($id ,$price){
        $order = Order::findOrFail($id);
        if($order->total_price >= $price){
            $x['total_price'] = $order->total_price - $price;
            if($order->paid >= $price){
                $x['paid'] = $order->paid - $price;
            }
            Order::where('id',$id)->update($x);
        }

          

    }
}
