<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="node_modules/heroicons-css/heroicons.css" type="text/css">
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav class="navbar fixed w-full py-3 px-7 md:px-14 flex justify-between">
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
                        <Button class="btn-login flex px-3 py-1 bg-white text-[#ED153E] rounded  font-semibold">Login
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
        <section class="header flex items-center h-[80vh] bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('images/header.png') }}')">
            <div class="left-header w-1/2 p-30 text-white">
                <div class="text-start">

                    <h1 class="text-7xl font-bold mb-4">Feel The Coffee, Feel The Mood</h1>

                    <p class="text-white text-2xl mb-8">
                        Kadang yang kita butuh cuma jeda,
                        antara dingin yang menenangkan dan hangat yang menguatkan.
                        MoodyCafe, tempat semua rasa dipeluk pelan.
                    </p>
                    <button
                        class="bg-white flex p-3 border border-2 rounded-lg text-[#ED153E] font-semibold hover:bg-[#ce0d31] transition-all duration-300 ease-in-out hover:text-white hover:border hover:border-2">Order
                        Now
                        <x-heroicon-s-arrow-right class="w-5 ms-1 font-semibold" /> </button>
                </div>
            </div>
            <div class="right-header w-1/2 object-cover justify-items-end pe-30 pt-25">

                <img src="{{ asset('images/hero-right.png') }}" class="w-full h-auto max-w-md" alt="">
            </div>
        </section>
        <section class="content py-10 px-15 bg-gray-300 h-[150vh]">
            <h1 class="font-semibold text-2xl">Product</h1>
        </section>
    </main>

    {{-- footer --}}
    <footer></footer>

</body>

</html>

<script src="{{ asset('js/script.js') }}"></script>
