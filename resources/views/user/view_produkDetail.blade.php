@extends('layouts.frame_visitor')

@section('content_page')
    <section>
        <section class="text-gray-700 body-font overflow-hidden bg-white">
            <form action="{{ route('visitor.beliProduk', $redeemProduct->id) }}" method="POST">
                @csrf
                <div class="container px-5 py-6 mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">

                        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                            src="{{ asset('/storage' . $redeemProduct->image) }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">Detail Produk</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $redeemProduct->name }}</h1>

                            <p class="leading-relaxed">{{ $redeemProduct->description }}</p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                                Stok : {{ $redeemProduct->stock }}
                            </div>
                            <div class="flex justify-between items-center   ">

                                <div class="flex justify-between">

                                    <span
                                        class="title-font font-medium text-2xl text-gray-900">{{ $redeemProduct->price_point }}
                                        Poin/pcs</span>

                                </div>
                                <form class="max-w-xs">
                                    <label for="quantity-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Beli
                                        berapa?</label>
                                    <input type="hidden" name="submitButton" id="submitButton" value="">
                                    <div class="relative flex items-center max-w-[8rem]">
                                        <button type="button" id="{{ 'input-decrement-' . $redeemProduct->id }}"
                                            onClick="changeQuantity('{{ $redeemProduct->id }}', -1, '{{ $redeemProduct->price_point }}')"
                                            class="cursor-pointer bg-gray-900 hover:bg-gray-800 border-gray-900 border rounded-s-lg p-3 h-11">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="{{ 'input-' . $redeemProduct->id }}" name="quantity"
                                            value="{{ old('quantity', 0) }}" data-input-counter data-input-counter-min="1"
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-11 text-center text-sm block w-full py-2.5 bg-gray-900 border-gray-900 placeholder-gray-800 text-white"
                                            required>
                                        <button type="button" id="{{ 'input-increment-' . $redeemProduct->id }}"
                                            onClick="changeQuantity('{{ $redeemProduct->id }}', 1, '{{ $redeemProduct->price_point }}')"
                                            class="cursor-pointer bg-gray-900 hover:bg-gray-800 border-gray-900 border rounded-e-lg p-3 h-11 ">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                        Pilih
                                        angka dari 0.</p>
                                </form>

                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full focus:outline-none px-9 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </section>
@endsection
<script>
    $(document).ready(function() {
        var inputElement = $('#input-{{ $redeemProduct->id }}');
        var price = '{{ $redeemProduct->price_point }}';

        // Fungsi untuk mengupdate subtotal
        function updateSubtotal() {
            var qty = parseInt(inputElement.val());
            qty = isNaN(qty) ? 0 : qty; // Pastikan qty adalah angka

            // Pastikan qty tidak kurang dari 1
            qty = Math.max(qty, 1);

            var total_price = qty * price;

            // Format uang rupiah dengan memanggil fungsi numberFormat
            var formattedTotal = numberFormat(total_price);

            // Mengatur nilai elemen HTML
            $('#cost').val(formattedTotal);
        }

        // Fungsi untuk memformat uang dengan pemisah ribuan
        function numberFormat(amount) {
            return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Menambahkan event listener untuk event input
        inputElement.on('input', function() {
            updateSubtotal();
        });

        // Menambahkan event listener untuk tombol decrement
        $('#input-decrement-{{ $redeemProduct->id }}').on('click', function() {
            changeQuantity(-1);
            updateSubtotal();
        });

        // Menambahkan event listener untuk tombol increment
        $('#input-increment-{{ $redeemProduct->id }}').on('click', function() {
            changeQuantity(1);
            updateSubtotal();
        });

        // Fungsi untuk mengubah kuantitas
        function changeQuantity(change) {
            var currentQuantity = parseInt(inputElement.val());

            // Periksa apakah nilai input adalah NaN
            if (isNaN(currentQuantity)) {
                currentQuantity = 0; // Ganti dengan nilai awal, misalnya 0
            }

            var newQuantity = Math.max(currentQuantity + change, 1);

            inputElement.val(newQuantity);
        }
    });

    function setSubmitButton(buttonId) {
        $('#submitButton').val(buttonId);
    }
</script>
