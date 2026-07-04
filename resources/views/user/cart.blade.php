@include('partials.navbar')

<main class="pt-25 bg-gray-100">
    <section>
        <h1 class="title mt-2">Shopping Cart</h1>
        <p class="sub-title mt-2">
            <a href="/">Home </a>/
            <a href="/cart" class="text-primary"> Shopping Cart</a>
        </p>
    </section>

    <section class="flex gap-4 px-30 py-10">
        <div class="cart-left flex-2/3 bg-white px-7 py-4 rounded-l overflow-hidden">

            <div class="title-cart text-2xl font-semibold p-2 border-b border-gray-400">
                <span id="count-cart">MyCart ({{ $jumlahCart }})</span>
            </div>

            <div class="flex flex-col gap-1" id="cart">

                @foreach ($cartItem as $item)
                    <div class="cart flex gap-5 items-center p-5 border-gray-400 border-b">
                        <input type="checkbox" class="cart-checked w-4 h-4" id="check-cart-{{ $item->id }}"
                            data-id="{{ $item->id }}" onclick="cartChecked({{ $item->id }})">
                        <img src="{{ Storage::url($item->products->image) }}" class="w-30 rounded-2xl" alt="">
                        <div class="flex justify-between w-full items-center">

                            <div class="flex flex-row">
                                <ul>
                                    <li class="product-name-{{ $item->id }} text-2xl font-semibold">
                                        {{ $item->products->name }}</li>

                                    <li
                                        class="inline-block px-3 py-1 rounded-2xl mt-1 text-sm font-medium
                                    {{ $item->sugar_level == 'Extra Sugar' ? 'text-yellow-600 bg-yellow-100' : 'text-green-600 bg-green-100' }}">
                                        {{ $item->sugar_level }}
                                    </li>
                                    <li class="text-xl mt-3 font-semibold">
                                        {{ 'Rp ' .
                                            number_format(
                                                $item->sugar_level === 'Extra Sugar' ? $item->products->price + 2000 : $item->products->price,
                                                0,
                                                ',',
                                                '.',
                                            ) }}
                                    </li>

                                </ul>



                            </div>
                            <div class="action flex flex-col space-y-3">
                                <div
                                    class="remove flex rounded-2xl mt-1 items-center text-sm font-medium text-gray-600 justify-end hover:text-primary cursor-pointer transition-all duration-200 ease-in-out">
                                    <x-heroicon-o-x-mark class="w-4" />
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <button type="button">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                                <div class="quantity ">
                                    <button
                                        class="w-7 text-white bg-primary hover:bg-primary/80 transition-all ease-in-out duration-200"
                                        id="btn-kurang-{{ $item->id }}"
                                        onclick="kurangQty({{ $item->id }})">-</button>
                                    <input type="text" inputmode="numeric" oninput="qtyChange({{ $item->id }})"
                                        class="border border-gray-300 w-7 text-center" value="{{ $item->qty }}"
                                        id="qty-value-{{ $item->id }}" data-price="{{ $item->products->price }}"
                                        data-sugar="{{ $item->sugar_level }}" data-qty="{{ $item->qty }}">

                                    <button
                                        class=" w-7 text-white bg-green-600 hover:bg-green-600/80 transition-all ease-in-out duration-200"
                                        id="btn-tambah-{{ $item->id }}"
                                        onclick="tambahQty({{ $item->id }})">+</button>
                                </div>

                                <p class="text-xl font-semibold" id="total-price-{{ $item->id }}"
                                    data-total-price="{{ $item->subtotal }}">
                                    {{ 'Rp.' . number_format($item->subtotal, 0, ',', '.') }}
                                </p>
                            </div>

                        </div>


                    </div>
                @endforeach
            </div>
        </div>

        <div class="cart-right flex flex-col gap-4 cart bg-gray-100 rounded-l overflow-hidden">

            <div class="title-cart font-semibold bg-white px-9 py-6">
                <div class="text-2xl mb-1">
                    Search

                </div>

                <div class="search ">
                    <form action="" class="flex gap-2 items-stretch">
                        <input type="search" placeholder="Cari Produk.."
                            class="flex-1 p-2 border font-normal rounded-l border-gray-400 outline-primary/80">

                        <button
                            class="px-4 flex items-center text-white rounded-r bg-primary hover:bg-primary/80 transition-all duration-300 ease-in-out">
                            <x-heroicon-o-magnifying-glass class="w-5" />
                        </button>
                    </form>
                </div>
            </div>

            <div class="payment bg-white px-7 py-4">
                <div class="text-2xl mb-1 font-semibold border-b border-gray-400 py-2">
                    Your Order
                </div>

                <div class="flex flex-col">
                    <div class="flex py-2 justify-between text-gray-700 border-b-2 border-dashed">
                        <p id="count-item">Subtotal (0 item)</p>
                        <p id="sub-total">Rp.0</p>
                    </div>

                    <div class="flex flex-col border-b pb-4">
                        <p class="font-semibold py-2">Delivery</p>
                        <select id="delivery" oninput="cartChecked()" class="p-2 border border-gray-400 outline-none">
                            <option value="Take Away">Take Away (Ambil Ditempat)</option>
                            <option value="Delivery">Delivery (Diantar)</option>
                        </select>
                    </div>
                    <div class="flex flex-col border-b pb-4">
                        <p class="font-semibold py-2">Details</p>
                        <div class="detail-products flex flex-col gap-2">

                        </div>

                    </div>

                    <div class="flex justify-between border-b">
                        <p class="font-semibold py-2">Total : </p>
                        <p class="total-price-order font-semibold py-2">Rp.0 </p>
                    </div>

                    {{-- <div class="flex justify-end w-full"> --}}
                    <button
                        class="flex text-white font-semibold mt-4 rounded p-2 bg-primary ms-auto hover:bg-primary/80 transition-all duration-200 ease-in-out"><x-heroicon-o-shopping-bag
                            class="w-5 me-1" /> Checkout</button>
                    {{-- </div> --}}
                </div>
            </div>

        </div>

    </section>
</main>

@include('partials.footer')
