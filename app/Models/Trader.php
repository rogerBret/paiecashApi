<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    use HasFactory;

    protected $table= 'traders';

    protected $filable=['user_id', 'qrcode_id', 'trader_name', 'trader_address', 'trader_latitude', 'trader_longitude'];

    public function qrcode(){

        return $this->hasOne(Qrcode::class);
    }

    public function utilisateur()
    {

        return $this->hasOne(Utilisateur::class);
    }
}
