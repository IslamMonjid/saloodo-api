<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\ParcelServiceInterface;
use Illuminate\Support\Facades\Auth;

class ParcelController extends Controller
{

    private $ParcelService;

    public function __construct(ParcelServiceInterface $ParcelService)
    {
        $this->ParcelService = $ParcelService;
        $this->middleware('auth:sender', ['only' => ['create', 'getParcelsStatus']]);
        $this->middleware('auth:biker', ['only' => ['getParcelsListForBiker', 'pick_up_parcel', 'getBikerParcels']]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'pick_up_address' => 'required|string',
            'drop_off_address' => 'required|string',
        ]);

        $pick_up_address = $request->pick_up_address;
        $drop_off_address = $request->drop_off_address;
        $sender = Auth::user()->id;
        $parcel = $this->ParcelService->create($pick_up_address, $drop_off_address, $sender);

        return response()->json([
            'status' => 'success',
            'parcel' => $parcel
        ], 201);
    }

    public function getParcelsStatus()
    {

        $sender = Auth::user()->id;
        $status = $this->ParcelService->getParcelsStatus($sender);
        return response()->json([
            'status' => 'success',
            'parcel-status' => $status
        ], 200);
    }

    public function getParcelsListForBiker()
    {
        $parcels = $this->ParcelService->getParcelsListForBiker();

        return response()->json([
            'status' => 'success',
            'parcel' => $parcels
        ], 200);
    }

    public function pick_up_parcel($id)
    {
        $biker = Auth::guard('biker')->user()->id;
        $status = $this->ParcelService->pick_up_parcel($id, $biker);

        if ($status) {
            return response()->json([
                'status' => 'success'
            ], 200);
        } else {
            return response()->json([
                'error' => 'Parcel already picked up'
            ], 400);
        }
    }

    public function getBikerParcels()
    {
        $biker = Auth::guard('biker')->user()->id;
        $parcels = $this->ParcelService->getBikerParcels($biker);

        return response()->json([
            'status' => 'success',
            'parcel' => $parcels
        ], 200);
    }
}
