<?php

namespace App\Http\Controllers;

use App\Models\capital;
use App\Models\contrat;
use App\Models\credit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditController extends Controller
{
    public function OperationCredit(request $request){
        $chechCredit=credit::where('statut','wait')->count();
        if ($chechCredit==0) {
            if(password_verify($request->password,Auth::user()->password)){
            $capital=capital::orderbydesc('id')->get();
            $In=$capital->where('type','In')->sum('montant');
            $Out=$capital->where('type','Out')->sum('montant');
            $Cr=$capital->where('type','Cr')->sum('montant');
            $Pm=$capital->where('type','Pm')->sum('montant');
            $montant=$In+$Pm-$Out-$Cr;
            if($request->Montant<$montant){

                capital::create([
                    'user_id'=>Auth::user()->id,
                    'montant'=>$request->Montant,
                    'type'=>"Cr"
                ]);

                $credit=credit::create([
                    'client_id'=>$request->clientId,
                    'montant'=>$request->Montant,
                    'gage'=>$request->Gage,
                    'DateFin'=>$request->DateFin,
                    'statut'=>'wait'
                ]);

                contrat::create([
                    'nom'=>time(),
                    'credit_id'=>$credit->id
                ]);

                return response()->json(['result'=>'add']);

            }else{
                return response()->json(['result'=>'Montant']);
            }
                
        }else{
            return response()->json(['result'=>'code']);
        } 
        } else {
            return response()->json(['result'=>'credit']);
        }
    }

    public function payementCredit(request $request){
        credit::where('id',$request->id)->where('statut','wait')->update([
            'statut'=>'paye'
        ]);
        capital::create([
            'user_id'=>Auth::user()->id,
            'montant'=>$request->Montant,
            'type'=>"Pm"
        ]);
    }

    public static function interet($id){
        $credit=credit::where('id',$id)->first();
        $dateDebut=Carbon::parse($credit->created_at->format('Y-m-d'));
        $DateFin=carbon::parse($credit->DateFin);
        $diffInDays = $dateDebut->diffInDays($DateFin);
        $interet=$diffInDays*1.5;
        $somme=($credit->montant*$interet)/100;
       
        if ($credit->statut == 'wait' && $DateFin < Carbon::now()) {
            $retard=$DateFin->diffInDays(Carbon::now());
           $somme+=($credit->montant*$retard*2)/100;
        }elseif ($credit->statut == 'paye' && $DateFin < Carbon::parse($credit->updated_at->format('Y-m-d'))) {
            $retard=$DateFin->diffInDays(Carbon::parse($credit->updated_at->format('Y-m-d')));
            $somme+=($credit->montant*$retard*2)/100;
        }
        return array($somme,$interet,$diffInDays);
    }


}
