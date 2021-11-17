<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table='utilisateurs';

    protected $filable=['first_name', 'last_name', 'phone', 'email', 'password', 'address_verified', 'identity_verified', 'status', 'picture', 'isNetwork_active', 'codeParrainage'];

    public function trader(){
        return $this->belongTo(Trader::class);
    }

    public function paiement(){

    }

    public function account(){

    }

     public function ticket(){

     }

      public function orders(){}
}
