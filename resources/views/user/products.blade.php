@include('partials.navbar')

<main class="pt-25 bg-gray-100">
    <section>
        <h1 class="title mt-2">Products</h1>
        <p class="sub-title mt-2">
            <a href="/">Home </a>/
            <a href="/products" class="text-primary"> Products</a>
        </p>
    </section>

    <section class="p-10">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl">All Product ({{ $countProduct }})</h2>
            <div class="w-80 mb-3">
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
        </div>

        <div class="product w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-5">
            @foreach ($allProduct as $item)
                <div class="card bg-white rounded-2xl overflow-hidden ">
                    <div class="card-image w-full h-36 md:h-48 lg:h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ Storage::url($item->image) }}"
                            class="w-full h-full object-cover hover:scale-105 transition-all duration-500"
                            alt="">
                    </div>

                    <div class="p-3 md:p-5">
                        <div class="card-title font-semibold text-base md:text-xl">
                            {{ $item->name }}
                        </div>
                        <div class="inline-block bg-gray-100 text-gray-500 text-xs px-3 py-1 rounded-full mt-2">
                            {{ $item->categories->name }}
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="card-price font-semibold text-sm md:text-xl">
                                {{ 'Rp.' . number_format($item->price, 0, ',', '.') }}
                            </div>
                            <button
                                class="add bg-primary hover:bg-secondary transition-all duration-300 text-white px-2 md:px-4 py-2 rounded-sm shadow-md flex items-center gap-2 hover:scale-105"
                                data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                data-price="{{ $item->price }}" data-baseprice="{{ $item->price }}"
                                data-category="{{ $item->categories->name }}"
                                data-image="{{ Storage::url($item->image) }}">

                                <x-heroicon-s-shopping-cart class="w-4 h-4" />

                                <span class="hidden md:block text-sm font-medium">
                                    Add
                                </span>

                            </button>
                        </div>
                    </div>
                </div>
            @endforeach


            <x-modal-buy title="Checkout">
                <form action="{{ route('cart.add') }}" method="POST" class="flex gap-4">
                    @csrf
                    <div class="w-1/2 h-100">
                        <img id="product_image" class="rounded-xl h-full w-full object-cover ">
                    </div>
                    <div class="form w-1/2">
                        <h1 class="text-2xl font-semibold mb-4">Product Details</h1>
                        <input type="hidden" id="product_id" name="product_id">

                        <label for="">Nama Produk</label>
                        <input type="text" id="product_name" name="product_name"
                            class="bg-gray-100 mb-3 rounded-sm w-full p-2 focus:outline-primary" disabled>

                        <label for="">Kategori</label>
                        <input type="text" id="product_category" name="product_category"
                            class="bg-gray-100 mb-3 rounded-sm w-full p-2 focus:outline-primary" disabled>

                        <div class="flex gap-1 mb-3">
                            <button type="button"
                                class="sugar px-2 py-1 border-2 text-sm rounded-4xl bg-white hover:cursor-pointer">Less
                                Sugar</button>
                            <button type="button" id="btnSelected"
                                class="sugar-active px-2 py-1 border-2 text-sm rounded-4xl bg-white hover:cursor-pointer ">Normal</button>
                            <button type="button"
                                class="sugar px-2 py-1 border-2 text-sm rounded-4xl bg-white hover:cursor-pointer">Extra
                                Sugar</button>
                        </div>
                        <input type="hidden" id="sugar_level" name="sugar_level">

                        <label for="">Jumlah Produk</label>
                        <input type="number" id="product_qty" name="product_qty"
                            class="bg-gray-100 mb-3 rounded-sm w-full p-2 focus:outline-primary" value="1">

                        <label for="">Harga</label>
                        <input type="text" id="product_price" name="product_price"
                            class="bg-gray-100 mb-3 rounded-sm w-full p-2 focus:outline-primary" disabled>
                        <input type="text" id="base_price"
                            class="bg-gray-100 mb-3 rounded-sm w-full p-2 focus:outline-primary" hidden>

                        {{-- footer --}}
                        <div class="footer flex justify-end gap-2 font-semibold">
                            <button type="submit"
                                class="flex py-1 px-2 text-white bg-yellow-300 rounded-sm hover:bg-yellow-400 transition-all ease-in-out duration-100">
                                <x-heroicon-o-shopping-cart class="w-5" /> AddCart</button>
                            <button
                                class="flex py-1 px-2 text-white bg-primary rounded-sm hover:bg-secondary transition-all ease-in-out duration-100">
                                <x-heroicon-o-credit-card class="w-5" />
                                Checkout</button>
                        </div>
                    </div>



                </form>

            </x-modal-buy>

        </div>
    </section>
</main>

@include('partials.footer')
