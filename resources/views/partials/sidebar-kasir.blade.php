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

<body class="flex">
    <header class="w-15 md:w-[20vh] lg:w-[27vh] h-screen bg-primary flex flex-col p-4">

        <div class="logo p-1 w-full mb-6">
            <img src="{{ asset('images/logo-white.png') }}" class="w-50 m-auto" alt="">
        </div>

        <div class="menu flex flex-col h-full">

            <ul class="w-full">

                <li class="text-white p-3 {{ $title == 'dashboard' ? 'kasir-active' : '' }}">
                    <a href="/kasir/" class="flex gap-2">
                        <x-heroicon-o-home class="w-5" />
                        Dashboard
                    </a>
                </li>

                <li class="text-white p-3 {{ $title == 'product' ? 'kasir-active' : '' }}">
                    <a href="/kasir/product" class="flex gap-2">
                        <x-heroicon-o-squares-2x2 class="w-5" />
                        Product
                    </a>
                </li>

                <li class="text-white p-3 {{ $title == 'order' ? 'kasir-active' : '' }}">
                    <a href="/kasir/order" class="flex gap-2">
                        <x-heroicon-o-shopping-cart class="w-5" />
                        Order
                    </a>
                </li>

                <li class="text-white p-3 {{ $title == 'notification' ? 'kasir-active' : '' }}">
                    <a href="/kasir/notification" class="flex gap-2">
                        <x-heroicon-o-bell class="w-5" />
                        Notification
                    </a>
                </li>

                <li class="text-white p-3 {{ $title == 'report' ? 'kasir-active' : '' }}">
                    <a href="/kasir/report" class="flex gap-2">
                        <x-heroicon-o-chart-bar class="w-5" />
                        Report
                    </a>
                </li>

            </ul>

            <ul class="w-full mt-auto">

                <li class="text-white p-3">
                    <a href="/Dashboard" class="flex gap-2">
                        <x-heroicon-o-cog-8-tooth class="w-5" />
                        Settings
                    </a>
                </li>

            </ul>

        </div>

    </header>
