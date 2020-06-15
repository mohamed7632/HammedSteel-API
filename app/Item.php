<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Order;
class Item extends Model
{
    protected $gaurded=['id'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function order(){
        return $this->belongsToMany('App\Order');
    }
}
