@extends('layouts.app')

@section('content')
    <main>
        <section id="home" class="bg-white py-20">
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
                        <p class="text-slate-600 text-xl font-medium font-Poppins mb-8">Berpartisipasilah dalam gerakan kami
                            untuk melestarikan lingkungan sambil menikmati berbagai fasilitas menarik di Kebun Binatang
                            Surabaya! Setiap kunjungan Anda kini membawa makna yang lebih dengan sistem EcoRewards kami.</p>
                        <a href="#"
                            class="bg-green-500 text-white text-lg font-semibold font-Poppins px-8 py-3 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out">Daftar
                            Sekarang</a>
                    </div>

                </div>
            </div>
        </section>


        <section id="tentangKBS" class="bg-slate-50 py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0">
                        <div class="relative">
                            <img class="w-full max-w-sm mx-auto rounded-3xl" src="{{ asset('assets/Gambar1.svg') }}"
                                alt="Gambar 1" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 md:pr-16">
                        <span
                            class="text-green-500 text-2xl font-semibold font-['Poppins'] mb-2 inline-block transform -rotate-1">Tentang
                            Kebun Binatang Surabaya</span>
                        <h2 class="text-black text-3xl md:text-5xl font-bold font-['Poppins'] leading-tight mb-4">Pusat
                            Konservasi, Edukasi & Rekreasi</h2>
                        <p class="text-slate-600 text-lg md:text-xl font-medium font-['Poppins'] mb-8">
                            <span class="text-green-500">PD. Taman Satwa Kebun Binatang Surabaya</span>, terletak di
                            Surabaya adalah salah satu kebun binatang yang populer di Indonesia dan terletak di Surabaya.
                            Terdapat lebih dari 230 spesies satwa yang berbeda yang terdiri lebih dari 2179 ekor satwa,
                            terdiri dari Mamalia, Aves, Reptilia, dan Pisces.
                        </p>
                        <a href="https://www.surabayazoo.co.id/" target="_blank"
                            class="border-2 border-slate-600 text-black text-lg md:text-xl font-semibold font-['Poppins'] px-6 py-3 rounded-xl hover:bg-slate-600 hover:text-white transition duration-300 ease-in-out">Info
                            lebih lanjut</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="KBSPoint" class="bg-white py-16 md:py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <span
                        class="text-green-500 text-xl md:text-2xl font-semibold font-['Poppins'] mb-2 inline-block transform -rotate-1">Program
                        Baru</span>
                    <h2 class="text-black text-3xl md:text-5xl font-bold font-['Poppins'] leading-tight">Terobosan Baru
                        Untuk Pengelolaan Sampah</h2>
                </div>
                <div class="flex flex-wrap -mx-4 items-center md:ml-16 lg:ml-24">
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
                                <img class="w-12 h-12 md:w-14 md:h-14" src="{{ asset('assets/Icon1.svg') }}"
                                    alt="Icon 1" />
                            </div>
                            <div>
                                <h3 class="text-slate-600 text-lg md:text-xl font-bold font-['Poppins'] mb-2">Mudah & Cepat
                                </h3>
                                <p class="text-slate-600 text-base md:text-lg font-normal font-['Poppins']">Proses mengubah
                                    sampah menjadi poin yang instan melalui titik-titik poin terdekat</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-white rounded-full shadow p-4 mr-4">
                                <img class="w-12 h-12 md:w-14 md:h-14" src="{{ asset('assets/Icon2.svg') }}"
                                    alt="Icon 2" />
                            </div>
                            <div>
                                <h3 class="text-slate-600 text-lg md:text-xl font-bold font-['Poppins'] mb-2">Bukan Sampah
                                    Lagi</h3>
                                <p class="text-slate-600 text-base md:text-lg font-normal font-['Poppins']">Tukarkan sampah
                                    anda menjadi poin-poin yang dapat ditukar kembali menjadi barang</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-4">
                        <div class="relative">
                            <img class="w-300 h-300 mx-auto rounded-3xl" src="{{ asset('assets/Gambar2.svg') }}"
                                alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Kontak" class="bg-slate-50 py-20">
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
                            <p class="text-slate-600 text-xl font-medium font-['Barlow']">Datangi salah satu
                                point<br />penukaran sampah kami</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                        <div class="text-center">
                            <div class="bg-white rounded-full shadow-lg inline-block p-6 mb-6">
                                <img class="w-36 h-52" src="{{ asset('assets/Gajahs2.svg') }}" alt="Image 2" />
                            </div>
                            <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-4">Tukar</h3>
                            <p class="text-slate-600 text-xl font-medium font-['Barlow']">Petugas KBS akan menimbang dan
                                menentukan menurut kriteria poin</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="text-center">
                            <div class="bg-white rounded-full shadow-lg inline-block p-6 mb-6">
                                <img class="w-36 h-48" src="{{ asset('assets/Gajahs3.svg') }}" alt="Image 3" />
                            </div>
                            <h3 class="text-black text-3xl font-semibold font-['Poppins'] mb-4">Klaim Poin</h3>
                            <p class="text-slate-600 text-xl font-medium font-['Barlow']">Saldo poin akan masuk ke data dan
                                dapat ditukarkan kapan-pun</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Lokasi" class="bg-cover bg-center py-32" style="background-image: url('{{ asset('assets/background.svg') }}');">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <h2 class="text-5xl font-bold font-['Poppins'] leading-tight mb-8">
                        <span class="text-green-500">Kunjungi</span>
                        <span class="text-white"> dan Kumpulkan </span>
                        <span class="text-green-500">Poin</span>
                        <span class="text-white">!</span>
                    </h2>
                    <a href="{{ route('register') }}"
                        class="bg-green-500 text-white text-2xl font-semibold font-['Poppins'] px-12 py-4 rounded-3xl hover:bg-green-600 transition duration-300 ease-in-out inline-block">Daftar
                        Sekarang</a>
                </div>
            </div>
        </section>

    </main>
@endsection
