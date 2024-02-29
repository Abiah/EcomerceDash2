<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Interview') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <div class="w-full h-screen ">

            <!-- Page -->
            <div class="flex flex-row h-screen">
                <!-- sidebar -->
                <div class="w-1/6 h-screen hidden md:block bg-black p-2">
                    <p class=" text-center text-white text-xl mt-8">Ecom-Dashboard</p>
                    <div class="flex flex-col gap-6 justify-evenly  mt-12 text-white">
                        <div class="flex gap-2 border-b-2 border-black"><img src="{{ asset('asset/images/dash.gif') }}"
                                alt="" class="w-5">
                            {{-- <a :active="request() -> routeIs('dashboard')" href="{{ route('dashboard') }}"> Dashboard</a> --}}
                            <x-nav-link class="text-white" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>

                        <div class="flex gap-2 border-b-2 border-black"><img
                                src="{{ asset('asset/images/product.gif') }} " alt="" class="w-5">
                            <x-nav-link class="text-white" :href="route('product')" :active="request()->routeIs('product')">
                                {{ __('Product') }}
                            </x-nav-link>
                        </div>

                        <div class="flex gap-2 border-b-2 border-black"><img
                                src="{{ asset('asset/images/product.gif') }} " alt="" class="w-5">
                            <x-nav-link class="text-white" :href="route('product_list')" :active="request()->routeIs('product_list')">
                                {{ __('List Product') }}
                            </x-nav-link>
                        </div>


                        <div class="flex gap-2 border-b-2 border-black"><img
                                src="{{ asset('asset/images//orders.gif') }}" alt="" class="w-5">
                            <x-nav-link class="text-white" :href="route('order')" :active="request()->routeIs('order')">
                                {{ __('Orders') }}
                            </x-nav-link>
                        </div>
                        <div class="flex gap-2 border-b-2 border-black"><img src="{{ asset('asset/images/dash.gif') }}"
                                alt="" class="w-5">
                            <x-nav-link class="text-white" :href="route('complaint')" :active="request()->routeIs('complaint')">
                                {{ __('Complaint') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>

                <!-- main content -->
                <div class="w-full md:w-5/6   h-screen overflow-y-scroll">
                    <!-- header in main for large screens contents -->
                    <div class="hidden md:block">
                        <div class="  bg-slate-300 h-12 flex justify-between items-center top-0 sticky">
                            <div>
                                <img src="{{ asset('asset/images/company-logo.png') }}" class="h-12" alt="">
                            </div>
                            <div>
                                <label for="" class="font-mono">Company Name</label>
                            </div>
                            <div class="flex justify-end">
                                <div class="flex items-center justify-between">
                                    <div><img src="{{ asset('asset/images/bell.gif') }}" class="w-5 mr-5"
                                            alt=""></div>
                                    <div>
                                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <button
                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                        <img src="{{ asset('asset/images/profile.png') }}"
                                                            class="h-10 w-10 rounded-full" alt="">

                                                        <div class="ms-1">
                                                            <svg class="fill-current h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </x-slot>

                                                <x-slot name="content">
                                                    <x-dropdown-link :href="route('profile.edit')">
                                                        {{ __('Profile') }}
                                                    </x-dropdown-link>

                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
</body>

</html>
