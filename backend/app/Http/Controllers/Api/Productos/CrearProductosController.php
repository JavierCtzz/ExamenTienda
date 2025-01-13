<?php

namespace App\Http\Controllers\Api\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Mix;
use App\Http\Requests\Producto\CrearProductoRequest;
use Illuminate\Http\Request;
use App\Customs\Services\CrearProducto\CrearProductoService;
use App\Models\CrearProducto;
use App\Models\User;

class CrearProductosController extends Controller
{
    public function __construct(private CrearProductoService $post)
    {
        
    }
    
    public function crear_productos(CrearProductoRequest $request)
    {
        try {

            $validatedData = $request->validated();
            $producto = $this->post->create($validatedData);
            return response()->json([
                'status' => 'success',
                'message' => 'Producto creado con éxito',
                'data' => $producto
            ], 201);
            
        } catch (\Throwable $th) {
            
            return response()->json([
                'status' => 'failed',
                'message' => 'Error al crear el producto',
                'data' => $th->getMessage()
            ], 500);

        }
    }

    public function actualizar_producto(CrearProductoRequest $request, CrearProducto $producto)
    {
        try {

            $validatedData = $request->validated();
            $producto = $this->post->update($producto, $validatedData);
            return response()->json([
                'status' => 'success',
                'message' => 'Producto actualizado con éxito',
                'data' => $producto
            ], 200);
            
        } catch (\Throwable $th) {
            
            return response()->json([
                'status' => 'failed',
                'message' => 'Error al actualizar el producto',
                'data' => $th->getMessage()
            ], 500);

        }
    }

    public function excepcionalError($th)
    {
        return response()->json([
            'status' => 'failed',
            'message' => 'Error, algo no salio bien al eliminar un producto',
            'data' => $th->getMessage()
        ], 500);
    }

    public function obtener_usuarios_productos(User $user)
    {
        try {
            $productos = $this->post->usuairosProducto($user);
            if ($productos->isEmpty())
            {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'No se encontraron productos de este usuario',
                    'data' => 'No se encontraron productos'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Productos encontrados con éxito',
                'data' => $productos
            ], 200);
        } catch (\Throwable $th) {
            return $this->excepcionalError("Ha ocurrido un error mientras buscabamos los productos del usuario", $th);
        }
    }

    public function obtener_productos() {
        try {
            $productos = $this->post->obtenerProductos();
            if ($productos->isEmpty())
            {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'No se encontraron productos',
                    'data' => 'No se encontraron productos'
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Productos encontrados con éxito',
                'data' => $productos
            ], 200);
        } catch (\Throwable $th) {
            return $this->excepcionalError("Ha ocurrido un error mientras buscabamos los productos", $th);
        }
        
    }

    public function mostrar_producto (CrearProducto $producto)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Producto encontrado con éxito',
            'data' => $producto
        ], 200);
    }

    public function eliminar_producto(CrearProducto $producto)
    {
        try {

            $eliminarProducto = $this->post->delete($producto);
            
            if (!$eliminarProducto) 
            {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Error al eliminar el producto',
                    'data' => 'No se pudo eliminar el producto'
                ], 500);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Producto eliminado con éxito',
                'data' => $producto
            ], 200);
        
        } catch (\Throwable $th) {
            
            return $this->excepcionalError($th);

        }
    }
}
