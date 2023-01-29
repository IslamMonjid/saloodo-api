<?php

namespace App\Services;

use App\Services\Interfaces\SenderAuthServiceInterface;
use Illuminate\Support\Facades\Auth;

class SenderAuthService implements SenderAuthServiceInterface
{

    public function login($credentials)
    {
        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
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
        Auth::guard('biker')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }
}
