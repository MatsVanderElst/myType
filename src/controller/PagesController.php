<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '../../model/Country.php';
require_once __DIR__ . '../../model/Text.php';
require_once __DIR__ . '../../model/Order.php';

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    $countries = Country::all();
    $orders = Order::all();
    $ordersForBelgium = Order::where("country_id","=",1)->get();
    $texts = Text::all();


    /* $file = $request->file('image');
    $contents = $file->openFile()->fread($file->getSize()); */


  }

  public function upload(){
   /*  $allImages =  Image::all(); */

    /* if ($request->hasFile('file')) {

      $request->validate([
          'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
      ]);

      // Save the file locally in the storage/public/ folder under a new folder named /product
      $request->file->store('image', 'public');

      // Store the record, using the new file hashname which will be it's new filename identity.
      $image = new Image([
          "file_path" => $request->file->hashName()
      ]);
      $image->save(); // Finally, save the record.
    } */

  }
  
  public function order(){

    $order = new Order ;
    $order->name = $_GET['name'];
    $order->adress = $_GET['adress'];
    $order->postal_code = $_GET['postal_code'];
    $order->city = $_GET['city'];
    $order->country_id = $_GET['country_id'];

    $order->save();
  }

}
