<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
            if ($request->has('search')) {
                $missions = Mission::where('title', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->orWhere('point', 'like', '%' . $request->search . '%')->paginate(10)->withQueryString();
            } else {
                $missions = Mission::paginate(10);
            }

            return view('Member.MissionsListAdminPage', [
                "active_3" => "text-yellow-500",
                "missions" => $missions
            ]);
        }
        else {
            $missions = Mission::where('isDone', 0)->get();

            return view('Member.MissionsListMemberPage', [
                "active_3" => "text-yellow-500",
                "missions" => $missions
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Member.MissionsAddPage', [
            "title" => "Misi hari ini adalah...",
            "description" => "Unggah foto partisippasi kalian ya!"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMissionRequest $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'point' => 'required|numeric',
        ], [
            'title.required' => 'Judul misi wajib diisi!',
            'description.required' => 'Deskripsi misi wajib diisi!',
            'point.required' => 'Point wajib diisi!',
            'point.numeric' => 'Point wajib berupa angka!'
        ]);

        $mission = Mission::create([
              'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'point' => $validatedData['point'],
        ]);

        return redirect()->route('mission.index')->with('addMission_success', 'Misi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mission = Mission::where("id", $id)->first();

        return view('Member.MissionDetailPage', [
            "mission" => $mission
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mission = Mission::where("id", $id)->first();

        return view('Member.MissionEditPage', [
            "mission" => $mission
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'point' => 'required|numeric',
        ], [
            'title.required' => 'Judul misi wajib diisi!',
            'description.required' => 'Deskripsi misi wajib diisi!',
            'point.required' => 'Point wajib diisi!',
            'point.numeric' => 'Point wajib berupa angka!'
        ]);

        $mission = Mission::where('id', $id)->first();

        $mission->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'point' =>$validatedData['point']
        ]);

        return redirect()->route('mission.index')->with('updateMission_success', 'Misi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mission = Mission::where('id', $id)->first();
        $mission->delete();
        return back()->with('deleteMission_success', 'Misi berhasil dihapus!');
    }
}
