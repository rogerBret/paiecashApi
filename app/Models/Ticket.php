<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $fillable = [];

    public function ticketCategory(){

    }
    public function programs()
    {
        # code...
    }

    public static function status(){
        #code...
    }

}
