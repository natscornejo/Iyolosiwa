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

// Barra de navegacion
Route::get('/Inicio', 'HomeController@Index')->name('Inicio');
Route::get('/Nosotros', 'HomeController@Nosotros')->name('Nosotros');
Route::get('/Servicios', 'HomeController@Servicios')->name('Servicios');
Route::get('Voluntariado', 'HomeController@Voluntariado')->name('Voluntariado');
Route::get('/Donaciones', 'HomeController@Donaciones')->name('Donaciones');
Route::get('/Contacto', 'HomeController@Contacto')->name('Contacto');

// Route para los pots de las noticias
Route::resource('/noticias', 'PostController');


//Ruta para nosotros
/*Route::get('/nosotros', function () {
    return view('nosotros');
});*/
Auth::routes();

// Route para el dashboard
Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('Dashboard');
