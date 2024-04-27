<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RedeemProduct;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRedeemProductRequest;
use App\Http\Requests\UpdateRedeemProductRequest;

class RedeemProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $redeemProducts = RedeemProduct::where('name', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->orWhere('price', 'like', '%' . $request->search . '%')->orWhere('stock', 'like', '%' . $request->search . '%')->paginate(10)->withQueryString();
        } else {
            $redeemProducts = RedeemProduct::paginate(10);
        }

        return view('Redeemer.RedeemProductListPage', [
            "active_3" => "text-yellow-500",
            "redeemProducts" => $redeemProducts
        ]);
    }

    public function index_2(Request $request)
    {
        $redeemProducts = RedeemProduct::paginate(6);
         return view('user.view_katalogProduk', [
            "redeemProducts" => $redeemProducts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRedeemProductRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:8|unique:redeem_products',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000', // ini untuk validasi file image
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'name.max' => 'Maksimal :max karakter!',
            'name.unique' => 'Nama produk sudah ada!',
            'image.required' => 'Foto produk wajib diisi!',
            'image.image' => 'File wajib berupa gambar!',
            'image.mimes' => 'Hanya diperbolehkan dalam bentuk jpeg, png, jpg!',
            'image.max' => 'Maksimal 5 mb',
            'description.required' => 'Deskripsi wajib diisi!',
            'price.required' => 'Point wajib diisi!',
            'price.numeric' => 'Point wajib berupa angka!',
            'stock.required' => 'Stock wajib diisi!',
            'stock.numeric' => 'Stock wajib berupa angka!',
        ]);

        // cek apakah ada inputan file berupa image, kalau ada file image dimasukkan ke folder image di public lalu pathnya masuk ke database

        $validatedData['image'] = $request->file('image')->store('upload_RedeemProduct_images', ['disk' => 'public']);
        // disk public ini untuk membuat folder upload_images di folder storage/app/public
        // function store ini akan memasukkan gambar ke dalam storage/public/nama_folder_image
        // dengan nama file yang sudah merupakan string random sehingga memungkinkan kita untuk
        // memasukkan file gambar dengan nama yang sama tapii beda gambar.

        RedeemProduct::create([
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'description' => $validatedData['description'],
            'price_point' => $validatedData['price'],
            'stock' => $validatedData['stock'],
        ]);

        return redirect()->route('redeemProduct.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $redeemProduct = RedeemProduct::where('id', $id)->first();
        return view('Redeemer.RedeemProductDetailPage', [
            "TabTitle" => $redeemProduct->name,
            "redeemProduct" => $redeemProduct,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show_2($id)
    {
        $redeemProduct = RedeemProduct::where('id', $id)->first();
        return view('user.view_produkDetail', [
            "TabTitle" => $redeemProduct->name,
            "redeemProduct" => $redeemProduct,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $redeemProduct = RedeemProduct::where("id", $id)->first();

        return view('Redeemer.RedeemProductEditPage', [
            "redeemProduct" => $redeemProduct,
            "description" => "Harap isi semuanya."
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:8|unique:redeem_products',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000', // ini untuk validasi file image
            'description' => 'required',
            'price_point' => 'required|numeric',
            'stock' => 'required|numeric',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'name.max' => 'Maksimal :max karakter!',
            'name.unique' => 'Nama produk sudah ada!',
            'image.required' => 'Foto produk wajib diisi!',
            'image.image' => 'File wajib berupa gambar!',
            'image.mimes' => 'Hanya diperbolehkan dalam bentuk jpeg, png, jpg!',
            'image.max' => 'Maksimal 5 mb',
            'description.required' => 'Deskripsi wajib diisi!',
            'price_point.required' => 'Point wajib diisi!',
            'price_point.numeric' => 'Point wajib berupa angka!',
            'stock.required' => 'Stock wajib diisi!',
            'stock.numeric' => 'Stock wajib berupa angka!',
        ]);

        $redeemProduct = RedeemProduct::where('id', $id)->first();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('upload_RedeemProduct_images', ['disk' => 'public']);

            $redeemProduct->update([
                'name' => $validatedData['name'],
                'image' => $validatedData['image'], // ini untuk validasi file image
                'description' => $validatedData['description'],
                'price_point' => $validatedData['price_point'],
                'stock' => $validatedData['stock'],
            ]);
        } else {
            $redeemProduct->update([
                'name' => $validatedData['name'],
                'image' => $validatedData['image'], // ini untuk validasi file image
                'description' => $validatedData['description'],
                'price_point' => $validatedData['price_point'],
                'stock' => $validatedData['stock'],
            ]);
        }

        return back()->with('updateRedeemProduct_success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $redeemProduct = RedeemProduct::where('id', $id)->first();
        if ($redeemProduct->image != null) {
            Storage::disk('public')->delete($redeemProduct->image);
        }
        $redeemProduct->delete();
        return back()->with('deleteRedeemProduct_success', 'Produk berhasil dihapus!');
    }
}
