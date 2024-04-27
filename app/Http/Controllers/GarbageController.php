<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Garbage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGarbageRequest;
use App\Http\Requests\UpdateGarbageRequest;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class GarbageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $garbages = Garbage::where('name', 'like', '%' . $request->search . '%')->orWhere('size', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->orWhere('point', 'like', '%' . $request->search . '%')->paginate(10)->withQueryString();
        } else {
            $garbages = Garbage::paginate(10);
        }

        return view('GarbageBank.garbageList', [
            "active_3" => "text-yellow-500",
            "garbages" => $garbages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('GarbageBank.GarbageAddPage', [
            "title" => "Tambah List Sampah",
            "description" => "Harap isi semuanya."
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:8|unique:redeem_products',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000', // ini untuk validasi file image            'size' => 'required|numeric',
            'description' => 'required',
            'point' => 'required|numeric',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'name.max' => 'Maksimal :max karakter!',
            'name.unique' => 'Jenis sampah sudah ada!',
            'image.required' => 'Foto sampah wajib diisi!',
            'image.image' => 'File wajib berupa gambar!',
            'image.mimes' => 'Hanya diperbolehkan dalam bentuk jpeg, png, jpg!',
            'image.max' => 'Maksimal 5 mb',
            'size.required' => 'Size wajib diisi!',
            'size.numeric' => 'Size wajib berupa angka!',
            'description.required' => 'Deskripsi wajib diisi!',
            'point.required' => 'Point wajib diisi!',
            'point.numeric' => 'Point wajib berupa angka!'
        ]);

        // cek apakah ada inputan file berupa image, kalau ada file image dimasukkan ke folder image di public lalu pathnya masuk ke database
        if ($request->file('image')) {

            $validatedData['image'] = $request->file('image')->store('upload_Garbage_images', ['disk' => 'public']);
            // disk public ini untuk membuat folder upload_images di folder storage/app/public
            // function store ini akan memasukkan gambar ke dalam storage/public/nama_folder_image
            // dengan nama file yang sudah merupakan string random sehingga memungkinkan kita untuk
            // memasukkan file gambar dengan nama yang sama tapii beda gambar.

            $garbage = Garbage::create([
                'name' => $validatedData['name'],
                'size' => $validatedData['size'],
                'description' => $validatedData['description'],
                'point' => $validatedData['point'],
            ]);
        } else {
            $garbage = Garbage::create([
                'name' => $validatedData['name'],
                'size' => $validatedData['size'],
                'description' => $validatedData['description'],
                'point' => $validatedData['point'],
            ]);
        }

        return back()->with('addGarbage_success', 'Jenis sampah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $garbage = Garbage::find($id);
        return view('GarbageBank.GarbageDetailPage', [
            "TabTitle" => $garbage->name,
            "garbage" => $garbage,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $garbage = Garbage::where("id", $id)->first();

        return view('GarbageBank.GarbageEditPage', [
            "garbage" => $garbage,
            "description" => "Harap isi semuanya."
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:8|unique:redeem_products',
            'size' => 'required|numeric',
            'description' => 'required',
            'point' => 'required|numeric',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'name.max' => 'Maksimal :max karakter!',
            'name.unique' => 'Jenis sampah sudah ada!',
            'size.required' => 'Size wajib diisi!',
            'size.numeric' => 'Size wajib berupa angka!',
            'description.required' => 'Deskripsi wajib diisi!',
            'point.required' => 'Point wajib diisi!',
            'point.numeric' => 'Point wajib berupa angka!'
        ]);

        $garbage = Garbage::where('id', $id)->first();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('upload_Garbage_images', ['disk' => 'public']);

            $garbage->update([
                'name' => $validatedData['name'],
                'size' => $validatedData['size'],
                'description' => $validatedData['description'],
                'point' => $validatedData['point']
            ]);
        } else {
            $garbage->update([
                'name' => $validatedData['name'],
                'size' => $validatedData['size'],
                'description' => $validatedData['description'],
                'point' => $validatedData['point']
            ]);
        }

        return back()->with('updateGarbage_success', 'Jenis sampah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $garbage = Garbage::where('id', $id)->first();
        if ($garbage->image != null) {
            Storage::disk('public')->delete($garbage->image);
        }
        $garbage->delete();
        return back()->with('deleteGarbage_success', 'Jenis sampah berhasil dihapus!');
    }
}
