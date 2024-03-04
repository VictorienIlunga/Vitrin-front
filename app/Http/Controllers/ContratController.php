<?php

namespace App\Http\Controllers;

use App\Models\contrat;
use Illuminate\Http\Request;
use PDF;

class ContratController extends Controller
{
    public function viewpdf(request $request){
        $contrat=contrat::with(['credit'=>function($data){
            return $data->with('client');
        }])->where('id',$request->id)->first();
    
        return view('pdf.contratpdf',[
            'credit'=>$contrat->credit
        ]);
    }

    public function generatePDF(request $request)
    {   
        $contrat=contrat::with(['credit'=>function($data){
            return $data->with('client');
        }])->where('id',$request->id)->first();

        $data = ['credit'=>$contrat->credit];
        $pdf = PDF::loadView('pdf.contratpdf', $data);
        return $pdf->download($contrat->nom.'.pdf');
    }
}
