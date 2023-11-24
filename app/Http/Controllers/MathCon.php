<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathCon extends Controller
{
    public function perkalian(){
        $data ['name']= 'MyCalculator';

        
        return view ('pages math', $data);
    }
}
