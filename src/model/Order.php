<?php

use \Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public $timestamps = false;
  
  public function country()
  {
      return $this->belongsTo(Country::class);
  }
  

}
