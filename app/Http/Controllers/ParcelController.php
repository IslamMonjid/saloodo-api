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
        $this->middleware('auth:sender', ['except' => []]);
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

    public function getParcelsStatus(){

        $sender = Auth::user()->id;
        $status = $this->ParcelService->getParcelsStatus($sender);
        return response()->json([
            'status' => 'success',
            'parcel-status' => $status
        ], 200);
    }
}
