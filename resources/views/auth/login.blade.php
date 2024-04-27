@extends('layouts.frame_auth')

@section('content_page')
    <div class="">
        <div class="row justify-center">
            <section style="background-image: url('/images/cover_1.jpg')"
                class="bg-cover bg-center bg-no-repeat bg-gray-700 bg-blend-multiply">
                <div class="flex flex-col items-center justify-center p-8 mx-auto md:h-full lg:py-0">
                    <div class="m-4 md:m-16 w-full rounded-lg shadow sm:max-w-md xl:p-0 bg-gray-900">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                                Login ke akun anda
                            </h1>
                            <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
                                @csrf

                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="{{ $errors->has('email') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        placeholder="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="{{ $errors->has('password') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" name="remember"
                                                aria-describedby="remember" type="checkbox"
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat saya
                                                </label>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit"
                                    class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>

                                <p class="text-center text-sm font-light text-gray-400">
                                    Belum memiliki akun? <a href="{{ route('register') }}"
                                        class="font-medium text-green-600 hover:underline">Daftar</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
