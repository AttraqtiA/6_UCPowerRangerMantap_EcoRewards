<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app">
      <!doctype html>
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>{{ config('app.name', 'Laravel') }}</title>

          <!-- Fonts -->
          <link rel="dns-prefetch" href="//fonts.bunny.net">
          <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

          <!-- Scripts -->
          <script src="https://cdn.tailwindcss.com"></script>
      </head>
      <body>
          <div id="app">
              <header class="bg-white shadow">
                  <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                      <div class="flex items-center">
                          
                          <img class="w-48 h-8 mr-8 transition duration-300 ease-in-out transform hover:scale-105" src="{{ asset('assets/logo.svg') }}" alt="Icon" />
                      </div>
                      <nav class="hidden md:flex items-center">
                          <a href="#" class="text-slate-600 text-lg font-semibold font-['Poppins'] mr-6 hover:text-green-500 transition duration-300 ease-in-out">Tentang KBS</a>
                          <a href="#" class="text-slate-600 text-lg font-semibold font-['Poppins'] mr-6 hover:text-green-500 transition duration-300 ease-in-out">Apa itu KBS Point?</a>
                          <a href="#" class="text-slate-600 text-lg font-semibold font-['Poppins'] mr-6 hover:text-green-500 transition duration-300 ease-in-out">Kontak</a>
                          <a href="#" class="text-slate-600 text-lg font-semibold font-['Poppins'] hover:text-green-500 transition duration-300 ease-in-out">Lokasi</a>
                      </nav>
                      <div class="hidden md:flex items-center">
                          <a href="#" class="text-black text-lg font-semibold font-['Poppins'] mr-4 hover:text-green-500 transition duration-300 ease-in-out">Masuk</a>
                          <a href="#" class="bg-green-500 text-white text-lg font-semibold font-['Poppins'] px-6 py-3 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out">Daftar</a>
                      </div>
                      <button class="md:hidden flex items-center px-3 py-2 border rounded text-slate-600 border-slate-600 hover:text-green-500 hover:border-green-500">
                          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                      </button>
                  </div>
              </header>

              <main>
                <section class="bg-white py-20">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap -mx-4 items-center">
                            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                                <img class="w-300 h-300" src="{{ asset('assets/Gajah.png') }}" alt="Image of an Elephant" />
                            </div>
                            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                                <h1 class="text-black text-6xl font-bold font-Poppins leading-tight mb-4">
                                    <span>Tukarkan </span>
                                    <span class="text-green-500">Sampahmu</span>
                                    <br />
                                    <span>Dengan </span>
                                    <span class="text-green-500">Poin</span>
                                </h1>
                                <p class="text-slate-600 text-xl font-medium font-Poppins mb-8">Berpartisipasilah dalam gerakan kami untuk melestarikan lingkungan sambil menikmati berbagai fasilitas menarik di Kebun Binatang Surabaya! Setiap kunjungan Anda kini membawa makna yang lebih dengan sistem EcoRewards kami.</p>
                                <a href="#" class="bg-green-500 text-white text-lg font-semibold font-Poppins px-8 py-3 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out">Daftar Sekarang</a>
                            </div>

                        </div>
                    </div>
                  </section>


                  <section class="bg-slate-50 py-20">
                    <div class="container mx-auto px-4">
                      <div class="flex flex-wrap items-center">
                        <div class="w-full md:w-1/2 mb-8 md:mb-0">
                          <div class="relative">
                            <img class="w-full max-w-sm mx-auto rounded-3xl" src="{{ asset('assets/Gambar1.svg') }}" alt="Gambar 1" />
                          </div>
                        </div>
                        <div class="w-full md:w-1/2">
                          <span class="text-green-500 text-2xl font-semibold font-['Poppins'] mb-2 inline-block transform -rotate-1">Tentang Kebun Binatang Surabaya</span>
                          <h2 class="text-black text-3xl md:text-5xl font-bold font-['Poppins'] leading-tight mb-4">Pusat Konservasi, Edukasi & Rekreasi</h2>
                          <p class="text-slate-600 text-lg md:text-xl font-medium font-['Poppins'] mb-8">
                            <span class="text-green-500">PD. Taman Satwa Kebun Binatang Surabaya</span>, terletak di Surabaya adalah salah satu kebun binatang yang populer di Indonesia dan terletak di Surabaya. Terdapat lebih dari 230 spesies satwa yang berbeda yang terdiri lebih dari 2179 ekor satwa, terdiri dari Mamalia, Aves, Reptilia, dan Pisces.
                          </p>
                          <a href="#" class="border-2 border-slate-600 text-black text-lg md:text-xl font-semibold font-['Poppins'] px-6 py-3 rounded-xl hover:bg-slate-600 hover:text-white transition duration-300 ease-in-out">Info lebih lanjut</a>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="bg-white py-16 md:py-20">
                    <div class="container mx-auto px-4">
                      <div class="text-center mb-12">
                        <span class="text-green-500 text-xl md:text-2xl font-semibold font-['Poppins'] mb-2 inline-block transform -rotate-1">Program Baru</span>
                        <h2 class="text-black text-3xl md:text-5xl font-bold font-['Poppins'] leading-tight">Terobosan Baru Untuk Pengelolaan Sampah</h2>
                      </div>
                      <div class="flex flex-wrap -mx-4 items-center">
                        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                          <p class="text-slate-600 text-lg md:text-xl font-medium font-['Poppins'] mb-8">
                            <span>Sebuah program inisiatif</span>
                            <span class="text-green-500"> ramah lingkungan</span>
                            <span> yang mengajak </span>
                            <span class="text-green-500">Anda</span>
                            <span> untuk menjadi pahlawan keberlanjutan.</span>
                          </p>
                          <div class="flex items-start mb-8">
                            <div class="bg-white rounded-full shadow p-4 mr-4">
                              <img class="w-12 h-12 md:w-14 md:h-14" src="{{ asset('assets/Icon1.svg') }}" alt="Icon 1" />
                            </div>
                            <div>
                              <h3 class="text-slate-600 text-lg md:text-xl font-bold font-['Poppins'] mb-2">Mudah & Cepat</h3>
                              <p class="text-slate-600 text-base md:text-lg font-normal font-['Poppins']">Proses mengubah sampah menjadi poin yang instan melalui titik-titik poin terdekat</p>
                            </div>
                          </div>
                          <div class="flex items-start">
                            <div class="bg-white rounded-full shadow p-4 mr-4">
                              <img class="w-12 h-12 md:w-14 md:h-14" src="{{ asset('assets/Icon2.svg') }}" alt="Icon 2" />
                            </div>
                            <div>
                              <h3 class="text-slate-600 text-lg md:text-xl font-bold font-['Poppins'] mb-2">Bukan Sampah Lagi</h3>
                              <p class="text-slate-600 text-base md:text-lg font-normal font-['Poppins']">Tukarkan sampah anda menjadi poin-poin yang dapat ditukar kembali menjadi barang</p>
                            </div>
                          </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                          <div class="relative">
                            <img class="w-300 h-300 mx-auto rounded-3xl" src="{{ asset('assets/Gambar2.svg') }}" alt="Image" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="bg-slate-50 py-20">
                      <div class="container mx-auto px-4">
                          <div class="text-center mb-12">
                              <h2 class="text-black text-6xl font-bold font-['Poppins'] leading-tight">
                                  <span>Langkah Mudah, </span>
                                  <span class="text-green-500">Berdampak</span>
                              </h2>
                              <p class="text-slate-600 text-xl font-medium font-['Barlow'] mt-4">Ubah sampah anda menjadi hadiah</p>
                          </div>
                          <div class="flex flex-wrap -mx-4">
                              <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                                  <div class="text-center">
                                      <div class="bg-white rounded-full shadow-lg inline-block p-6 mb-6">
                                          <img class="w-32 h-44" src="{{ asset('assets/Gajahs1.svg') }}" alt="Image 1" />
                                      </div>
                                      <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-4">Datang</h3>
                                      <p class="text-slate-600 text-xl font-medium font-['Barlow']">Datangi salah satu point<br/>penukaran sampah kami</p>
                                  </div>
                              </div>
                              <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                                  <div class="text-center">
                                      <div class="bg-white rounded-full shadow-lg inline-block p-6 mb-6">
                                          <img class="w-36 h-52" src="{{ asset('assets/Gajahs2.svg') }}" alt="Image 2" />
                                      </div>
                                      <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-4">Tukar</h3>
                                      <p class="text-slate-600 text-xl font-medium font-['Barlow']">Petugas KBS akan menimbang dan menentukan menurut kriteria poin</p>
                                  </div>
                              </div>
                              <div class="w-full md:w-1/3 px-4">
                                  <div class="text-center">
                                      <div class="bg-white rounded-full shadow-lg inline-block p-6 mb-6">
                                          <img class="w-36 h-48" src="{{ asset('assets/Gajahs3.svg') }}" alt="Image 3" />
                                      </div>
                                      <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-4">Klaim Poin</h3>
                                      <p class="text-slate-600 text-xl font-medium font-['Barlow']">Saldo poin akan masuk ke data dan dapat ditukarkan kapan-pun</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>

                  <section class="bg-cover bg-center py-32" style="background-image: url('{{ asset('assets/background.svg') }}');">
                      <div class="container mx-auto px-4">
                          <div class="text-center">
                              <h2 class="text-5xl font-bold font-['Poppins'] leading-tight mb-8">
                                  <span class="text-green-500">Kunjungi</span>
                                  <span class="text-white"> dan Kumpulkan </span>
                                  <span class="text-green-500">Poin</span>
                                  <span class="text-white">!</span>
                              </h2>
                              <a href="#" class="bg-green-500 text-white text-2xl font-semibold font-['Poppins'] px-12 py-4 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out inline-block">Daftar Sekarang</a>
                    </div>
                </div>
            </section>

            <footer class="bg-slate-50 py-20">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                            <img class="w-48 h-8 mb-4" src="https://via.placeholder.com/198x32" alt="Logo" />
                            <p class="text-slate-600 text-base font-medium font-['Barlow'] mb-4">Explore New Possibilities to meet and Even exceed your Expectations. Let's Meet in your garden for a free consultation and Explore the Pathway to your Vision and Dreams.</p>
                            <div class="flex items-center">
                                <a href="#" class="text-slate-600 hover:text-green-500 mr-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="text-slate-600 hover:text-green-500 mr-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="text-slate-600 hover:text-green-500 mr-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="text-slate-600 hover:text-green-500">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                            <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-6">Pages</h3>
                            <ul class="text-slate-600 text-xl font-semibold font-['Poppins']">
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Home</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Services</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">About Us</a></li>
                                <li><a href="#" class="hover:text-green-500">Blog</a></li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                            <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-6">Resources</h3>
                            <ul class="text-slate-600 text-xl font-semibold font-['Poppins']">
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Contact Us</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Member Stories</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Video</a></li>
                                <li><a href="#" class="hover:text-green-500">Free Trial</a></li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/4 px-4">
                            <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-6">Company</h3>
                            <ul class="text-slate-600 text-xl font-semibold font-['Poppins']">
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Partnerships</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Terms & Use</a></li>
                                <li class="mb-4"><a href="#" class="hover:text-green-500">Privacy Policy</a></li>
                                <li><a href="#" class="hover:text-green-500">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="border-slate-600 my-12 opacity-20">
                    <div class="flex flex-wrap items-center justify-between">
                        <p class="text-slate-600 text-base font-medium font-['Barlow'] md:order-1 order-2">
                            &copy; 2023. All Rights Reserved. Terms & Use. <span class="text-green-500 text-xl font-semibold font-['Poppins']">Solum</span>
                        </p>
                        <img class="w-20 h-20 md:order-2 order-1 mb-4 md:mb-0" src="https://via.placeholder.com/83x76" alt="Image">
                    </div>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
