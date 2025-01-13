<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Metodo del Login
     */

    public function login(LoginRequest $request)
    {
        $token = auth()->attempt($request->validated());
        if($token) {
            return $this->responseWithToken($token, auth()->user());
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Credenciales incorrectas'
            ], 401);
        }
    }

    /*
    Metodo de regirstro
     */  
    public function register(RegistrationRequest $request)
    {
        $user = User::create($request->validated());
        if ($user) {
            $token = auth()->login($user);
            return $this->responseWithToken($token, $user);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Error al crear el usuario'
            ], 500);
        }
    }

    /*
    Rotornar el acceso al Token JWT
    */
    public function responseWithToken($token, $user)
    {
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'access_token' => $token,
            'type' => 'bearer'
        ]);
    }

    /*
    Metodo de logout
    */
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Sesión cerrada'
        ]);
    }
}
