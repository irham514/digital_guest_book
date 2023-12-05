<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function view_create(){

        return view('create.index');
    }
}
