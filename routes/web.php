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
Route::get('/', 'HomeController@Index')->name('Inicio');
Route::get('/nosotros', 'HomeController@Nosotros')->name('Nosotros');
Route::get('/servicios', 'HomeController@Servicios')->name('Servicios');
Route::get('/voluntariado', 'HomeController@Voluntariado')->name('Voluntariado');
Route::get('/donaciones', 'HomeController@Donaciones')->name('Donaciones');
Route::get('/contacto', 'HomeController@Contacto')->name('Contacto');

// Route para los pots de las noticias
Route::resource('/noticias', 'PostController');


//Ruta para nosotros
/*Route::get('/nosotros', function () {
    return view('nosotros');
});*/
Auth::routes();

// Route para el dashboard, cuando haces login
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('Dashboard');
