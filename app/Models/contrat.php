<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrat extends Model
{
    use HasFactory;
    protected $fillable=['credit_id','nom'];

    public function credit(){
        return $this->hasone(credit::class,'id','credit_id');
    }
}
