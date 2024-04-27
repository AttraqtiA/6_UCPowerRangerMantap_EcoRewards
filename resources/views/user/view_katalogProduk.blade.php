@extends('layouts.frame_visitor')

@section('content_page')
<section class="bg-green-500 py-16">
    <div class="text-center">
        <h1 class="font-bold text-4xl text-white mb-4">List Produk Tersedia</h1>
        <h1 class="text-3xl text-white">Mari lestarikan lingkungan!</h1>
    </div>
    <section id="Projects"
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

        @foreach ($redeemProducts as $redeemProduct)
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <a href="{{ route('visitor.detailProduk', ['produk_id' => $redeemProduct->id]) }}">
                    <img src="{{ asset('storage/upload_RedeemProduct_images/' . $redeemProduct->image) }}" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Produk</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">{{ $redeemProduct->name }}</p>
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-black cursor-auto my-1">${{ $redeemProduct->price_point }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>
</section>

@endsection
