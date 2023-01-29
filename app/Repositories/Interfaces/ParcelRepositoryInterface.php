<?php
namespace App\Repositories\Interfaces;




interface ParcelRepositoryInterface
{
   public function create($pick_up_address, $drop_off_address, $sender);
   public function getParcelsStatus($sender);
}