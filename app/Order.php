<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
class Order extends Model
{
    protected $gaurded=['id'];
    public function items(){
        return $this->belongsToMany('App\Item','order_item');
    }
}
