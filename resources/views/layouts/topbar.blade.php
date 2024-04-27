<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/">
                <img class="w-48 h-8 mr-8 transition duration-300 ease-in-out transform hover:scale-105"
                    src="{{ asset('assets/logo.svg') }}" alt="Icon" />
            </a>
        </div>
        <nav class="hidden md:flex items-center">
            <a href="#tentangKBS"
                class="text-slate-600 text-lg font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Tentang
                KBS</a>
            <a href="#KBSPoint"
                class="text-slate-600 text-lg font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Apa
                itu KBS Point?</a>
            <a href="#Kontak"
                class="text-slate-600 text-lg font-semibold mr-6 hover:text-green-500 transition duration-300 ease-in-out">Kontak</a>
            <a href="#Lokasi"
                class="text-slate-600 text-lg font-semibold hover:text-green-500 transition duration-300 ease-in-out">Lokasi</a>
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
                <img class="w-10 h-10 rounded-full object-cover"
                    src="{{ asset('images/' . Auth::user()->profile_picture) }}" alt="user photo">
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
</header>
