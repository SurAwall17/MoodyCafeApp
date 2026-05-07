<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="node_modules/heroicons-css/heroicons.css" type="text/css">
    @vite('resources/css/app.css')

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar fixed w-full py-3 z-9 px-7 md:px-30 flex justify-between">
            {{-- logo --}}
            <div class="logo">
                <img src="{{ asset('images/logo-white.png') }}" class="w-36 md:w-48" alt="Logo Moody">
            </div>

            {{-- menu --}}
            <ul class="hidden text-white md:flex md:gap-5 md:items-center">
                <li class="menu active"><a href="/home">Home</a></li>
                <li class="menu"><a href="/product">Product</a></li>
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
            <div class="mobile-nav md:hidden ">
                <x-heroicon-o-bars-3 id="hamburger-menu" class="w-9 cursor-pointer" />

                <div
                    class="nav-visible invisible w-80 block bg-[#ED153E] text-white right-0 top-0 h-screen absolute z-10 py-20 px-0 shadow-2xl">
                    <x-heroicon-s-x-mark class="close w-9 flex absolute top-5 right-7 " />

                    <ul class="w-full justify-items-center">
                        <li class="menu-mobile py-3 mobile-active"><a href="/home">Home</a></li>
                        <li class="menu-mobile py-3"><a href="/product">Product</a></li>
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
        <section class="header flex items-center h-[85vh] bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('images/header.png') }}')">
            <div class="left-header w-1/2 p-30 text-white">
                <div data-aos="fade-right" class="text-start">

                    <h1 class="text-7xl font-bold mb-4">Feel The Coffee, Feel The Mood</h1>

                    <p class="text-white text-2xl mb-8">
                        Kadang yang kita butuh cuma jeda,
                        antara dingin yang menenangkan dan hangat yang menguatkan.
                        MoodyCafe, tempat semua rasa dipeluk pelan.
                    </p>
                    <button
                        class="bg-white flex p-3 border-2 rounded-lg text-[#ED153E] font-semibold hover:bg-[#ce0d31] transition-all duration-300 ease-in-out hover:text-white hover:border-2">Order
                        Now
                        <x-heroicon-s-arrow-right class="w-5 ms-1 font-semibold" /> </button>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="500"
                class="right-header w-1/2 object-cover justify-items-end pe-30 pt-15">

                <img src="{{ asset('images/hero-right.png') }}" class="w-full h-auto max-w-md" alt="">
            </div>
        </section>

        <section class="best-seller w-full py-5 px-30 bg-gray-100">
            <h1 class="font-semibold text-3xl text-center">Best Seller</h1>
            <div class="best-seller1 w-full grid grid-cols-2 grid-rows-1 h-90 mt-7">
                <div class="bg-white">
                    <img src="" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <div class="bg-[#ED153E] w-full"></div>
            </div>

            <div class="best-seller1 w-full grid grid-cols-2 grid-rows-1 h-90 mt-7">
                <div class="bg-green-800 w-full"></div>
                <div class="bg-white">
                    <img src="" alt="Gambar" class="h-full w-full object-cover">
                </div>
            </div>

            <div class="best-seller1 w-full grid grid-cols-2 grid-rows-1 h-90 mt-7">
                <div class="bg-white">
                    <img src="" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <div class="bg-yellow-600 w-full"></div>
            </div>

        </section>

        <section class="content w-full py-10 px-30 bg-gray-100 h-auto">
            <div class="flex pb-5 justify-between">
                <h1 class="font-semibold text-3xl">Product</h1>
                <a href="/product" class="flex text-2xl text-[#ED153E]">Selengkapnya <x-heroicon-o-arrow-right
                        class="w-8" /> </a>
            </div>

            <div class="product gap-10 w-full flex flex-wrap justify-start ">
                <div class="card bg-white w-85 p-6 rounded-2xl">
                    <div class="card-image  w-full h-60 bg-gray-50 bg-cover">
                        <img src="{{ asset('images/kopi.png') }}" class="w-full h-full rounded-2xl object-cover"
                            alt="">
                    </div>
                    <div class="card-title font-semibold text-2xl mt-2">Moody Aren</div>
                    <div class="card-subtitle text-gray-500">Coffee</div>
                    <div class="flex justify-between w-full mt-3">
                        <div class="card-price text-2xl">Rp. 10.000</div>
                        <div class="card-buy"><button
                                class="bg-[#ED153E] text-white p-1 w-15 rounded font-semibold">Beli</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="w-full py-10 px-30 bg-gray-100 h-auto">
            <h1 class="font-semibold text-3xl text-center">F.A.Q</h1>
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

    <section class="w-full py-10 px-30 bg-gray-100 h-auto">
        <h1 class="font-semibold text-3xl text-center">Need Help? <span class="text-[#ED153E]">Contact Us</span></h1>
        <div class="grid grid-cols-2 grid-rows-1 gap-3 h-auto mt-5">
            <div class="bg-white">

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
        <div class="border-t border-gray-700 text-center py-4 text-sm text-gray-500">
            © 2026 MoodyCafe. All rights reserved.
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
