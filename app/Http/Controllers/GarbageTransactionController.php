<?php

namespace App\Http\Controllers;

use App\Models\GarbageTransaction;
use App\Http\Requests\StoreGarbageTransactionRequest;
use App\Http\Requests\UpdateGarbageTransactionRequest;

class GarbageTransactionController extends Controller
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
    public function store(StoreGarbageTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GarbageTransaction $garbageTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GarbageTransaction $garbageTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGarbageTransactionRequest $request, GarbageTransaction $garbageTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GarbageTransaction $garbageTransaction)
    {
        //
    }
}
