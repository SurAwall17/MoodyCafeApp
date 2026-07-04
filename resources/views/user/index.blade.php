@include('partials.navbar')

{{-- content --}}
<main>
    <section class="header md:flex items-center h-auto lg:h-[90vh] bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('images/header.png') }}')">
        <div class="left-header md:w-1/2 pt-20 pb-5 md:p-10 lg:p-30 text-white">
            <div data-aos="fade-right" class="md:text-start">

                <div class="text w-70 md:w-full">

                    <h1 class="text-2xl md:text-4xl lg:text-7xl font-bold mb-2 ms-5 md:ms-0 lg:mb-4">Feel The
                        Coffee, Feel
                        The Mood</h1>
                </div>

                <div class="w-55 md:w-full">

                    <p class="text-white text-[11px] md:text-[16px] lg:text-2xl mb-3 lg:mb-8 ms-5 md:ms-0">
                        Kadang yang kita butuh cuma jeda,
                        antara dingin yang menenangkan dan hangat yang menguatkan.
                        MoodyCafe, tempat semua rasa dipeluk pelan.
                    </p>
                </div>

                <a href="#product">
                    <button
                        class="ms-5 bg-white md:m-0 flex p-2 md:p-3 border-2 rounded-lg text-primary font-semibold hover:bg-secondary transition-all duration-300 ease-in-out hover:text-white hover:border-2">Order
                        Now
                        <x-heroicon-s-arrow-right class="w-5 ms-1 font-semibold" />
                    </button>
                </a>
                <img src="{{ asset('images/header-bot.png') }}" alt=""
                    class="md:hidden w-43 absolute right-0 bottom-[-20px]">

            </div>





        </div>

        <div data-aos="fade-left" data-aos-duration="500"
            class="hidden md:block right-header md:w-1/2 object-cover justify-items-end p-5 md:pe-30 md:pt-20">

            <img src="{{ asset('images/hero-right.png') }}" class="w-full h-auto max-w-md" alt="">
        </div>


    </section>

    <section class="best-seller w-full p-5 lg:py-5 lg:px-30 bg-gray-100">
        <h1 class="font-semibold text-3xl text-center text-primary">Best Seller</h1>
        <div class="flex justify-center">

            <div class="bg-primary w-13 h-1 rounded-2xl"></div>

        </div>
        <div
            class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 md:h-85  lg:h-100 mt-5">
            <div class="bg-white">
                <img src="{{ asset('images/aren.png') }}" alt="Gambar" class="h-full w-full object-cover">
            </div>
            <div class="bg-primary w-full p-5 md:p-12 lg:p-20 text-white flex flex-col justify-center">
                <h1 class="text-2xl md:text-4xl font-semibold">Iced Moody Aren</h1>
                <span class="text-sm md:text-[20px] lg:text-2xl">Perpaduan espresso pilihan dengan manis alami gula
                    aren,
                    menciptakan rasa
                    creamy, bold, dan
                    smooth
                    dalam satu gelas.</span>
                <button
                    class="p-2 border-2 w-30 mt-3 font-semibold hover:bg-secondary transition-all ease-in-out duration-300">Order
                    Now</button>
            </div>
        </div>



        <div
            class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 md:h-85 lg:h-100 mt-7">
            <div class="bg-white md:order-2">
                <img src="{{ asset('images/matcha.png') }}" alt="Gambar" class="h-full w-full object-cover">
            </div>
            <div class="bg-green-800 w-full md:order-1 flex flex-col p-5 md:p-12 lg:p-20 text-white justify-center">
                <h1 class="text-2xl md:text-4xl font-semibold">Iced Matcha Latte</h1>
                <span class="text-sm md:text-[20px] lg:text-2xl">
                    Perpaduan matcha premium dan susu creamy yang lembut, dibuat untuk menemani momen
                    santaimu.</span>
                <button
                    class="p-2 border-2 w-30 mt-3 font-semibold hover:bg-green-900 transition-all ease-in-out duration-300">Order
                    Now</button>
            </div>

        </div>

        <div
            class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 md:h-85 lg:h-100 mt-7">
            <div class="bg-white">
                <img src="{{ asset('images/almond.png') }}" alt="Gambar" class="h-full w-full object-cover">
            </div>
            <div class="bg-yellow-600 w-full flex flex-col p-5 md:p-12 lg:p-20 text-white justify-center">
                <h1 class="text-2xl md:text-4xl font-semibold">Iced Almond Coffee Latte</h1>
                <span class="text-sm md:text-[20px] lg:text-2xl">Perpaduan espresso bold dan almond creamy
                    menciptakan rasa yang
                    smooth,
                    ringan, dan comforting.</span>
                <button
                    class="p-2 border-2 w-30 mt-3 font-semibold hover:bg-yellow-700 transition-all ease-in-out duration-300">Order
                    Now</button>
            </div>
        </div>

    </section>

    <section id="product" class="content w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
        <div class="flex pb-5 justify-between">
            <h1 class="font-semibold text-3xl">Product</h1>
            <a href="/product" class="flex text-xl lg:text-2xl text-primary items-center">Selengkapnya
                <x-heroicon-o-arrow-right class="w-5 lg:w-8" /> </a>
        </div>

        <div class="product w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-5">

            @foreach ($product as $item)
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

    <section class="w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
        <h1 class="font-semibold text-3xl text-center text-primary">F.A.Q</h1>
        <div class="flex justify-center mt-1">

            <div class="bg-primary w-13 h-1 rounded-2xl"></div>

        </div>
        <details class="bg-white p-5 mb-2 mt-5 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Apa itu MoodyCafe?
            </summary>

            <p class="mt-3 text-gray-500">
                MoodyCafe adalah cafe dengan suasana aesthetic dan nyaman yang menghadirkan berbagai pilihan kopi
                dan non-kopi untuk menemani harimu.
            </p>
        </details>

        <details class="bg-white p-5 mb-2 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Apakah tersedia minuman hot dan iced?
            </summary>

            <p class="mt-3 text-gray-500">
                Ya, MoodyCafe menyediakan berbagai pilihan minuman hot dan iced seperti coffee latte, matcha, hingga
                signature drink.
            </p>
        </details>

        <details class="bg-white p-5 mb-2 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Apakah bisa dine in?
            </summary>

            <p class="mt-3 text-gray-500">
                Tentu, tersedia area dine in yang nyaman untuk nongkrong, bekerja, maupun bersantai bersama teman.
            </p>
        </details>

        <details class="bg-white p-5 mb-2 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Apakah tersedia WiFi?
            </summary>

            <p class="mt-3 text-gray-500">
                Ya, tersedia akses WiFi gratis untuk seluruh pelanggan MoodyCafe.
            </p>
        </details>

        <details class="bg-white p-5 mb-2 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Jam operasional MoodyCafe?
            </summary>

            <p class="mt-3 text-gray-500">
                MoodyCafe buka setiap hari mulai pukul 10.00 hingga 22.00.
            </p>
        </details>

        <details class="bg-white p-5 mb-2 rounded-2xl">
            <summary class="cursor-pointer font-semibold">
                Apakah bisa pesan takeaway?
            </summary>

            <p class="mt-3 text-gray-500">
                Bisa, semua menu tersedia untuk dine in maupun takeaway.
            </p>
        </details>
    </section>
</main>

<section class="w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
    <h1 class="font-semibold text-3xl text-center">Need Help? <span class="text-primary">Contact Us</span></h1>
    <div class="flex justify-center mt-2">

        <div class="bg-primary w-13 h-1 rounded-2xl"></div>

    </div>
    <div class="grid lg:grid-cols-2 lg:grid-rows-1 grid-rows-2 gap-3 h-auto mt-5">
        <div class="bg-white p-5 ">
            <div class="locate flex mb-5">
                <div class="bg-gray-100 rounded-full p-3">
                    <x-heroicon-o-phone class="w-7 text-primary" />
                </div>
                <div class="ps-2">
                    <h1 class="text-[20px] font-semibold ">Phone</h1>
                    <h2 class="text-sm">+62 823-9306-3712</h2>
                </div>
            </div>
            <div class="locate flex mb-5">
                <div class="bg-gray-100 rounded-full p-3">
                    <x-heroicon-o-envelope class="w-7 text-primary" />
                </div>
                <div class="ps-2">
                    <h1 class="text-[20px] font-semibold ">Email Us</h1>
                    <h2 class="text-sm">moodycafe123@gmail.com</h2>
                </div>
            </div>
            <div class="locate flex mb-5">
                <div class="bg-gray-100 rounded-full p-3">
                    <x-heroicon-o-map-pin class="w-7 text-primary" />
                </div>
                <div class="ps-2">
                    <h1 class="text-[20px] font-semibold ">Address</h1>
                    <h2 class="text-sm">Jl. Poros Benteng, Malimpung, Kab. Pinrang</h2>
                </div>
            </div>


            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.8359485395339!2d119.73472235647051!3d-3.7281190947960785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9449002cbac365%3A0x472509fa685320e0!2sMOODY%20CAFE!5e0!3m2!1sid!2sid!4v1779508942088!5m2!1sid!2sid"
                class="w-full h-70" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-white p-5">
            <form action="" class="space-y-3">
                <div class="grid grid-cols-2 gap-5 ">
                    <div class="input-field">
                        <label for="">Your Name</label>
                        <input type="text" class="p-3 w-full outline-none border-[1px] border-gray-400">
                    </div>
                    <div class="input-field">
                        <label for="">Your Email</label>
                        <input type="text" class="p-3 w-full outline-none border-[1px] border-gray-400">
                    </div>
                </div>
                com
                <div class="input-field">
                    <label for="">Subject</label>
                    <input type="text" class="p-3 w-full outline-none border-[1px] border-gray-400">
                </div>

                <div class="input-field">
                    <label for="">Message</label>
                    <textarea type="text" rows="5" cols="70" class="p-3 w-full outline-none border-[1px] border-gray-400"></textarea>
                </div>

                <button
                    class="w-full bg-primary p-2 text-white font-semibold rounded hover:bg-secondary transition-all ease-in-out duration-300">Submit</button>
            </form>
        </div>
    </div>
</section>


</body>

</html>

@include('partials.footer')
