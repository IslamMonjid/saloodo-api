<?php

namespace App\Repositories\Eloquent;

use App\Models\Parcel;
use App\Repositories\Interfaces\ParcelRepositoryInterface;

class ParcelRepository implements ParcelRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**
     * PArcelRepository constructor.
     *
     * @param Parcel $model
     */
    public function __construct(Parcel $model)
    {
        $this->model = $model;
    }

    
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

    public function getParcelsStatus($sender){
        $status = Parcel::with('status')->where(['user_id' => $sender])->get();
        return $status;
    }

    public function getParcelsListForBiker(){
        $parcels = Parcel::whereNull('biker_id')->get();
        return $parcels;
    }

    public function pick_up_parcel($parcel, $biker){
        $parcel = Parcel::find($parcel);
        if(isset($parcel->biker_id)){
            $status = 0; 
        }else{
            $status = $parcel->update(['biker_id' => $biker, 'pick_up_at' => now(), 'status_id' => 3]);
        }
        
        return $status;
    }

    public function getBikerParcels($biker){
        $parcels = Parcel::where('biker_id', $biker)->get();
        return $parcels;
    }

    public function drop_off_parcel($parcel, $biker){
        $parcel = Parcel::where(['id' => $parcel, 'biker_id' => $biker])->first();
        $status = 0;
        if($parcel){
            $status = $parcel->update(['drop_off_at' => now(), 'status_id' => 4]);
        }
        return $status;
    }
}
