<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-48 h-8 mr-8 transition duration-300 ease-in-out transform hover:scale-105"
                src="{{ asset('assets/logo.svg') }}" alt="Icon" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @guest
                <div class="hidden md:flex items-center">
                    <a href="{{ route('login') }}"
                        class="text-black text-lg font-semibold mr-4 hover:text-green-500 transition duration-300 ease-in-out">Masuk</a>
                    <a href="{{ route('register') }}"
                        class="bg-green-500 text-white text-lg font-semibold px-6 py-3 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out">Daftar</a>
                </div>
            @else
                <div>
                    <button type="button" class="flex text-sm bg-green-200 rounded-full focus:ring focus:ring-green-500"
                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <img class="w-10 h-10 rounded-full object-cover" src="/images/account_circle.png" alt="user photo">
                    </button>
                </div>
                <div class="border z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                    id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        {{-- @if (Auth::user()->isOwner())
                            <p class="text-sm text-gray-900" role="none">
                                Selamat datang kembali, Owner!
                            </p>
                        @elseif (Auth::user()->isAdmin())
                            <p class="text-sm text-gray-900" role="none">
                                Selamat datang kembali, Admin!
                            </p>
                        @else --}}
                        <p class="text-sm text-gray-900" role="none">
                            Apa kabar!
                        </p>
                        {{-- @endif --}}
                        <br>
                        <p class="text-sm text-gray-900" role="none">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                            {{ Auth::user()->email }}
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-500" role="menuitem">
                                Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('garbageTransactions.index') }}"
                        class="block py-2 px-3 text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0"
                        aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('redeemTransaction.index') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0">Penukaran
                        Poin</a>
                </li>
                <li>
                    <a href="/buatMisi"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0">Buat
                        Misi</a>
                </li>
                <li>
                    <a href="/misi"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0">Cek
                        Misi</a>
                </li>
                <li>
                    <a href="{{ route('garbageList.index') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0">Sampah</a>
                </li>
                <li>
                    <a href="{{ route('redeemProduct.index') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



{{-- <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/">
                <img class="w-48 h-8 mr-8 transition duration-300 ease-in-out transform hover:scale-105"
                    src="{{ asset('assets/logo.svg') }}" alt="Icon" />
            </a>
        </div>
        <nav class="hidden md:flex items-center">
            <a href=""
                class="text-slate-600 text-md font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Dashboard</a>
            <a href=""
                class="text-slate-600 text-md font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Penukaran
                Poin</a>
            <a href=""
                class="text-slate-600 text-md font-semibold hover:text-green-500 transition duration-300 ease-in-out">Buat
                Misi</a>
            <a href=""
                class="mx-6 text-slate-600 text-md font-semibold hover:text-green-500 transition duration-300 ease-in-out">Cek
                Misi</a>
            <a href=""
                class="text-slate-600 text-md font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Sampah</a>
            <a href=""
                class="text-slate-600 text-md font-semibold hover:text-green-500 transition duration-300 ease-in-out">Produk</a>

        </nav>

        @guest
            <div class="hidden md:flex items-center">
                <a href="{{ route('login') }}"
                    class="text-black text-lg font-semibold mr-4 hover:text-green-500 transition duration-300 ease-in-out">Masuk</a>
                <a href="{{ route('register') }}"
                    class="bg-green-500 text-white text-lg font-semibold px-6 py-3 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out">Daftar</a>
            </div>
        @else
            <div class="hidden md:flex items-center">
                <img class="w-10 h-10 rounded-full object-cover" src="/images/account_circle.png" alt="user photo">
            </div>
        @endguest

        <button
            class="md:hidden flex items-center px-3 py-2 border rounded text-slate-600 border-slate-600 hover:text-green-500 hover:border-green-500">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
</header> --}}
