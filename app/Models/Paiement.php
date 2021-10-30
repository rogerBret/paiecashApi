<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;


    protected $table='paiements';


    protected $filable=['paiement_time', 'distant_paiement_link', 'costomer_account_id', 'trader_account_id', 'qrcode_id'];

    //relation qui détermine les paiement effectuer par un utilisateur
    public function costomer_account()
    {
        return $this->belongsTo(CostomerAccount::class);
    }
    //relation qui détermine les paiement reçu par un trader
    public function trader_account()
    {
        return $this->belongsTo(TraderAccount::class);
    }

}
