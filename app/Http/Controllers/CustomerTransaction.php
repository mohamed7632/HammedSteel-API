<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class CustomerTransaction extends Controller
{
    public function addNewTransaction($name , $paid , $paidBy){
        $obj=new Transaction();
        
        $obj->name=$name;
        $obj->paid=$paid;
        $obj->paidBy = $paidBy;
        $obj->save();

    }
    public function displayTransaction(){
       $data=Transaction::all();
       return $data->toJson(); 
    }
}
