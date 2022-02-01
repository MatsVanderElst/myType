<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '../../model/Country.php';
require_once __DIR__ . '../../model/Text.php';
require_once __DIR__ . '../../model/Order.php';
require_once __DIR__ . '../../model/Image.php';

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){

    $countries = Country::all();
    
    $this->set('countries', $countries);
    
    
    $language = $_GET['language'];
    
    if ($language != NULL && in_array($language, ['en','fr','de'])) {
      $_SESSION['language'] = $language;
    } else {
      if (isset( $_SESSION['language'])) {
        $language = $_SESSION['language'];
      } else {
        $_SESSION['language'] = 'en';
        $language = $_SESSION['language'];
      } 
    }

    $textCollection = Text::where('language','=',$language)->get();
    $textArray = $textCollection->mapWithKeys(function ($item, $key) {
      return [$item['name'] => $item['content']]; 
    });
    $textArray->all();
    $this->set('textArray', $textArray);

    $images = Image::all();
    $this->set('images', $images);
  }
  
  public function order(){

    $order = new Order ;
    $order->name = $_GET['name'];
    $order->address = $_GET['address'];
    $order->postal_code = intval($_GET['postalCode']);
    $order->city = $_GET['city'];
    $order->country_id = intval( $_GET['country']);

    $order->save();
  }

}
