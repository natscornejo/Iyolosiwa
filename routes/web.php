<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
	HomeController,
	PostController,
	UserController,
	PermissionController
};

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

// Route para links del footer
Route::get('/socios', 'HomeController@Socios')->name('Socios');
Route::get('/terminos-y-condiciones', 'HomeController@Tycondiciones')->name('Tycondiciones');

Auth::routes();


// Route con auth
Route::group(['middleware' => 'auth'], function(){

	// DASHBOARD
	Route::prefix('dashboard')->group(function() {
		// Route para el dashboard, cuando haces login
		Route::get('/', [HomeController::class, 'dashboard'])->name('Dashboard');

		// NOTICIAS
		Route::resource('/noticias', 'PostController');//->name('Noticias');

		// MAPA DEL SITIO
		Route::get('/mapa-del-sitio', 'PostController@mapa')->name('mapa');

		Route::resource('/usuarios', 'UserController');//->name('Usuarios');;

		// USUARIOS
		Route::prefix('usuarios')->group(function() {

			Route::resource('/permisos', 'PermissionController');
		});
	});
});


// Route con auth
// Route::group(['middleware' => 'auth'], function(){
// 	Route::prefix('dashboard')->as('dashboard.')->group(function() {
// 		// Route para el dashboard, cuando haces login
// 		Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('Dashboard');
// 		// Route para los posts de las noticias
// 		Route::resource('/noticias', 'PostController');
// 		Route::get('/mapa-del-sitio', 'PostController@mapa')->name('mapa');
// 	});
// });



