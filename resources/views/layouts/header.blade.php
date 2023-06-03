@php
    $action = Route::currentRouteAction();
//    dump($action);
    $controllerAction = class_basename($action);
//    dump($action);
//    dd('hi');
    list($controller, $method) = explode('@', $controllerAction);
@endphp

<!-- Navigation -->
<nav class="sticky top-0 bg-white border-gray-200 shadow-md md:shadow-lg z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{ asset('img/logo/sharesquare-logo.png')}}" alt="ShareSqure Logo" class="h-8 md:h-8 lg:h-14">
            <!-- Logo Text -->
            <div class="text-left">
                <p class="text-mainColor font-bold text-sm md:text-sm lg:text-xl">ShareSquare</p>
                <p class="text-mainColor text-xxs md:text-xs lg:text-xs ">Share the love, Change the world</p>
            </div>
        </a>
<div class="flex md:order-2 space-x-3">
    <!-- Search Icon Button -->
    <button class="text-gray-500 hover:text-gray-900">
        <svg aria-hidden="true" class="w-3 h-3 md:w-5 md:h-5 lg:w-5 lg:h-5 text-red-500 dark:text-red-400"
            fill="none" stroke="gray" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>
    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
        class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400"
        type="button">
        <svg class="w-3 h-3 md:w-5 md:h-5 lg:w-6 lg:h-6" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
            </path>
        </svg>
        <div class="relative flex">
            <div
                class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900">
            </div>
        </div>
    </button>
    @if(!Auth::check())
    <button type="button"
        class="text-white bg-mainColor hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-base lg:text-lg px-2 py-1 md:px-4 md:py-2 lg:px-4 lg:py-2 text-center mr-3 md:mr-0 ">Get
        started</button>
    @else
    <div class="sm:flex sm:items-center sm:ml-6">
        {{--                Add Profile Icon--}}
        <a href="{{route('profile.overview')}}" class="flex items-center">
            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('images/login.jpg')}}" alt="User dropdown">
            {{--                    <img class="w-8 h-8 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ asset('images/logo.jpg')}}" alt="Bordered avatar">--}}
        </a>

        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.overview')">
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
    @endif
    <button data-collapse-toggle="navbar-cta" type="button"
        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
        aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
</div>
<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul
        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
        <li>
            <a href="{{route('dashboard')}}"
                class="block py-2 pl-3 pr-4 bg-mainColor rounded md:bg-transparent {{$controller == 'HomeController' && $method == 'index' ? 'text-mainColor':'text-primaryTextColor'}} md:p-0 md:dark:mainColor"
                aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{route('campaigns.index')}}"
                class="block py-2 pl-3 pr-4 {{$controller == 'CampaignController' ? 'text-mainColor':'text-primaryTextColor'}} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-mainColor md:p-0">All
                Campaign</a>
        </li>
    </ul>
</div>


</div>
</nav>
