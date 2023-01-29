<?php
namespace App\Services\Interfaces;

interface SenderAuthServiceInterface
{
   public function login($credentials);
   public function logout();
}