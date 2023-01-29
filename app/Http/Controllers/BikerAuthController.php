<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Interfaces\BikerAuthServiceInterface;

class BikerAuthController extends Controller
{

    private $BikerAuthService;

    public function __construct(BikerAuthServiceInterface $BikerAuthService)
    {
        $this->BikerAuthService = $BikerAuthService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        return $this->BikerAuthService->login($credentials);
    }

    public function logout()
    {
        return $this->BikerAuthService->logout();
    }

}
