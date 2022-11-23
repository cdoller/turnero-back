<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * RUTAS DE CONTACTO
 */
/*****POST*****/
//Ruta para registrar un contacto en la base de datos
Route::post('insertarContacto', [ContactoController::class, 'insertarContacto']);

/*****GET*****/
//Ruta para ver todos los contactos no nulos
Route::get('obtenerContactos', [ContactoController::class, 'obtenerContactos']);
//Ruta para obtener un contacto identificado con el id
Route::get('obtenerContacto/{id}', [ContactoController::class, 'obtenerContacto']);

/*****PUT*****/
//Ruta para actualizar un contacto identificado con el id
Route::put('actualizaContacto/{id}', [ContactoController::class, 'actualizaContacto']);

/*****DELETE*****/
//Ruta para hacer un borrado logico de una contacto identificado con el id
Route::delete('borrarContacto/{id}', [ContactoController::class, 'borrarContacto']);