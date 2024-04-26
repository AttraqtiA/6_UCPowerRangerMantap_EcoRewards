<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use App\Http\Requests\StoreGarbageRequest;
use App\Http\Requests\UpdateGarbageRequest;

class GarbageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGarbageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Garbage $garbage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Garbage $garbage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGarbageRequest $request, Garbage $garbage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Garbage $garbage)
    {
        //
    }
}
