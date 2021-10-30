<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostomerAccount extends Model
{
    use HasFactory;

    protected $table='costomer_accounts';

    protected $filable=['account_id', 'utilisateur_id'];

//relation d'unicité entre un utilisateur et son compte
    public function account()
    {
        return $this->hasOne(Account::class);
    }


    //relation entre le compte utilisateur et les paiement

    public function paiement()
    {
        return $this->hasMany(Paiement::class);
    }
}
