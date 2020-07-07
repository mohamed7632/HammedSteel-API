<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class CustomerTransaction extends Controller
{
    public function addNewTransaction($name , $paid ,$remaining, $paidBy , $type){
        $obj=new Transaction();
        
        $obj->name=$name;
        $obj->paid=$paid;
        $obj->paidBy = $paidBy;
        $obj->type = $type;
        $obj->remaining = $remaining;
        $obj->save();

    }
    public function displayTransaction($type){
       $data=Transaction::where('type',$type)->orderBy('id','desc')->get();
       return $data->toJson(); 
    }
    function getTrans($name){
       $trans = Transaction::where('name',$name)->where('type',0)->orderBy('id','desc')->get();
       return $trans->toJson(); 
    }
}
