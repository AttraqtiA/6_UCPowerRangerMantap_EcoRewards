@extends('layouts.admin.frame_admin')

@section('content_page')
    <!-- Start block -->
    <section style="background-color:#047857;" class="p-2 sm:p-4 antialiased h-full">
        <!-- component -->
        <div class="min-h-screen p-6 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Edit Produk : </p>
                                <p class="font-medium text-lg">{{ $redeemProduct->name }} </p>
                                <p>Harap isi semuanya.</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <form action="{{ route('redeemProduct.update', $redeemProduct) }}" method="PATCH"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="md:col-span-5">
                                            <label for="full_name">Nama Produk Baru</label>
                                            <input type="text" name="name" id="name"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="{{ $redeemProduct->name }}" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="full_name">Deskripsi Baru</label>
                                            <input type="text" name="description"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="{{ $redeemProduct->description }}" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="full_name">Poin Baru</label>
                                            <input type="number" name="price_point"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="{{ $redeemProduct->price_point }}" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="full_name">Stok Baru</label>
                                            <input type="number" name="stock"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="{{ $redeemProduct->stock }}" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="user_avatar">Gambar Baru</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="user_avatar_help" id="image" type="file">
                                        </div>
                                            <input type="hidden" name="oldimage" id="oldimage" value="{{ $redeemProduct->image }}">
                                        <div class="md:col-span-5 text-right">
                                            <br>
                                            <button type="submit"
                                                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
