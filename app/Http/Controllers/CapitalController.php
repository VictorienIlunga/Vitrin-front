<?php

namespace App\Http\Controllers;

use App\Models\capital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CapitalController extends Controller
{
    public function OperationCapital(request $request){
        if(password_verify($request->password,Auth::user()->password)){
                capital::create([
                    'user_id'=>Auth::user()->id,
                    'montant'=>$request->Montant,
                    'type'=>$request->typeOperation
                ]);
            return response()->json(['result'=>'add']);
        }else{
            return response()->json(['result'=>'code']);
        }
    }

    public static function pourcent($capital){
        $capitalTolal=capital::get();
        $InTotal=$capitalTolal->where('type','In')->sum('montant');
        $OutTotal=$capitalTolal->where('type','Out')->sum('montant');
        $total=$InTotal-$OutTotal;
        $In=$capital->where('type','In')->sum('montant');
        $Out=$capital->where('type','Out')->sum('montant');
        $montant=$In-$Out;
        return ($montant*100)/$total;
    }
}
