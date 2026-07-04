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
        <nav
            class="navbar {{ $title !== 'home' ? 'bg-primary' : '' }} fixed w-full py-4 z-9 px-5 lg:px-30 flex justify-between">
            {{-- logo --}}
            <div class="logo">
                <img src="{{ asset('images/logo-white.png') }}" class="w-36 lg:w-48" alt="Logo Moody">
            </div>

            {{-- menu --}}
            <ul class="hidden text-white lg:flex lg:gap-5 lg:items-center">
                <li class="menu {{ $title === 'home' ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="menu"><a href="#product">Product</a></li>
                <li class="menu {{ $title === 'cart' ? 'active' : '' }}"><a href="/cart">Cart</a></li>
                <li class="menu"><a href="/order">Order</a></li>
                <li class="menu"><a href="/notification">Notifications</a></li>
                <li class="menu"><a href="/about">About</a></li>
                {{-- <li class="menu cursor-pointer"><x-heroicon-s-user-circle
                        class="w-8 text-white  hover:text-[#157aedd4] transition-all duration-300 ease-in-out" />
                </li> --}}

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="btn-login flex px-2 py-1 bg-primary text-white rounded border-2 font-semibold hover:bg-secondary transition-all duration-300 ease-in-out">Logout
                        <x-heroicon-o-arrow-right-start-on-rectangle class="w-5" />
                    </button>
                </form>
            </ul>

            {{-- menu mobile --}}
            <div class="mobile-nav lg:hidden ">
                <div class="flex gap-2">
                    <x-heroicon-o-shopping-cart class="w-8 cursor-pointer text-white" />
                    <x-heroicon-o-bell class="w-8 cursor-pointer text-white" />
                    <x-heroicon-o-bars-3 id="hamburger-menu" class="w-9 cursor-pointer text-white" />
                </div>

                <div
                    class="nav-visible invisible w-80 block bg-primary text-white right-0 top-0 h-screen absolute z-10 py-20 px-0 shadow-2xl">
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
