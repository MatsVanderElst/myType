<?php

use \Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public $timestamps = false;
  
  public function orders()
  {
      return $this->hasMany(Order::class);
  }
  

}
