<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(){

        return [
            'success' => true,
            'message' => 'Bien venue le monde',
            'data' => [
                'service' => 'API paiement code générator',
                'version' => '1.0',
                'language' => 'fr',
                'support' => 'contact@lazydevops.dev'
            ]
         ];
    }

    
}
