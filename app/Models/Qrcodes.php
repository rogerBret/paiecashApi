<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcodes extends Model
{
    use HasFactory;

    protected $table ='qrcodes';

    protected $filable=['trader_id', 'reference_qrcode'];


    // public function trader(){
    //     return $this->belongTo(Trader::class);
    // }
}
