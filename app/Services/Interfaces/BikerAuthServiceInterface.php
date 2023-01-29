<?php
namespace App\Services\Interfaces;

interface BikerAuthServiceInterface
{
   public function login($credentials);
   public function logout();
}