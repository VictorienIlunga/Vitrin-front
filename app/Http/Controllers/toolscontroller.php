<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class toolscontroller extends Controller
{
    public static function sendate($dates){
        $date=Carbon::parse($dates);
        $heureSend= strtotime($date);
        
        $heureact=time();
        $time=$heureact-$heureSend;
        if($time<59){
   
          return "maintenant";
       }elseif ($time>60 and $time<3600){
           $resultat=round($time/60);
          return $resultat." min";
   
       }elseif ($time>3600 and $time<86400){
           $resultat=round($time/3600);
           return "il ya ".$resultat." h";
   
       }elseif ($time>86400 and $time<604800){
           $resultat=round($time/86400);
          return "il ya ".$resultat." j";
   
       }elseif ($time>604800 ){
          $resultat=$date->format('d M Y');
          return $resultat;
   
       }
       
    }

    public static function diviseur($no){
        $nombre=$no;
        if($nombre>1000 AND $nombre<1000000){
          $nmb=$nombre/1000 ;
          $resultat=round($nmb,1);
          return $resultat.'k';
        }elseif($nombre>1000000){
          $nmb=$nombre/1000000 ;
          $resultat=round($nmb,1);
          return $resultat.'M';
        }
        else{
          return $nombre;
        }
       }
}
