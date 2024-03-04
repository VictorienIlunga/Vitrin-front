<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class clientController extends Controller
{
    public function SearchClient(request $request){
        $users=client::where(function($query)use($request){
            $query->where('nom','like',"%$request->search%")
                    ->orwhere('prenom','like',"%$request->search%")
                    ->orwhere('telephone','like',"%$request->search%")
                    ->orwhere('matricule','like',"%$request->search%")
                    ->orwhere('sexe','like',"%$request->search%");
        })
        ->get();
    
        return view('client.partial.client', [
            'users' => $users,
        ])->render();
    } 

    public function saved(request $request){
        $verification=[
            'telephone' => ['required', 'max:8', 'unique:clients'],
        ];

        $validator = Validator::make($request->all(), $verification);
            if($validator->fails()){
                return response()->json(['response'=>'numero']);
            }else{
                $numberAccount=0;
                for ($s=10000; $s < 99999; $s++) { 
                    $num = rand(10000, 99999);
                    $check=client::where('Matricule',$num)->get();
                    if ($check->count()==0) {
                        $numberAccount+=$num;
                        break;
                    } 
                }
                try {
                    client::create([
                        'nom'=>$request->name,
                        'prenom'=>$request->prenom,
                        'sexe'=>$request->sexe,
                        'user_id'=>Auth::user()->id,
                        'Matricule'=>$numberAccount,
                        'telephone'=>$request->telephone,
                        'adresse'=>$request->Adresse,
                        'type'=>$request->type,
                        'statut'=>'normal'
                    ]);
            
                    return response()->json(['response'=>true]);
                
                } catch (\Throwable $th) {
                    return response()->json(['response'=>false]);
                } 
        }  
    }
    
    public function show(request $request){
        $client=client::with('credit')->where('id',$request->id)->first();
        return view('profileUser.profile', [
            'client' => $client,
        ])->render();
    } 
    public function SignalerClient(request $request){
        client::where('id',$request->id)->update([
            'statut'=>'Anormal'
        ]);
    }

}
