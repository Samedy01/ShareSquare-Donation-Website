@extends('layouts.otherprofileheader')

@section('otherprofile_contents')

<div class="w-screen px-10 py-5 mx-auto">
    {{-- Overview Card --}}
    <div class="px-4 py-4 mx-auto m-4">
        <h1 class="text-2xl font-bold">Overview </h1>

    </div>

    <div
        class="px-4 w-full mx-auto flex flex-wrap -mb-px text-sm font-medium text-promptTextColor justify-center items-center gap-5 lg:justify-start">
        {{-- All Campaign --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Campaign</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow"
                        onclick="toggleDropdown('dropdownMenu1')">
                        <span id="dropdownTitle1">All</span>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="dropdownMenu1"
                        class="absolute right-0 w-44 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-200 rounded-md shadow-lg focus:outline-none hidden">
                        <ul class="py-1">
                            <li><a href="#" onclick="selectItem('All', 'dropdownTitle1')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All</a></li>
                            <li><a href="#" onclick="selectItem('Donating', 'dropdownTitle1')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Donating</a></li>
                            <li><a href="#" onclick="selectItem('Raising', 'dropdownTitle1')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Raising</a></li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">10</h5>
            </div>
        </div>

        {{-- Total Donation (Dollar) --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Total Donation (Dollar)</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow"
                        onclick="toggleDropdown('dropdownMenu2')">
                        <span id="dropdownTitle2">All Time Donation</span>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="dropdownMenu2"
                        class="absolute right-0 w-44 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-200 rounded-md shadow-lg focus:outline-none hidden">
                        <ul class="py-1">
                            <li><a href="#" onclick="selectItem('All Time Donation', 'dropdownTitle2')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Time
                                    Donation</a></li>
                            <li><a href="#" onclick="selectItem('This Week', 'dropdownTitle2')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">This Week</a></li>
                            <li><a href="#" onclick="selectItem('Last Week', 'dropdownTitle2')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Last Week</a></li>
                            <li><a href="#" onclick="selectItem('Last Month', 'dropdownTitle2')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Last Month</a></li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">$44.56</h5>
            </div>
        </div>

        {{-- Total Donation (KHR) --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Total Donation (KHR)</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow"
                        onclick="toggleDropdown('dropdownMenu3')">
                        <span id="dropdownTitle3">All Time Donation</span>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="dropdownMenu3"
                        class="absolute right-0 w-44 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-200 rounded-md shadow-lg focus:outline-none hidden">
                        <ul class="py-1">
                            <li><a href="#" onclick="selectItem('All Time Donation', 'dropdownTitle3')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Time
                                    Donation</a></li>
                            <li><a href="#" onclick="selectItem('This Week', 'dropdownTitle3')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">This Week</a></li>
                            <li><a href="#" onclick="selectItem('Last Week', 'dropdownTitle3')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Last Week</a></li>
                            <li><a href="#" onclick="selectItem('Last Month', 'dropdownTitle3')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Last Month</a></li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">KHR 200,000</h5>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Total Item Donation</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow"
                        onclick="toggleDropdown('dropdownMenu4')">
                        <span id="dropdownTitle4">All</span>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="dropdownMenu4"
                        class="absolute right-0 w-44 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-200 rounded-md shadow-lg focus:outline-none hidden">
                        <ul class="py-1">
                            <li><a href="#" onclick="selectItem('All', 'dropdownTitle4')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All</a></li>
                            <li><a href="#" onclick="selectItem('Donating', 'dropdownTitle4')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Donating</a></li>
                            <li><a href="#" onclick="selectItem('Raising', 'dropdownTitle4')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Raising</a></li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">10</h5>
            </div>
        </div>

        <div id="accordion-arrow-icon" data-accordion="open" class="w-full mx-auto py-4">
            <h2 id="accordion-arrow-icon-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-900 bg-gray-100 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true"
                    aria-controls="accordion-arrow-icon-body-1">
                    <h5 class=" text-xl font-bold text-gray-900 dark:text-white">My contact information</h5>
                </button>
            </h2>

            <div class="border border-gray-200 shadow">
                <ul
                    class="flex flex-wrap -mb-px text-sm font-medium text-center text-promptTextColor justify-center items-center">
                    <a href="#"
                        class="w-full sm:w-auto bg-white focus:outline-none text-primaryTextColor inline-flex items-center justify-center px-4 py-2.5">
                        <svg fill="primaryTextColor" class="mr-3 w-7 h-7" aria-hidden="true" focusable="false"
                            data-prefix="fab" data-icon="apple" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>

                        <div class="text-left">
                            <div class="mb-1 text-s text-promptTextColor">Email</div>
                            <div class="-mt-1 font-sans text-base font-semibold">sovortey1403@gmail.com</div>
                        </div>
                    </a>
                    {{-- class="inline-flex p-4 text-mainColor border-b-2 border-mainColor rounded-t-lg active group"
                    --}}
                    <li class="mr-2">
                        <a href="#"
                            class="w-full sm:w-auto bg-white focus:outline-none text-primaryTextColor inline-flex items-center justify-center px-4 py-2.5">
                            <svg fill="primaryTextColor" class="mr-3 w-7 h-7" aria-hidden="true" focusable="false"
                                data-prefix="fab" data-icon="apple" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>

                            <div class="text-left">
                                <div class="mb-1 text-s text-promptTextColor">Email</div>
                                <div class="-mt-1 font-sans text-base font-semibold">sovortey1403@gmail.com</div>
                            </div>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="w-full sm:w-auto bg-white focus:outline-none text-primaryTextColor inline-flex items-center justify-center px-4 py-2.5">
                            <svg fill="primaryTextColor" class="mr-3 w-7 h-7" aria-hidden="true" focusable="false"
                                data-prefix="fab" data-icon="apple" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>

                            <div class="text-left">
                                <div class="mb-1 text-s text-promptTextColor">Email</div>
                                <div class="-mt-1 font-sans text-base font-semibold">sovortey1403@gmail.com</div>
                            </div>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="w-full sm:w-auto bg-white focus:outline-none text-primaryTextColor inline-flex items-center justify-center px-4 py-2.5">
                            <svg fill="primaryTextColor" class="mr-3 w-7 h-7" aria-hidden="true" focusable="false"
                                data-prefix="fab" data-icon="apple" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>

                            <div class="text-left">
                                <div class="mb-1 text-s text-promptTextColor">Email</div>
                                <div class="-mt-1 font-sans text-base font-semibold">sovortey1403@gmail.com</div>
                            </div>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="w-full sm:w-auto bg-white focus:outline-none text-primaryTextColor inline-flex items-center justify-center px-4 py-2.5">
                            <svg fill="primaryTextColor" class="mr-3 w-7 h-7" aria-hidden="true" focusable="false"
                                data-prefix="fab" data-icon="apple" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>

                            <div class="text-left">
                                <div class="mb-1 text-s text-promptTextColor">Email</div>
                                <div class="-mt-1 font-sans text-base font-semibold">sovortey1403@gmail.com</div>
                            </div>
                        </a>
                </ul>
            </div>
        </div>



        <!-- Add more similar cards with unique identifiers (dropdownMenu2, dropdownMenu3, and so on) -->
        <div class="w-full flex items-center justify-between">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold mr-2 text-primaryTextColor">Campaign </h1>
                <span
                    class="bg-secondaryColor text-mainColor text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">10</span>
            </div>
            <button type="button"
                class="text-primaryTextColor bg-white hover:underline font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                View all
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


        <div
            class="grid grid-cols-1 grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 items-center justify-between w-full gap-5 md:gap-5 lg:gap-5 mb-5">

            <a href="#"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  md:flex-row ">

                <div class="border bg-white rounded-lg shadow-lg flex flex-col md:flex-row inline-block">
                    <div class="overflow-hidden">
                        <img class="object-cover block h-auto flex-none bg-cover lg:h-full md:h-full rounded-t-lg md:rounded-none md:rounded-l-lg rounded-tl-[7px] rounded-bl-[7px]"
                            src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </div>
                    <div
                        class="flex flex-col p-4 leading-normal justify-center lg:justify-between my-2 md:my-2 lg:my-5">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Building Decent
                                School For Chhuk Village in Kompot</h5>
                            <p class="campaign-theme text-gray-500 mb-2">Education</p>
                            <span class="inline-block mb-2">
                                <span
                                    class="bg-secondaryColor text-mainColor text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded border border-secondaryColor">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z" />
                                    </svg>
                                    <span class="inline-block">Featured</span>
                                </span>
                            </span>
                            <p class="mb-3 font-normal text-gray-700">
                                Help us provide the children of Chhuk Village in Kompot with improved access to
                                education by
                                supporting our efforts to build a quality school and equip them with the knowledge and
                                skills they need for a brighter future.
                            </p>
                        </div>

                        <div>
                            <div class="w-full mb-1 bg-gray-200 rounded-full">
                                <div class="bg-mainColor text-xs font-medium text-white text-center p-0.5 leading-none rounded-full"
                                    style="width: 45%"> 50%</div>
                            </div>
                            <div class="flex justify-between mb-1">
                                <div class="flex items-center">
                                    <span class="text-gray-500">Raised:</span>
                                    <span class="text-gray-800 font-bold ml-1">$1250</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-gray-500">Goal:</span>
                                    <span class="text-gray-800 font-bold ml-1">$2500</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap justify-between gap-3">
                            <div class=" inline-flex" role="group">
                                <button type="button"
                                    class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-l-lg">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <div class="flex inline-block">
                                        <span class="font-bold mx-1">1K</span>
                                        <span> View</span>
                                    </div>

                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border-t border-b border-gray-200">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                                    </svg>
                                    <div class="flex inline-block">
                                        <span class="font-bold mx-1">25</span>
                                        <span> Share</span>
                                    </div>

                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-r-md">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <span class="font-bold mx-1">36</span>
                                    <span>Day Left</span>


                                </button>
                            </div>
                            <div class="inline-flex " role="group">
                                <button type="button"
                                    class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-l-lg hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <path fill-rule="evenodd"
                                            d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                    </svg>
                                    Detail
                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border-t border-b border-gray-200 hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                    </svg>
                                    Edit
                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-r-md hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  md:flex-row ">

                <div class="border bg-white rounded-lg shadow-lg flex flex-col md:flex-row inline-block">
                    <div class="overflow-hidden">
                        <img class="object-cover block h-auto flex-none bg-cover lg:h-full md:h-full rounded-t-lg md:rounded-none md:rounded-l-lg rounded-tl-[7px] rounded-bl-[7px]"
                            src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </div>
                    <div
                        class="flex flex-col p-4 leading-normal justify-center lg:justify-between my-2 md:my-2 lg:my-5">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Building Decent
                                School For Chhuk Village in Kompot</h5>
                            <p class="campaign-theme text-gray-500 mb-2">Education</p>
                            <span class="inline-block mb-2">
                                <span
                                    class="bg-secondaryColor text-mainColor text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded border border-secondaryColor">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z" />
                                    </svg>
                                    <span class="inline-block">Featured</span>
                                </span>
                            </span>
                            <p class="mb-3 font-normal text-gray-700">
                                Help us provide the children of Chhuk Village in Kompot with improved access to
                                education by
                                supporting our efforts to build a quality school and equip them with the knowledge and
                                skills they need for a brighter future.
                            </p>
                        </div>

                        <div>
                            <div class="w-full mb-1 bg-gray-200 rounded-full">
                                <div class="bg-mainColor text-xs font-medium text-white text-center p-0.5 leading-none rounded-full"
                                    style="width: 45%"> 50%</div>
                            </div>
                            <div class="flex justify-between mb-1">
                                <div class="flex items-center">
                                    <span class="text-gray-500">Raised:</span>
                                    <span class="text-gray-800 font-bold ml-1">$1250</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-gray-500">Goal:</span>
                                    <span class="text-gray-800 font-bold ml-1">$2500</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap justify-between gap-3">
                            <div class=" inline-flex" role="group">
                                <button type="button"
                                    class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-l-lg">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <div class="flex inline-block">
                                        <span class="font-bold mx-1">1K</span>
                                        <span> View</span>
                                    </div>

                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border-t border-b border-gray-200">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                                    </svg>
                                    <div class="flex inline-block">
                                        <span class="font-bold mx-1">25</span>
                                        <span> Share</span>
                                    </div>

                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-r-md">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <span class="font-bold mx-1">36</span>
                                    <span>Day Left</span>


                                </button>
                            </div>
                            <div class="inline-flex " role="group">
                                <button type="button"
                                    class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-l-lg hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <path fill-rule="evenodd"
                                            d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                    </svg>
                                    Detail
                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border-t border-b border-gray-200 hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                    </svg>
                                    Edit
                                </button>
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-r-md hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>





        <div class="w-full flex items-center justify-between">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold mr-2 text-primaryTextColor">History </h1>
                <span
                    class="bg-secondaryColor text-mainColor text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">10</span>
            </div>
            <button type="button"
                class="text-primaryTextColor bg-white hover:underline font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                View all
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div
            class="grid grid-cols-1 grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 items-center justify-between w-full gap-5 md:gap-5 lg:gap-5">

            <div class="border bg-white rounded-lg shadow-lg flex flex-col md:flex-row inline-block">
                <div class="overflow-hidden">
                    <img class="block h-auto w-full md:w-48 lg:w-48 flex-none bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                        src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                </div>
                <div class="flex flex-col justify-between p-4 md:w-1/2">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Title</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                            euismod
                            magna nec urna finibus finibus.</p>
                    </div>
                    <button type="button"
                        class="justify-center items-center text-mainColor border bg-white hover:bg-mainColor hover:text-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        View Campaign
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="border bg-white rounded-lg shadow-lg flex flex-col md:flex-row ">
                <div class="overflow-hidden">
                    <img class="block h-auto w-full md:w-48 lg:w-48 flex-none bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                        src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                </div>
                <div class="flex flex-col justify-between p-4 md:w-1/2">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Title</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                            euismod
                            magna nec urna finibus finibus.</p>
                    </div>
                    <button type="button"
                        class="justify-center items-center text-mainColor border bg-white hover:bg-mainColor hover:text-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        View Campaign
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="border bg-white rounded-lg shadow-lg flex flex-col md:flex-row ">
                <div class="overflow-hidden">
                    <img class="block h-auto w-full md:w-48 lg:w-48 flex-none bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                        src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                </div>
                <div class="flex flex-col justify-between p-4 md:w-1/2">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Title</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                            euismod
                            magna nec urna finibus finibus.</p>
                    </div>
                    <button type="button"
                        class="justify-center items-center text-mainColor border bg-white hover:bg-mainColor hover:text-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        View Campaign
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
