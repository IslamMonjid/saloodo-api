<?php

namespace App\Services;

use App\Services\Interfaces\BikerAuthServiceInterface;
use Illuminate\Support\Facades\Auth;

class BikerAuthService implements BikerAuthServiceInterface
{

    public function login($credentials)
    {
        $token = Auth::guard('biker')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::guard('biker')->user();
        return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
    }

    public function logout(){
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }
}
