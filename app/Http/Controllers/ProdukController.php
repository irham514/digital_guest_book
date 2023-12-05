<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function view_produk(){
        
        return view('products.index');
    }
}
