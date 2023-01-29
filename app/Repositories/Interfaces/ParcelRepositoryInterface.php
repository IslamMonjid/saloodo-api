<?php
namespace App\Repositories\Interfaces;




interface ParcelRepositoryInterface
{
   public function create($pick_up_address, $drop_off_address, $sender);
   public function getParcelsStatus($sender);
   public function getParcelsListForBiker();
   public function pick_up_parcel($parcel, $biker);
   public function getBikerParcels($biker);
}