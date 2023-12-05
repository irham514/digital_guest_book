<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

//PERTEMUAN 3
Route::get('/users', [UsersController::class, 'view_data']);
Route::get('/produk', [ProdukController::class, 'view_produk']);
Route::get('/create', [CreateController::class, 'view_create']);
Route::get('/update', [UpdateController::class, 'view_update']);
Route::get('/delete', [DeleteController::class, 'view_delete']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/products', functions(){
//     $products = App\Models\Product::all();
//     return view('products.index', ['products' => $products]);
// });

// Route::get('/', function () { 
//     return view('index');
// });

/*
PERTEMUAN 2
Route::get('/create', 'Create@halaman_create');
Route::get('/update', 'Update@halaman_update');
Route::get('/delete', 'Delete@halaman_delete');
*/

// Route::get('/app', [UsersController::class,'view_form_user']);

// Route::get('/about', 'About@halaman_about');

// Route::get('/contact', 'Contact@halaman_contact');


// Route::get('/about', function () {
//     return "page about";
// });

// Route::get('/contact', function () {
//     return "ini contact";
// });

// Route::get('/Kalkulator', 'MathCon@perkalian');