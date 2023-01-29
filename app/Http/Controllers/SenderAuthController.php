<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\SenderAuthServiceInterface;

class SenderAuthController extends Controller
{

    private $SenderAuthService;

    public function __construct(SenderAuthServiceInterface $SenderAuthService)
    {
        $this->SenderAuthService = $SenderAuthService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        return $this->SenderAuthService->login($credentials);
       
    }


    public function logout()
    {
        return $this->SenderAuthService->logout();
    }
}
