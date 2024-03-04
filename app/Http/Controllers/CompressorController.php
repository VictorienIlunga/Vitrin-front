<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use image;
class CompressorController extends Controller
{
    public static function profilCompresor($fileRequest,$filename){
        $file=$fileRequest;
        $img=\Image::make($file);
        $size = $img->filesize();
        $x=30;
          $img->save("storage/profil/".$filename,$x);
          return 'true';
   
      }
}
