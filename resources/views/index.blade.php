<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="node_modules/heroicons-css/heroicons.css" type="text/css">
    @vite('resources/css/app.css')

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header id="home">
        <nav class="navbar fixed w-full py-4 z-9 px-5 lg:px-30 flex justify-between">
            {{-- logo --}}
            <div class="logo">
                <img src="{{ asset('images/logo-white.png') }}" class="w-36 lg:w-48" alt="Logo Moody">
            </div>

            {{-- menu --}}
            <ul class="hidden text-white lg:flex lg:gap-5 lg:items-center">
                <li class="menu active"><a href="#home">Home</a></li>
                <li class="menu"><a href="#product">Product</a></li>
                <li class="menu"><a href="/order">Order</a></li>
                <li class="menu"><a href="/about">About</a></li>
                <li class="menu"><a href="/notification">Notifications</a></li>
                {{-- <li class="menu cursor-pointer"><x-heroicon-s-user-circle
                        class="w-8 text-white  hover:text-[#157aedd4] transition-all duration-300 ease-in-out" />
                </li> --}}
                <li class="">
                    <a href="/login">
                        <Button
                            class="btn-login flex px-3 py-1 bg-white border-white border-2 text-[#ED153E] rounded font-semibold hover:bg-[#ce0d31] hover:text-white hover:border-2 transition-all duration-300 ease-in-out">Login
                        </Button>
                    </a>
                </li>
                <span>|</span>
                <li class="">
                    <a href="/login">
                        <Button
                            class="btn-login flex px-3 py-1 bg-[#ED153E] text-white rounded border-2 font-semibold hover:bg-[#ce0d31] transition-all duration-300 ease-in-out">Register
                        </Button>
                    </a>
                </li>
            </ul>

            {{-- menu mobile --}}
            <div class="mobile-nav lg:hidden ">
                <div class="flex gap-2">
                    <x-heroicon-o-shopping-cart class="w-8 cursor-pointer text-white" />
                    <x-heroicon-o-bell class="w-8 cursor-pointer text-white" />
                    <x-heroicon-o-bars-3 id="hamburger-menu" class="w-9 cursor-pointer text-white" />
                </div>

                <div
                    class="nav-visible invisible w-80 block bg-[#ED153E] text-white right-0 top-0 h-screen absolute z-10 py-20 px-0 shadow-2xl">
                    <x-heroicon-s-x-mark class="close w-9 flex absolute top-5 right-7 " />

                    <ul class="w-full justify-items-center">
                        <li class="menu-mobile py-3 mobile-active"><a href="/home">Home</a></li>
                        <li class="menu-mobile py-3"><a href="#product">Product</a></li>
                        <li class="menu-mobile py-3"><a href="/order">Order</a></li>
                        <li class="menu-mobile py-3"><a href="/about">About</a></li>
                        <li class="menu-mobile py-3"><a href="/notification">Notification</a></li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>

    {{-- content --}}
    <main>
        <section class="header md:flex items-center h-auto bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('images/header.png') }}')">
            <div class="left-header md:w-1/2 pt-20 pb-5 md:p-10 lg:p-30 text-white">
                <div data-aos="fade-right" class="md:text-start">

                    <div class="text w-70 md:w-full">

                        <h1 class="text-2xl md:text-4xl lg:text-7xl font-bold mb-2 ms-5 md:ms-0 lg:mb-4">Feel The
                            Coffee, Feel
                            The Mood</h1>
                    </div>

                    <div class="w-55 md:w-full">

                        <p class="text-white text-[11px] md:text-[14px] lg:text-2xl mb-3 lg:mb-8 ms-5 md:ms-0">
                            Kadang yang kita butuh cuma jeda,
                            antara dingin yang menenangkan dan hangat yang menguatkan.
                            MoodyCafe, tempat semua rasa dipeluk pelan.
                        </p>
                    </div>

                    <a href="#product">
                        <button
                            class="ms-5 bg-white lg:m-0 flex p-2 md:p-3 border-2 rounded-lg text-[#ED153E] font-semibold hover:bg-[#ce0d31] transition-all duration-300 ease-in-out hover:text-white hover:border-2">Order
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
            <h1 class="font-semibold text-3xl text-center text-[#ED153E]">Best Seller</h1>
            <div class="flex justify-center">

                <div class="bg-[#ED153E] w-13 h-1 rounded-2xl"></div>

            </div>
            <div class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 h-100 mt-5">
                <div class="bg-white">
                    <img src="{{ asset('images/aren.png') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <div class="bg-[#ED153E] w-full"></div>
            </div>

            <div class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 h-100 mt-7">
                <div class="bg-white md:order-2">
                    <img src="{{ asset('images/matcha.png') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <div class="bg-green-800 w-full md:order-1"></div>

            </div>

            <div class="best-seller1 w-full grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 h-100 mt-7">
                <div class="bg-white">
                    <img src="{{ asset('images/almond.png') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <div class="bg-yellow-600 w-full"></div>
            </div>

        </section>

        <section id="product" class="content w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
            <div class="flex pb-5 justify-between">
                <h1 class="font-semibold text-3xl">Product</h1>
                <a href="/product" class="flex text-xl lg:text-2xl text-[#ED153E] items-center">Selengkapnya
                    <x-heroicon-o-arrow-right class="w-5 lg:w-8" /> </a>
            </div>

            <div class="product w-full gap-2 md:gap-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">

                <div class="card bg-white p-3 md:p-6">
                    <div class="card-image  w-full h-30 md:h-40 lg:h-60 bg-gray-50 bg-cover">
                        <img src="{{ asset('images/kopi.png') }}" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="card-title font-semibold md:text-2xl mt-2">Moody Aren</div>
                    <div class="card-subtitle text-gray-500">Coffee</div>
                    <div class="flex justify-between items-center w-full mt-3">
                        <div class="card-price md:text-2xl">Rp. 10.000</div>
                        <div class="card-buy "><button
                                class="hover:bg-[#ce0d31] transition-all ease-in-out duration-300 bg-[#ED153E] flex text-white p-1 md:p-2 rounded font-semibold"><x-heroicon-s-shopping-cart
                                    class="w-5 md:w-5" />
                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <section class="w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
            <h1 class="font-semibold text-3xl text-center text-[#ED153E]">F.A.Q</h1>
            <div class="flex justify-center mt-1">

                <div class="bg-[#ED153E] w-13 h-1 rounded-2xl"></div>

            </div>
            <details class="bg-white p-5 mb-2 mt-5 ">
                <summary class="cursor-pointer">
                    Apa itu MoodyCafe?
                </summary>
                <p>
                    MoodyCafe adalah cafe.. apa lagi
                </p>
            </details>
            <details class="bg-white p-5 mb-2">
                <summary class="cursor-pointer">
                    Apa itu MoodyCafe?
                </summary>
                <p>
                    MoodyCafe adalah cafe.. apa lagi
                </p>
            </details>
            <details class="bg-white p-5 mb-2">
                <summary class="cursor-pointer">
                    Apa itu MoodyCafe?
                </summary>
                <p>
                    MoodyCafe adalah cafe.. apa lagi
                </p>
            </details>
        </section>
    </main>

    <section class="w-full p-6 lg:py-10 lg:px-30 bg-gray-100 h-auto">
        <h1 class="font-semibold text-3xl text-center">Need Help? <span class="text-[#ED153E]">Contact Us</span></h1>
        <div class="flex justify-center mt-2">

            <div class="bg-[#ED153E] w-13 h-1 rounded-2xl"></div>

        </div>
        <div class="grid lg:grid-cols-2 lg:grid-rows-1 grid-rows-2 gap-3 h-auto mt-5">
            <div class="bg-white p-5 ">
                <div class="locate flex mb-5">
                    <div class="bg-gray-100 rounded-full p-3">
                        <x-heroicon-o-phone class="w-7 text-[#ED153E]" />
                    </div>
                    <div class="ps-2">
                        <h1 class="text-[20px] font-semibold ">Phone</h1>
                        <h2 class="text-sm">+62 823-9306-3712</h2>
                    </div>
                </div>
                <div class="locate flex mb-5">
                    <div class="bg-gray-100 rounded-full p-3">
                        <x-heroicon-o-envelope class="w-7 text-[#ED153E]" />
                    </div>
                    <div class="ps-2">
                        <h1 class="text-[20px] font-semibold ">Email Us</h1>
                        <h2 class="text-sm">moodycafe123@gmail.com</h2>
                    </div>
                </div>
                <div class="locate flex mb-5">
                    <div class="bg-gray-100 rounded-full p-3">
                        <x-heroicon-o-map-pin class="w-7 text-[#ED153E]" />
                    </div>
                    <div class="ps-2">
                        <h1 class="text-[20px] font-semibold ">Address</h1>
                        <h2 class="text-sm">Jl. Poros Benteng, Malimpung, Kab. Pinrang</h2>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3752114903155!2d119.73221817572887!3d-3.7281113962458052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9449d562f8d4c9%3A0x2b7290c94a529d59!2sSALSA%20COMPUTER!5e0!3m2!1sid!2sid!4v1778166193831!5m2!1sid!2sid"
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
                        class="w-full bg-[#ED153E] p-2 text-white font-semibold rounded hover:bg-[#ce0d31] transition-all ease-in-out duration-300">Submit</button>
                </form>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <footer class="w-full bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Brand -->
            <div>
                <h2 class="text-2xl font-bold text-white">MoodyCafe</h2>
                <p class="mt-3 text-sm text-gray-400">
                    Di antara hangatnya kopi dan tenangnya suasana,
                    kami hadir untuk menemani setiap ceritamu.
                </p>
            </div>

            <!-- Menu -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-3">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#" class="hover:text-white transition">About</a></li>
                    <li><a href="#" class="hover:text-white transition">Menu</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-3">Contact</h3>
                <p class="flex text-sm text-gray-400">
                    <x-heroicon-o-map-pin class="w-5 me-1" />
                    <span>Malimpung, Kab. Pinrang</span>
                </p>
                <p class="flex text-sm text-gray-400 mt-2">
                    <x-heroicon-o-phone class="w-5 me-1" />
                    <span>+62 823-9306-3712</span>
                </p>
                <p class="flex text-sm text-gray-400 mt-2">
                    <x-heroicon-o-envelope class="w-5 me-1" />
                    <span>moodycafe@email.com</span>
                </p>

                <!-- Social -->
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="hover:text-white transition">Instagram</a>
                    <a href="#" class="hover:text-white transition">WhatsApp</a>
                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="grid grid-rows-2 border-t border-gray-700 text-center py-4 text-sm text-gray-500">
            <span>
                © 2026 MoodyCafe. All rights reserved.
            </span>
            <span>Made by <a href="" class="font-semibold hover:underline">Surawal</a></span>
        </div>
    </footer>

</body>

</html>

<script src="{{ asset('js/script.js') }}"></script>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
