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
                                Membuat akun baru
                            </h1>

                            <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6"
                                enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <label for="user_name" class="block mb-2 text-sm font-medium text-white">Nama</label>
                                    <input type="text" name="user_name" id="user_name"
                                        class="{{ $errors->has('user_name') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        placeholder="" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>
                                    @error('user_name')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="{{ $errors->has('email') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        placeholder="" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="flex flex-row gap-4">

                                    <div>
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-white">Password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="{{ $errors->has('password') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="confirm-password"
                                            class="block mb-2 text-sm font-medium text-white">Confirm
                                            password</label>
                                        <input type="password" name="password_confirmation" id="confirm-password"
                                            placeholder="••••••••"
                                            class="{{ $errors->has('address') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-600 text-gray-900 placeholder-gray-400  focus:ring-green-600 focus:border-green-600' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                            required>
                                        @error('confirm-password')
                                            <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                </div>

                                <button type="submit"
                                    class="w-full text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>

                                <p class="text-center text-sm font-light text-gray-400">
                                    Sudah memiliki akun? <a href="{{ route('login') }}"
                                        class="font-medium text-green-600 hover:underline">Masuk</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <script>
        // buat display input file image preview
        function displayImagePreview_Add(input) {
            var preview = $('#existingImagePreviewId');

            // Remove existing image
            preview.empty();

            // Display newly uploaded image
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass(
                        'w-1/2 mx-auto rounded-lg object-cover');
                    preview.append(img);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
