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

Route::get('/', function(){
    echo "<a href='/contacto'> Contacto 1 </a>";
    echo "<a href='/contacto'> Contacto 2 </a>";
    echo "<a href='/contacto'> Contacto 3 </a>";
    echo "<a href='/contacto'> Contacto 4 </a>";
    echo "<a href='/contacto'> Contacto 5 </a>";
});
