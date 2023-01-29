<?php
namespace App\Services\Interfaces;

interface ParcelServiceInterface
{
   public function create($pick_up_address, $drop_off_address, $sender);
}