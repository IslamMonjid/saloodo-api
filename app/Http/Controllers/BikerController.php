<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBikerRequest;
use App\Http\Requests\UpdateBikerRequest;
use App\Models\Biker;

class BikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBikerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBikerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function show(Biker $biker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function edit(Biker $biker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBikerRequest  $request
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBikerRequest $request, Biker $biker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biker $biker)
    {
        //
    }
}
