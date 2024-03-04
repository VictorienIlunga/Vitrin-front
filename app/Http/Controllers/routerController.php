<?php

namespace App\Http\Controllers;

use App\Models\capital;
use App\Models\client;
use App\Models\credit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class routerController extends Controller
{

    public function index(){
    $client=client::count();
    $credit=credit::count();
    $showcredit=credit::take(10)->where('statut','wait')->orderby('DateFIN')->get();
    $capitalTolal=capital::get();
    $InTotal=$capitalTolal->where('type','Cr')->sum('montant');
    $OutTotal=$capitalTolal->where('type','Pm')->sum('montant');
    $interet=$OutTotal-$InTotal;

    $In=$capitalTolal->where('type','In')->sum('montant');
    $Out=$capitalTolal->where('type','Out')->sum('montant');
    $Cr=$capitalTolal->where('type','Cr')->sum('montant');
    $Pm=$capitalTolal->where('type','Pm')->sum('montant');
    $capital=$In+$Pm-$Out-$Cr;
    
    return view('dashboard',[
        'client'=>$client,
        'credit'=>$credit,
        'interet'=>$interet,
        'capital'=>$capital,
        'showCredit'=>$showcredit
    ]);
    }


    public function onglet(request $request){
        if($request->type=='Dashboard'){
            $client=client::count();
            $credit=credit::count();
            $showcredit=credit::take(10)->where('statut','wait')->orderby('DateFIN')->get();
            $capitalTolal=capital::get();
            $InTotal=$capitalTolal->where('type','Cr')->sum('montant');
            $OutTotal=$capitalTolal->where('type','Pm')->sum('montant');
            $interet=$OutTotal-$InTotal;

            $In=$capitalTolal->where('type','In')->sum('montant');
            $Out=$capitalTolal->where('type','Out')->sum('montant');
            $Cr=$capitalTolal->where('type','Cr')->sum('montant');
            $Pm=$capitalTolal->where('type','Pm')->sum('montant');
            $capital=$In+$Pm-$Out-$Cr;

            return view('home.home',[
                'client'=>$client,
                'credit'=>$credit,
                'interet'=>$interet,
                'capital'=>$capital,
                'showCredit'=>$showcredit
            ])->render();

        }elseif ($request->type=='Client') {
            $user=client::paginate(20);
            return view('client.client', [
                'users' => $user,
            ])->render();
        }elseif ($request->type=='Capital') {
            $capital=capital::with('user')->orderbydesc('id')->get();
            $user=User::with('capital')->get();
            $In=$capital->where('type','In')->sum('montant');
            $Out=$capital->where('type','Out')->sum('montant');
            $Cr=$capital->where('type','Cr')->sum('montant');
            $Pm=$capital->where('type','Pm')->sum('montant');
            $montant=$In+$Pm-$Out-$Cr;
            return view('capital.capital',[
                'capital'=>$capital,
                'montant'=>$montant,
                'user'=>$user
            ])->render();

        }elseif ($request->type=='Profil') {
            
        return view('profile.edit', [
            'user' => $request->user(),
        ])->render();

        }
    }

    


}
