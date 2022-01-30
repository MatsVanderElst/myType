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
    $texts = Text::all();

    $this->set('countries', $countries);
    

    $textCollection = Text::all();
    $textArray = $textCollection->mapWithKeys(function ($item, $key) {
      return [$item['name'] => $item['content']]; 
    });
    $textArray->all();
    $this->set('textArray', $textArray);

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
    $order->address = $_GET['address'];
    $order->postal_code = intval($_GET['postalCode']);
    $order->city = $_GET['city'];
    $order->country_id = intval( $_GET['country']);

    $order->save();
    
    
  }

}
