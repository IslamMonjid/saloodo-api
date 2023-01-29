<?php

namespace App\Repositories\Eloquent;

use App\Models\Parcel;
use App\Repositories\Interfaces\ParcelRepositoryInterface;
use Illuminate\Support\Collection;

class ParcelRepository implements ParcelRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**
     * CustomerRepository constructor.
     *
     * @param Customer $model
     */
    public function __construct(Parcel $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function create($pick_up_address, $drop_off_address, $sender)
    {
        $parcel = Parcel::create(
            [
                'pick_up_address' => $pick_up_address,
                'drop_off_address' => $drop_off_address,
                'user_id' => $sender
            ]
        );

        return $parcel;
    }
}
