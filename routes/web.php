<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/create', 'Create@halaman_create');
Route::get('/update', 'Update@halaman_update');
Route::get('/delete', 'Delete@halaman_delete');

Route::get('/about', 'About@halaman_about');

Route::get('/contact', 'Contact@halaman_contact');


// Route::get('/about', function () {
//     return "page about";
// });

// Route::get('/contact', function () {
//     return "ini contact";
// });

// Route::get('/Kalkulator', 'MathCon@perkalian');