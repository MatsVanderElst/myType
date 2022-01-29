<?php

use \Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public $timestamps = false;
  protected $fillable = ['file_path'];
  
  

}
