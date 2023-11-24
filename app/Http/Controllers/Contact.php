<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function halaman_contact(){
        return view('contact');
    }
}
