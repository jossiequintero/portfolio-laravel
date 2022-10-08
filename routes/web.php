<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/saludar/{nombre?}', function($nombre = 'Invitado'){
    return "Hola, $nombre";
})->name('saludar');

Route::get('/contacto', function(){
    return "Session Contacto";
})->name('contacto');
Route::get('/', function(){
    echo "<a href='" . route('contacto') . "'> Contacto 1 </a></br>";
    echo "<a href='" . route('contacto') . "'> Contacto 2 </a></br>";
    echo "<a href='" . route('contacto') . "'> Contacto 3 </a></br>";
    echo "<a href='" . route('contacto') . "'> Contacto 4 </a></br>";
    echo "<a href='" . route('contacto') . "'> Contacto 5 </a></br>";
});
