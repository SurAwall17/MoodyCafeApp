<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="node_modules/heroicons-css/heroicons.css" type="text/css">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-[#ED153E] h-[50vh]">
        <nav class="fixed w-full py-5 px-7 md:px-14 flex justify-between">
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
                        <Button class="btn-login flex px-3 py-2 bg-white text-[#ED153E] rounded-2xl font-semibold">Login
                            <x-heroicon-o-arrow-left-end-on-rectangle class="w-5 me-1" />
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
        <section>
            <div class="bg-blue-500 h-[150vh]"></div>

        </section>
    </main>

    {{-- footer --}}
    <footer></footer>

</body>

</html>

<script src="{{ asset('js/script.js') }}"></script>
