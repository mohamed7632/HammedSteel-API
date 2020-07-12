<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected$fillable =['name','money','type'];
  public function getMoneyAttribute()
{
    return "{$this->money} ";
}
public function setMoneyAttribute($value)
{
    $this->attributes['money'] = strtolower($value);
}
}
