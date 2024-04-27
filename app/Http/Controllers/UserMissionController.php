<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMission;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserMissionRequest;
use App\Http\Requests\UpdateUserMissionRequest;

class UserMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $member = User::where('user_name', $request->search)->first();
            $userMissions = UserMission::where('user_id', 'like', '%' . $member->id . '%')->paginate(10)->withQueryString();
        } else {
            $userMissions = UserMission::paginate(10);
        }

        return view('Admin.UserMissionListPage', [
            "active_3" => "text-yellow-500",
            "userMissions" => $userMissions
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000', // ini untuk validasi file image
        ], [
            'image.required' => 'Foto bukti misi wajib diisi!',
            'image.image' => 'File bukti misi berupa gambar!',
            'image.mimes' => 'Hanya diperbolehkan dalam bentuk jpeg, png, jpg!',
            'image.max' => 'Maksimal 5 mb'
        ]);

        $userMission = UserMission::create([
            'imageUpload' => $validatedData['image']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMission $userMission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserMission $userMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $userMission = UserMission::where('id', $id)->first();

        $userMission->update([
            'isDone' => 1
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMission $userMission)
    {
        //
    }
}
