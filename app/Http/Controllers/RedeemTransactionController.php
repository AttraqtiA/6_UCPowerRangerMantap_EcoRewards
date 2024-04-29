<?php

namespace App\Http\Controllers;

use App\Models\RedeemTransaction;
use Illuminate\Http\Request;
use App\Models\RedeemCart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRedeemTransactionRequest;
use App\Http\Requests\UpdateRedeemTransactionRequest;
use App\Models\RedeemTransactionDetail;

class RedeemTransactionController extends Controller
{

    public function beliProduk(Request $request) { // use user id as validation instead



        $redeemTransaction = RedeemTransaction::create([
            'user_id' => Auth::user()->id,
            'total_quantity' => $request->quantity,
            'total_point' => $request->quantity * $request->price_point,
            'date' => now()
        ]);

        return redirect()->route('user.view_katalogProduk')->with('coinExchange_success', 'Silahkan tunggu penerimaan admin!');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $redeemTransaction = RedeemTransaction::all();
        return view('Redeemer.RedeemTransactionPage', [
            "redeemTransactions" => $redeemTransaction
        ]);
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
