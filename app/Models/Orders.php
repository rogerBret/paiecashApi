<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function user(){}

    public function ticket(){}

    public function paiement(){}

    public static function activeOrder(){}
    
}
