<?php

use App\Http\Controllers\Api\Pedidos\PedidosController;
use Illuminate\Support\Facades\Route;

Route::apiResource('pedidos', PedidosController::class);
