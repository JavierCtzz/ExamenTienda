<?php

namespace App\Customs\Services\CrearProducto;

use App\Models\CrearProducto;
use App\Models\User;

class CrearProductoService
{
    public function create($data)
    
    {
        $producto = auth()->user()->productos()->create($data);
        return $producto;
    }

    public function update(CrearProducto $producto, array $data)
    {
        #Autoriza si el usuario actualizara el producto
        if ($producto->user_id !== auth()->user()->id) 
        {
            throw new \Illuminate\Auth\Access\AuthorizationException(message:'No puedes actualizar este producto');
        }

        $producto->update($data);
        return $producto;
    }

    public function AutorizationCheck(CrearProducto $producto)
    {
        if ($producto->user_id !== auth()->user()->id) 
        {
            throw new \Illuminate\Auth\Access\AuthorizationException(message:'No puedes eliminar este producto');
        }
    }

    public function usuairosProducto(User $user)
    {
        return $user->productos()->latest()->paginate(12); 
    }

    public function obtenerProductos()
    {
        return CrearProducto::with('user:id,name')->latest()->paginate(12);
    }

    public function delete(CrearProducto $producto)
    {
        #Autoriza si el usuario eliminara el producto
        $this->AutorizationCheck($producto);

        return $producto->delete();
        
    }
}