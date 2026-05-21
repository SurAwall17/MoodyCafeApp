@include('partials.sidebar-kasir')

<main class="flex-1 bg-gray-100">
    <section>
        <div class="nav border-b border-gray-300 h-17">
        </div>
    </section>

    <section class="px-7 py-5">
        <h1 class="mt-5 text-3xl font-semibold ">Product</h1>
        <p class="mb-5">
            Atur menu terbaik untuk setiap pelanggan MoodyCafe.
        </p>
        <div class="flex justify-between mb-6">
            <input type="search"
                class="focus:border-primary transition-all ease-in-out duration-300 border border-gray-300 outline-none p-2 rounded-sm"
                placeholder="Search...">
            <div class="action">
                <button
                    class="flex p-2 border text-gray-500  border-gray-500 hover:border-primary hover:text-primary transition-all ease-in-out duration-300 rounded-sm">
                    <x-heroicon-o-funnel class="w-5 " />
                    <span class="">Filter</span>
                </button>

            </div>
        </div>
        <div class="product w-full grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-2 md:gap-5">

            <div class="card bg-white rounded-2xl overflow-hidden">

                <div class="card-image w-full h-26 md:h-38 lg:h-50 bg-gray-100 overflow-hidden">
                    <img src="{{ asset('images/kopi.png') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-all duration-500" alt="">
                </div>

                <div class="p-3 md:p-5">
                    <div class="card-title font-semibold text-base md:text-xl">
                        Moody Aren
                    </div>
                    <div class="inline-block bg-gray-100 text-gray-500 text-xs px-3 py-1 rounded-full mt-2">
                        Coffee
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="card-price font-semibold text-sm md:text-xl">
                            Rp 10.000
                        </div>
                        <button
                            class="bg-primary hover:bg-secondary transition-all duration-300 text-white px-2 md:px-4 py-2 rounded-sm shadow-md flex items-center gap-2 hover:scale-105">

                            <x-heroicon-s-shopping-cart class="w-4 h-4" />

                            <span class="hidden md:block text-sm font-medium">
                                Add
                            </span>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>
@include('partials.footer')
