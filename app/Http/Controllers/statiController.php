<?php

namespace App\Http\Controllers;

use App\Models\capital;
use App\Models\client;
use App\Models\credit;
use App\Models\User;
use Illuminate\Http\Request;

class statiController extends Controller
{
    public static function pourcentageclient(){
        $year=date("Y");
        $month=date("m");
        $prevmonth=date('m')-1;
        $MA=client::whereYear("created_at",'=',$year)
                   ->whereMonth("created_at",'=',$month)
                   ->count();
        $MP=client::whereYear("created_at",'=',$year)
                   ->whereMonth("created_at",'=',$prevmonth)
                   ->count();
         $total=$MA+$MP;
 
         if($total>0){

            $resultat= (($MA-$MP)*100)/$total;
            if ($resultat>=0) {
               echo " <span class='text-green-600'>+".round($resultat,1)."%</span> ";
            } else {
                echo " <span class='text-red-600'>".round($resultat,1)."%</span> ";
            
            } }else{
               echo " <span class='text-green-600'>".round(0,1)."%</span> ";
            }
         
    }

    public static function pourcentagcredit(){
        $year=date("Y");
        $month=date("m");
        $prevmonth=date('m')-1;
        $MA=credit::whereYear("created_at",'=',$year)
                   ->whereMonth("created_at",'=',$month)
                   ->count();
        $MP=credit::whereYear("created_at",'=',$year)
                   ->whereMonth("created_at",'=',$prevmonth)
                   ->count();
         $total=$MA+$MP;
 
         if($total>0){

            $resultat= (($MA-$MP)*100)/$total;
            if ($resultat>=0) {
               echo " <span class='text-green-600'>+".round($resultat,1)."%</span> ";
            } else {
                echo " <span class='text-red-600'>".round($resultat,1)."%</span> ";
            
            } }else{
               echo " <span class='text-green-600'>".round(0,1)."%</span> ";
            }
         
    }

    public static function pourcentageinteret(){
        $year=date("Y");
        $month=date("m");
        $prevmonth=date('m')-1;
        $capitalTolalA=capital::whereYear("created_at",'=',$year)
                                ->whereMonth("created_at",'=',$month)
                                ->get();
        $InTotalA=$capitalTolalA->where('type','Cr')->sum('montant');
        $OutTotalA=$capitalTolalA->where('type','Pm')->sum('montant');
        $MA=$OutTotalA-$InTotalA;

        $capitalTolalP=capital::whereYear("created_at",'=',$year)
                                ->whereMonth("created_at",'=',$prevmonth)
                                ->get();
        $InTotalP=$capitalTolalP->where('type','Cr')->sum('montant');
        $OutTotalP=$capitalTolalP->where('type','Pm')->sum('montant');
        $MP=$OutTotalP-$InTotalP;

         $total=$MA+$MP;
 
         if($total>0){

            $resultat= (($MA-$MP)*100)/$total;
            if ($resultat>=0) {
               echo " <span class='text-green-600'>+".round($resultat,1)."%</span> ";
            } else {
                echo " <span class='text-red-600'>".round($resultat,1)."%</span> ";
            
            } }else{
               echo " <span class='text-green-600'>".round(0,1)."%</span> ";
            }
         
    }

    public static function pourcentageCapital(){
        $year=date("Y");
        $month=date("m");
        $prevmonth=date('m')-1;

        $capitalTolalA=capital::whereYear("created_at",'=',$year)
                                ->whereMonth("created_at",'=',$month)->get();
        $InA=$capitalTolalA->where('type','In')
                        ->sum('montant');
        $OutA=$capitalTolalA->where('type','Out')
                            ->sum('montant');
        $CrA=$capitalTolalA->where('type','Cr')
                            ->sum('montant');
        $PmA=$capitalTolalA->where('type','Pm')
                            ->sum('montant');
        $MA=$InA+$PmA-$OutA-$CrA;

        $capitalTolalP=capital::whereYear("created_at",'=',$year)
                                ->whereMonth("created_at",'=',$prevmonth)->get();
        $InP=$capitalTolalP->where('type','In')
                            ->sum('montant');
        $OutP=$capitalTolalP->where('type','Out')
                            ->sum('montant');
        $CrP=$capitalTolalP->where('type','Cr')
                            ->sum('montant');
        $PmP=$capitalTolalP->where('type','Pm')
                            ->sum('montant');
        $MP=$InP+$PmP-$OutP-$CrP;

         $total=$MA+$MP;
 
         if($total>0){

            $resultat= (($MA-$MP)*100)/$total;
            if ($resultat>=0) {
               echo " <span class='text-green-600'>+".round($resultat,1)."%</span> ";
            } else {
                echo " <span class='text-red-600'>".round($resultat,1)."%</span> ";
            
            } }else{
               echo " <span class='text-green-600'>".round(0,1)."%</span> ";
            }
         
    }

    public static function evolution(){
        $first=User::first();
        $capitalTolal=capital::get();
        $In=$capitalTolal->where('type','In')->sum('montant');
        $Out=$capitalTolal->where('type','Out')->sum('montant');
        $Cr=$capitalTolal->where('type','Cr')->sum('montant');
        $Pm=$capitalTolal->where('type','Pm')->sum('montant');
        $capital=$In+$Pm-$Out-$Cr;

        $YearFirst=$first->created_at->format("Y");
        
         $resultat="";
         if($capital>0){
        for ($i=$YearFirst; $i <date("Y")+1 ; $i++) { 
            $s=$i+1;
         $resultat.=' 
         <div class="w-full h-10 flex  bg-gray-200 rounded-md text-black d mt-1 mb-2"> 
         <div class="w-[10%] h-full flex justify-center items-center">'.$i.'-'.$s.'</div>
         <div class="w-[15%] h-full flex justify-center items-center border-l border-r border-white ">'.toolscontroller::diviseur(client::whereYear('created_at','=',$i)->count()).'</div>
         <div class="w-[15%] h-full flex justify-center items-center border-l border-r border-white "> '.toolscontroller::diviseur(credit::whereYear('created_at','=',$i)->count()).'</div>
         <div class="w-[25%] h-full flex justify-center items-center border-l border-r border-white font-bold">'.number_format(self::interetEvolution($i), 2, '.', ' ').'Fbu</div>
         
         <div class="w-[25%] h-full flex justify-center items-center  border-r border-white font-bold">'.number_format(self::capitalEvolution($i), 2, '.', ' ').'Fbu</div>
         <div class="w-[10%] h-full flex justify-center items-center">'.round((self::capitalEvolution($i)*100)/$capital,2).'</div>
         </div>';
        }}
       
        return $resultat;
     }
     public static function interetEvolution($year){
        $capitalTolalA=capital::whereYear("created_at",'=',$year)->get();
        $InTotalA=$capitalTolalA->where('type','Cr')->sum('montant');
        $OutTotalA=$capitalTolalA->where('type','Pm')->sum('montant');
        $interet=$OutTotalA-$InTotalA;
        return $interet;
     }

     public static function capitalEvolution($year){
        $capitalTolalA=capital::whereYear("created_at",'=',$year)->get();
        $InA=$capitalTolalA->where('type','In')->sum('montant');
        $OutA=$capitalTolalA->where('type','Out')->sum('montant');
        $CrA=$capitalTolalA->where('type','Cr')->sum('montant');
        $PmA=$capitalTolalA->where('type','Pm')->sum('montant');
        $capital=$InA+$PmA-$OutA-$CrA;
        return $capital;
     }
}
