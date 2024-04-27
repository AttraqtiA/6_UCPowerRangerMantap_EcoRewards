@extends('layouts.admin.frame_admin')

@section('content_page')
    <!-- component -->

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-6 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Detail Sampah</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Plastik - Kecil</h1>

                    <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                        taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                        Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra
                        jean shorts keytar banjo tattooed umami cardigan.</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">

                    </div>
                    <div class="flex justify-between">
                        <span class="title-font font-medium text-2xl text-gray-900">150 Poin</span>
                        <div>
                            <button type="button"
                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                            <button type="button"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
