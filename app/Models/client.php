<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','sexe','user_id','Matricule','telephone','adresse','type','statut'];

    public function credit(){
        return $this->hasMany(credit::class);
    }
}
