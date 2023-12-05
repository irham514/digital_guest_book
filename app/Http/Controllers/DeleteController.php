<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function view_delete(){
        return view('delete.index');
    }
}
