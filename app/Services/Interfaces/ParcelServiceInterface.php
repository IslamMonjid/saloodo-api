<?php
namespace App\Services\Interfaces;

interface ParcelServiceInterface
{
   public function create($pick_up_address, $drop_off_address, $sender);
   public function getParcelsStatus($sender);
   public function getParcelsListForBiker();
   public function pick_up_parcel($parcel, $biker);
   public function getBikerParcels($biker);
   public function drop_off_parcel($parcel, $biker);
}