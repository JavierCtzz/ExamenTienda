<?php

use App\Http\Controllers\Api\Productos\CrearProductosController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    //ruta para crear productos
    Route::post('/productos/crear_productos', [CrearProductosController::class, 'crear_productos']);
    //ruta para actualizar productos
    Route::post('/productos/{producto}', [CrearProductosController::class, 'actualizar_producto'])->missing(fn() => response()->json([
        'status' => 'failed',
        'message' => 'Producto no encontrado'
    ], 404));
    //ruta para eliminar productos
    Route::delete('/productos/{producto}', [CrearProductosController::class, 'eliminar_producto'])->missing(fn() => response()->json([
        'status' => 'failed',
        'message' => 'Producto no encontrado'
    ], 404));

    //ruta para obtener productos de un usuario
    Route::get('/productos/user/{user}', [CrearProductosController::class, 'obtener_usuarios_productos'])->missing(fn() => response()->json([
        'status' => 'failed',
        'message' => 'Usuario no encontrado'
    ], 404));
    
    //ruta para obtener todos los productos
    Route::get('/productos', [CrearProductosController::class, 'obtener_productos']);

    //ruta para obtener un producto especifico
    Route::get('/productos/{producto}', [CrearProductosController::class, 'mostrar_producto'])->missing(fn() => response()->json([
        'status' => 'failed',
        'message' => 'Producto no encontrado'
    ], 404));

});