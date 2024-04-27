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

    public function beliProduk(Request $request) {
        $redeemCart = RedeemCart::all();
        $garbageCart_user = $redeemCart->user->where('user_name', $validatedData['user_name'])
            ->where('email', $validatedData['email'])
            ->first();
        $customer = User::where('user_name', $validatedData['user_name'])
            ->where('email', $validatedData['email'])
            ->first();

        if (!$customer) {
            return back()->with('nameEmail_error', 'Mohon maaf, nama dan email pengunjung tidak ditemukan!');
        } else {
            if (!$garbageCart_user) {
                $garbageCart_new = GarbageCart::create([
                    'user_id' => $customer->id
                ]);
                GarbageCartDetail::create([
                    'garbageCart_id' => $garbageCart_new,
                    'garbage_id' => $request->garbage_id,
                    'quantity' => $validatedData['quantity'],
                    'point' => $validatedData['point']
                ]);
            } else {
                $garbageCart_detail = $garbageCart_user->garbageCartDetail;
                $garbageCart_detail->update([
                    'garbageCart_id' => $garbageCart_user->id,
                    'garbage_id' => $request->garbage_id,
                    'quantity' => $validatedData['quantity'],
                    'point' => $validatedData['point']
                ]);
            }
            return redirect()->route('')->with('addGarbage_success', 'Sampah berhasil ditambahkan!');
        }

        $customer = User::where('id', Auth::user()->id)->first();
        $redeemCart = RedeemCart::all();
        $redeemCart_user = $redeemCart->user->where('user_name', $customer->user_name)
                                ->where('email', $customer->email)
                                ->first();
        $redeemCart = RedeemCart::where('user_id', Auth::user()->id)->first()->get();
        $redeemCart_details = $redeemCart->redeemCartDetail;

        $total_point = ($redeemCart_details->sum('point'));
        $total_quantity = $redeemCart_details->sum('quantity');

        $redeemTransaction = RedeemTransaction::create([
            'user_id' => $customer->id,
            'total_quantity' => $total_quantity,
            'total_point' => $total_point,
            'date' => now()
        ]);

        foreach ($redeemCart_details as $redeemCart_detail) {
            RedeemTransactionDetail::create([
                'redeemProduct_id' => $request->product_id,
                'redeemTransaction_id' => $redeemTransaction->id,
                'quantity' => $redeemCart_detail->quantity,
                'price' => $redeemCart_detail->price
            ]);
        }

        $redeemCart_user->delete();

        return redirect()->route('user.view_katalogProduk')->with('coinExchange_success', 'Silahkan tunggu penerimaan admin!');
    }


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
