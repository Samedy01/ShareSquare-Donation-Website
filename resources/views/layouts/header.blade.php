<!-- Navigation -->
<nav class="sticky top-0 bg-white border-gray-200 shadow-md md:shadow-lg z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{ asset('storage/sharesquare-logo.png')}}" alt="ShareSqure Logo" class="h-8 md:h-8 lg:h-14">
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
            <button type="button"
                class="text-white bg-mainColor hover:bg-secondaryColor focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-base lg:text-lg px-2 py-1 md:px-4 md:py-2 lg:px-4 lg:py-2 text-center mr-3 md:mr-0 ">Get
                started</button>
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
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white bg-mainColor rounded md:bg-transparent md:text-mainColor md:p-0 md:dark:mainColor"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-primaryTextColor rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-mainColor md:p-0">All
                        Campaign</a>
                </li>
            </ul>
        </div>


    </div>
</nav>
