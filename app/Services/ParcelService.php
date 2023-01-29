<?php

namespace App\Services;

use App\Services\Interfaces\ParcelServiceInterface;
use App\Repositories\Interfaces\ParcelRepositoryInterface;

class ParcelService implements ParcelServiceInterface
{
    private $parcelRepository;

    public function __construct(ParcelRepositoryInterface $parcelRepository)
    {
        $this->parcelRepository = $parcelRepository;
    }

    public function create($pick_up_address, $drop_off_address, $sender){
        return $this->parcelRepository->create($pick_up_address, $drop_off_address, $sender);
    }

    public function getParcelsStatus($sender){
        return $this->parcelRepository->getParcelsStatus($sender);
    }
}
