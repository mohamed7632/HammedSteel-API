<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
class Order extends Model
{
    protected $gaurded=['id'];
    public function order(){
        return $this->belongsToMany('App\Item');
    }
    
}
