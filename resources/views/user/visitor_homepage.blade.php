@extends('layouts.frame_visitor')

@section('content_page')
    <section class="w-screen pt-16">
        <section class="rounded-xl h-64 w-full bg-no-repeat object-center bg-[url('/image/Background.png')]">
            <div class="px-4 max-w-screen-xl pl-24 pt-10">
                <h1 class="mb-2 text-3xl font-bold tracking-tight leading-none text-white">Halo Yobel!
                </h1>
                <p class="mb-8 text-xl font-semibold tracking-tight leading-none text-white">Ayo lakukan penukaran sampah
                    lagi
                </p>
            </div>
        </section>
        <section>
            <div class="flex justify-center gap-16 align-items-center mx-12 my-16">
                <a href="#"
                    class="flex items-center pl-4 h-24 w-64 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div>
                        <p class="font-normal mb-1 text-gray-700 dark:text-gray-400">Total Poin</p>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">200 Poin</h5>
                    </div>
                </a>

                <a href="#"
                    class="flex items-center pl-4 h-24 w-64 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div>
                        <p class="font-normal mb-1 text-gray-700 dark:text-gray-400">Total Sampah Tertukar</p>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">20 Sampah</h5>
                    </div>
                </a>


                <a href="#"
                    class="flex items-center pl-4 h-24 w-64 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div>
                        <p class="font-normal mb-1 text-gray-700 dark:text-gray-400">Tanggal Terakhir Menukar</p>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">20-April-2024
                        </h5>
                    </div>
                </a>
            </div>
            <section class="w-full bg-no-repeat bg-[url('/image/Group19.png')]">
                <div class="px-4 max-w-screen-xl text-center py-24 lg:py-36">
                    <h1 class="mb-8 text-2xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Lihat
                        <span class="text-green-500">Katalog Produk</span> yang Dapat <span
                            class="text-green-500">Ditukarkan</span>
                    </h1>
                    <a href="{{ route('visitor.katalogProduk') }}"
                        class="inline-flex justify-center items-center py-3 px-5 text-lg font-medium px-8 text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Daftar Produk
                    </a>
                </div>
            </section>

        </section>

    </section>
@endsection
