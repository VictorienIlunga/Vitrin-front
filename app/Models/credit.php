<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    use HasFactory;

    protected $fillable=['client_id',"montant",'statut','gage','DateFin'];
    public function client(){
        return $this->belongsTo(client::class);
    }
    public function contrat(){
        return $this->hasone(contrat::class);
    }
}
