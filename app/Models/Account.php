<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table='accounts';

    protected $filable=['number', 'registration_date', 'solde'];
    
    //relation entre un compte et utilisateur lamda
    public function costomer_account()
    {
        return $this->belongsTo(CostomerAccount::class);
    }
    //relation entre un compte et un trader
    public function trader_account()
    {
        return $this->belongsTo(TraderAccount::class);
    }
}
