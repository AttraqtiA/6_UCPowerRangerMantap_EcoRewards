<?php

namespace App\Http\Controllers;

use App\Models\RedeemTransaction;
use App\Http\Requests\StoreRedeemTransactionRequest;
use App\Http\Requests\UpdateRedeemTransactionRequest;

class RedeemTransactionController extends Controller
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
    public function store(StoreRedeemTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RedeemTransaction $redeemTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RedeemTransaction $redeemTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $redeemTransaction = RedeemTransaction::where('id', $id)->first();
        $redeemTransaction->update([
            'isApproved' => 1
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RedeemTransaction $redeemTransaction)
    {
        //
    }
}
