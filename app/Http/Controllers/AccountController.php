<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class AccountController extends Controller
{
    //
    function add($name , $money , $type){
        $account = Account::where(['name' => $name,'type' => $type])->get();
        if(sizeof($account)==0){
            $account = new Account();
            $account->name = $name ;
            $account->money = $money ;
            $account->type = $type;
            $account->save();
        }
        else{
            $account = Account::where(['name' => $name,'type' => $type])->get();
            
            $x['money'] = $money + $account->money;
            $account = Account::where('id',1)->update($x);
            

        }
    }
    function update($name , $money , $type){
        $account = Account::where(['name' => $name,'type' => $type])->get();
        $account->money = $account->money - $money;
        $account->save();
    }
}
