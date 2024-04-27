@extends('layouts.admin.frame_admin')

@section('content_page')
    <!-- Start block -->
    <section style="background-color:#047857;" class="p-2 sm:p-4 antialiased h-full">
        <div class="mx-auto max-w-screen-2xl py-12 sm:ml-56">
            <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="flex-1 flex items-center space-x-2">
                        <h5>
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                            <span class="ml-4 text-gray-500 ml-4">Semua Data:</span>
                            <span class="text-gray-500">2</span>
                        </h5>
                    </div>
                    <div class="text-lg font-bold text-gray-800">
                        Daftar Penukaran/Pembelian Produk
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t">
                    <div class="w-full md:w-1/3">
                        <form class="flex items-center" method="GET">

                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                    </svg>
                                </div>
                                <input type="search" name="search" id="simple-search" placeholder="Cari order"
                                    required=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2">
                            </div>

                            <button type="submit" class="bg-yellow-500 ml-2 p-2 rounded-lg text-sm">
                                <p class="font-semibold text-white px-2">Search</p>
                            </button>

                        </form>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" id="createProductButton" data-modal-toggle="createProductModal"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-center text-gray-500">
                        <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">No.</th>
                                <th scope="col" class="p-4">Tanggal</th>
                                <th scope="col" class="p-4">Customer</th>
                                <th scope="col" class="p-4">Email Customer</th>
                                <th scope="col" class="p-4">Produk</th>
                                <th scope="col" class="p-4">Total Kuantitas</th>
                                <th scope="col" class="p-4">Total poin</th>
                                <th scope="col" class="p-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-100">
                                <td class="p-4 w-4">
                                    {{ 1 }}
                                </td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    15 April 2024</td>
                                <td scope="row" class="mr-4 px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    Louis
                                </td>

                                <td scope="row" class="mr-4 px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    louis@gmail.com
                                </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    Kaleng Jinjing </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    15 </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    150 </td>

                                <td class="px-4 py-3 font-medium text-green-700 whitespace-nowrap">
                                    <button type="button"
                                        class="text-red-700  border border-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500">Belum
                                        dikonfirmasi</button>
                                </td>


                            </tr>

                            <tr class="border-b hover:bg-gray-100">
                                <td class="p-4 w-4">
                                    {{ 2 }}
                                </td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    17 April 2024</td>
                                <td scope="row" class="mr-4 px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    Samuel
                                </td>

                                <td scope="row" class="mr-4 px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    samuel@gmail.com
                                </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    Sepatu Jinjing </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    20 </td>

                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                    200 </td>

                                <td class="px-4 py-3 font-medium text-green-700 whitespace-nowrap">
                                    <button type="button"
                                        class="text-green-700  border border-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500">Sudah
                                        dikonfirmasi</button>
                                </td>


                            </tr>

                            <!-- drawer component -->

                            {{-- @include('admin.order_preview') --}}

                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col md:flex-row justify-end items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">

                    {{-- {{ $orders->links('vendor.pagination.tailwind') }} --}}

                </nav>
            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
