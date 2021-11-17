<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;

    public $fillable = [];

    public static function getAllStandard(){

    }
    public static function getAllPremium(){

    }
    public static function getAllVip(){

    }
    public  function ticket(Ticket $var = null)
    {
        # code...
    }
    public function programs(){}

}
