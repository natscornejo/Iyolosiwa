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
// Route::get('/url','Controller@Nombre de la funcion')->name('Nombre con la que se va a llamar en un futuro');


// Barra de navegacion
Route::get('/', 'HomeController@Index')->name('Inicio');
Route::get('/nosotros', 'HomeController@Nosotros')->name('Nosotros');
Route::get('/servicios', 'HomeController@Servicios')->name('Servicios');
Route::get('/voluntariado', 'HomeController@Voluntariado')->name('Voluntariado');
Route::get('/donaciones', 'HomeController@Donaciones')->name('Donaciones');
Route::get('/contacto', 'HomeController@Contacto')->name('Contacto');

// Route para los pots de las noticias
Route::resource('/noticias', 'PostController');

// Route para links del footer
Route::get('/socios', 'HomeController@Socios')->name('Socios');
Route::get('/terminos-y-condiciones', 'HomeController@Tycondiciones')->name('Tycondiciones');

Auth::routes();

// Route para el dashboard, cuando haces login
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('Dashboard');
