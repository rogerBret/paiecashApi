<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraderAccount extends Model
{
    use HasFactory;

    protected $table='trader_accounts';

    protected $filable=['account_id', 'trader_id'];

    //relation d'unicité entre un tradeur et son compte
    public function account()
    {
        return $this->hasOne(Account::class);
    }
}
