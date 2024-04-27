<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GarbageCart;
use Illuminate\Http\Request;
use App\Models\GarbageCartDetail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGarbageCartRequest;
use App\Http\Requests\UpdateGarbageCartRequest;

class GarbageCartController extends Controller
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
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            "user_name" => "required",
            "email" => "required",
            "quantity" => "required|numeric",
            "point" => "required|numeric"
        ], [
            'user_name.required' => 'Nama pengunjung wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'quantity.required' => 'Jumlah sampah wajib diisi!',
            'quantity.numeric' => 'Jumlah sampah wajib berupa angka!',
            'poin.required' => 'Poin wajib diisi!',
            'poin.numeric' => 'Poin wajib berupa angka!'
        ]);
        $garbageCart = GarbageCart::all();
        $garbageCart_user = $garbageCart->user->where('user_name', $validatedData['user_name'])
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
    }

    /**
     * Display the specified resource.
     */
    public function show(GarbageCart $garbageCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GarbageCart $garbageCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGarbageCartRequest $request, GarbageCart $garbageCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GarbageCart $garbageCart)
    {
        //
    }
}
