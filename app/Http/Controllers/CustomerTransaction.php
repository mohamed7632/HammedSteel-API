<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class CustomerTransaction extends Controller
{
    public function addNewTransaction(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:191',
            'paid'=>'numeric'
        ]);
        $obj=new Transaction();
        
        $obj->name=$data['name'];
        $obj->paid=$data['paid'];
        $obj->save();

    }
    public function displayTransaction($name){
       $data['transaction']=Transaction::where('name',$name)->get();
       return response()->json( [$data] ); 
    }
}
