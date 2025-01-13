<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Producto
    public function productos()
    {
        return $this->belongsToMany(CrearProducto::class, 'pedido_producto', 'pedido_id', 'producto_id');
    }
}
