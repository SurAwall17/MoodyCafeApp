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
            class="navbar {{ $title !== 'home' ? 'bg-primary' : '' }} fixed w-full py-3 z-9 px-5 lg:px-30 flex justify-between">
            {{-- logo --}}
            <div class="logo">
                <img src="{{ asset('images/logo-white.png') }}" class="w-36 lg:w-48" alt="Logo Moody">
            </div>

            {{-- menu --}}
            <ul class="hidden text-white lg:flex lg:gap-5 lg:items-center">
                <li class="menu {{ $title === 'home' ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="menu {{ $title === 'products' ? 'active' : '' }}"><a href="/products">Product</a></li>
                <li class="menu {{ $title === 'cart' ? 'active' : '' }}"><a href="/cart">Cart</a></li>
                <li class="menu"><a href="/order">Order</a></li>
                <li class="menu"><a href="/notification">Notifications</a></li>
                <li class="menu"><a href="/about">About</a></li>
                <li class="menu relative flex" onclick="handleDropdown()">
                    <div class="icon-profile flex w-13" id="icon-profile">
                        <div class="image">
                            <img class="rounded-full"
                                src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?length=1&background=random&color=fff&name=' . auth()->user()->name }}"
                                alt="">
                        </div>
                        <x-heroicon-o-chevron-down class="w-8 cursor-pointer" />
                    </div>
                    <div class="hidden absolute right-0 mt-10 text-gray-600 shadow-2xl bg-white rounded-lg p-2 w-max max-w-100"
                        id="profile-dropdown">

                        <div class="flex items-center">
                            <img class="rounded-full h-10"
                                src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?length=1&background=random&color=fff&name=' . auth()->user()->name }}"
                                alt="">

                            <div class="p-2" id="username">
                                <p class="text-black font-semibold">{{ auth()->user()->name }}</p>
                                <p class="text-sm truncate" title="{{ auth()->user()->email }}">
                                    {{ auth()->user()->email }}
                                </p>
                            </div>
                        </div>
                        <a href="/profile"
                            class="flex p-2 rounded hover:bg-gray-500/10 transition-all ease-in-out duration-200"><x-heroicon-o-cog-6-tooth
                                class="w-5 me-1" /> Settings</a>
                        <form action="/logout" method="post"
                            class="rounded hover:bg-primary/10 p-2 transition-all ease-in-out duration-200 cursor-pointer">
                            @csrf
                            <button type="submit" class="flex text-primary cursor-pointer">
                                <x-heroicon-o-arrow-right-start-on-rectangle class="w-5 me-1 " /> Logout
                            </button>
                        </form>
                    </div>
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
                    class="nav-visible invisible w-80 block bg-primary text-white right-0 top-0 h-screen absolute z-10 py-20 px-0 shadow-2xl">
                    <x-heroicon-s-x-mark class="close w-9 flex absolute top-5 right-7 " />

                    <ul class="w-full justify-items-center">
                        <li class="menu-mobile py-3 mobile-active"><a href="/home">Home</a></li>
                        <li class="menu-mobile py-3"><a href="/products">Product</a></li>
                        <li class="menu-mobile py-3"><a href="/order">Order</a></li>
                        <li class="menu-mobile py-3"><a href="/about">About</a></li>
                        <li class="menu-mobile py-3"><a href="/notification">Notification</a></li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>
