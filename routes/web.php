<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function ($route) {
    /*Inicio*/
    $route->get('/', [InicioController::class, 'index']);
    /*Productos*/
    $route->get('/producto', [ProductoController::class, 'index']);
    $route->match(['get', 'post'], '/producto/{submenu}', [ProductoController::class, 'index']);
    $route->get('/producto/{submenu}/{id}', [ProductoController::class, 'index']);
    /*Categorias*/
    $route->get('/categorias', [CategoriasController::class, 'index']);
    $route->match(['get', 'post'], '/categorias/{submenu}', [CategoriasController::class, 'index']);
});
