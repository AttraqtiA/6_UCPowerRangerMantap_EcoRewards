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
                                <p class="font-medium text-lg">{{ $title }}</p>
                                <p>{{ $description }}</p>
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
                            <form action="{{ route('redeemProduct.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                        <div class="md:col-span-5">
                                            <label for="name">Nama Produk</label>
                                            <input type="text" name="name" id="name"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="description">Deskripsi</label>
                                            <input type="text" name="description"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="price_point">Poin </label>
                                            <input type="number" name="price"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="stok">Stok</label>
                                            <input type="number" name="stock"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="user_avatar">Gambar</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="image" id="image" type="file" name="image">
                                        </div>

                                        <div class="md:col-span-5 text-right">
                                            <label for="submit"></label>
                                            <button type="submit"
                                                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
