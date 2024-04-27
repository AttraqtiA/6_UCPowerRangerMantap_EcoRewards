<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GarbageCart;
use App\Models\GarbageTransaction;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGarbageTransactionRequest;
use App\Http\Requests\UpdateGarbageTransactionRequest;
use App\Models\GarbageCartDetail;
use App\Models\GarbageTransactionDetail;

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
        $validatedData = $request->validate([
            "user_name" => "required",
            "email" => "required"
        ], [
            'user_name.required' => 'Nama pengunjung wajib diisi!',
            'email.required' => 'Email wajib diisi!'
        ]);
        $garbageCart = GarbageCart::all();
        $garbageCart_user = $garbageCart->user->where('user_name', $validatedData['user_name'])
                                ->where('email', $validatedData['email'])
                                ->first();
        $garbageCart = GarbageCart::where('user_id', Auth::user()->id)->first();
        $garbageCart_details = $garbageCart->garbageCartDetail;
        $customer = User::where('user_name', $validatedData['user_name'])
        ->where('email', $validatedData['email'])
        ->first();

        $total_point = ($garbageCart_details->sum('point'));
        $total_quantity = $garbageCart_details->sum('quantity');

        $garbageTransaction = GarbageTransaction::create([
            'user_id' => $customer->id,
            'total_quantity' => $total_quantity,
            'total_point' => $total_point,
            'date' => now(),
            'acceptedBy' => Auth::user()->user_name
        ]);

        foreach ($garbageCart_details as $garbageCart_detail) {
            GarbageTransactionDetail::create([
                'garbage_id' => $request->garbage_id,
                'garbageTransaction_id' => $garbageTransaction->id,
                'quantity' => $garbageCart_detail->quantity,
                'price' => $garbageCart_detail->price
            ]);
        }

        $garbageCart_user->delete();

        return redirect()->route('products')->with('coinExchange_success', 'Penukaran koin berhasil! Silakan <a href="#" class="inline-flex items-center font-bold text-yellow-500">Check Status Pesanan <svg class="ml-1 w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 5h12m0 0L9 1m4 4L9 9" /> </svg></a>');
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
