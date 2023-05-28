<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/panha.css')
{{--    @vite('resources/js/jquery-3.6.1.min.js')--}}
    <title>Browse campaign</title>
</head>
<body class="container border mx-auto">
    <div class="flex justify-center items-center relative mt-4 mb-16">
        <img src="{{asset('images/browse_all_thumbnail.png')}}" alt="Browse thumbnail" class="w-[100%]">
        <p class="caption absolute text-white text-4xl font-bold">Explore Project With <span
                class="logo_name">ShareSquare</span></p>
        <div class="items-center justify-between flex absolute shadow-lg border rounded-[10px] w-3/5 bottom-[-10%] p-8 bg-white z-10"
            style="">
            <div class="relative w-2/6">
                <input type="text"
                       class="w-[100%] pl-10 pr-4 py-5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Search">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
            </div>
            <div data-dropdown="0" class="hover:cursor-pointer campaign-filter relative" id="themeFilter">
                Theme
                <span>
                    <i class="fa fa-chevron-right ml-6 text-gray-400 icon-dropdown"></i>
                </span>
                {{--dropdown for theme--}}
                <div class="absolute shadow left-0 w-[250px] mt-2 p-2 rounded bg-white under-dropdown hidden">
                    <div class="relative w-full">
                        <input type="text"
                               class="w-[100%] pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Search">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
                    </div>
                    <label class="flex items-center mb-1 mt-2 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Education</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Health</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Child protection</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Agriculture</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Economic Growth</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Wildlife Conservation</span>
                    </label>
                </div>
            </div>
            {{--dropdown on donation type--}}
            <div data-dropdown="0" class="hover:cursor-pointer campaign-filter relative">
                Type of donation
                <span>
                    <i class="fa fa-chevron-right ml-6 text-gray-400  icon-dropdown"></i>
                </span>
                <div class="absolute shadow left-0 w-40 mt-2 p-2 rounded bg-white under-dropdown hidden">
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Cash</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Item</span>
                    </label>
                </div>
            </div>
            {{--dropdown on filter type--}}
            <div data-dropdown="0"  class="hover:cursor-pointer campaign-filter">
                Filter
                <span>
                    <i class="fa fa-chevron-right ml-6 text-gray-400 icon-dropdown"></i>
                </span>
                <div class="absolute shadow right-0 w-[200px] mt-2 p-2 rounded bg-white under-dropdown hidden">
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">All</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Top Funded Project</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Newest Project</span>
                    </label>
                    <label class="flex items-center mb-1 hover:cursor-pointer">
                        <input type="checkbox" class="hidden">
                        <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <span class="ml-5 text-gray-700">Project Closest to Goal</span>
                    </label>
                </div>

            </div>
        </div>
    </div>
    <div class="mt-[5rem] flex">
        <div class="mx-auto w-[50%] border rounded-[10px] p-5">
            <div class="flex justify-between">
                <div class="text-xl">Your filter</div>
                <a href="#" class="primary-color-letter text-xl">Clear</a>
            </div>
            <div class="grid grid-cols-3 gap-0">
                <div class="border-r p-3">
                    {{--Donation Themes--}}
                    <p class="filter-title text-gray-400">Themes</p>
                    <div class="mt-3">
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Education</span>
                        </label>
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Medical</span>
                        </label>

                    </div>
                </div>
                <div class="border-r p-3">
                    <p class="filter-title text-gray-400">Type of donation</p>
                    <div class="mt-3">
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Cash</span>
                        </label>
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Item</span>
                        </label>
                    </div>
                </div>
                <div class="p-3">
                    <p class="filter-title text-gray-400">Type of donation</p>
                    <div class="mt-3">
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Top Funded Project</span>
                        </label>
                        <label class="flex items-center mb-1 hover:cursor-pointer">
                            <input type="checkbox" class="hidden">
                            <span class="w-5 h-5 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-3 h-3" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                            <span class="ml-5 text-gray-700">Newest Project</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-3/4 mx-auto">
        <h1 class="text-4xl font-bold mt-5">Your Result</h1>
    </div>
    <div class="w-3/4 mx-auto">
        {{--one card campaing (still active)--}}
        <div class="w-[100%] my-5 border rounded-[10px] shadow p-4 grid grid-cols-4 gap-2">
            <div class="col-span-1">
                <img src="{{asset('images/thumbnails/campaign_thumnail.png')}}" class="w-[100%]">
            </div>
            <div class="col-span-3 grid grid-cols-7 gap-2">
                <div class="col-span-6 flex flex-col justify-between">
                    <p class="campaign-title font-bold text-xl">Building Decent School For Chhuk Village in Kompot</p>
                    <p class="campaign-theme mt-2 text-gray-500">Education</p>
                    <div>
                        <div class="mt-2 text-xl py-2 px-4 bg-red-100 inline-block rounded-[10px] primary-color-letter">
                            <i class="fa fa-bolt fa-solid"></i>
                            <span class="ml-3">Feature</span>
                        </div>
                    </div>
                    <p class="text-xs mt-2 text-justify">
                        Help us provide the children of Chhuk Village in Kompot with improved access to education by supporting our efforts to build a quality school and equip them with the knowledge and skills they need for a brighter future.
                    </p>
                    <div class="progress-section flex items-center justify-between mt-2">
                        <div class="w-[90%] relative">
                            <div class="w-[100%] h-3 rounded bg-gray-200">
                            </div>
                            <div class="w-[50%] h-3 rounded bg-red-500 absolute top-0 left-0">
                            </div>
                        </div>
                        <span>50%</span>
                    </div>
                    <div class="mt-2 flex justify-between">
                        <span class="">Raised: <span class="font-bold">$2500</span></span>
                        <span class="">Goal: <span class="font-bold">$5000</span></span>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="inline-block py-3 px-8 font-bold text-white bg-red-500 rounded-[10px]">Donate Now</a>
                    </div>
                </div>
                <div class="col-span-1 border justify-between rounded-xl grid grid-cols-1 grid-rows-3">
                        <div class="border-b w-[100%] flex justify-center content-center items-center">
                            <div class="text-center">
                                <i class="far fa-user text-2xl"></i>
                                <div class="text-2xl view-number">2K</div>
                                <div class="text-xs text-gray-500 view-number">view</div>
                            </div>
                        </div>
                        <a href="" class="border-b w-[100%] flex justify-center content-center items-center">
                            <div class="text-center">
                                <i class="fa fa-share text-2xl"></i>
                                <div class="text-xl text-gray-500 view-number">Share</div>
                            </div>
                        </a>
                    <div class="w-[100%] flex justify-center content-center items-center">
                        <div class="text-center">
                            <i class="far fa-clock text-2xl"></i>
                            <div class="text-2xl view-number">36 days</div>
                            <div class="text-xs text-gray-500 view-number">left</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{--one card campaign (Goal reach)--}}
        <div class="w-[100%] my-5 border rounded-[10px] shadow p-4 grid grid-cols-4 gap-2">
            <div class="col-span-1">
                <img src="{{asset('images/thumbnails/campaign_thumnail.png')}}" class="w-[100%]">
            </div>
            <div class="col-span-3 grid grid-cols-7 gap-2">
                <div class="col-span-6 flex flex-col justify-between">
                    <p class="campaign-title font-bold text-xl">Building Decent School For Chhuk Village in Kompot</p>
                    <p class="campaign-theme mt-2 text-gray-500">Education</p>
                    <div>
                        <div class="mt-2 text-xl py-2 px-4 bg-red-500 inline-block rounded-[10px] primary-color-letter">
                            <div class="flex text-white">
                                <span class="">
                                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.2131 8.93662H22.8869L17.1794 14.6416C17.376 15.1426 17.394 15.696 17.2306 16.2088C17.0671 16.7215 16.7321 17.1623 16.2818 17.4571C15.8316 17.7519 15.2935 17.8826 14.7582 17.8274C14.2229 17.7721 13.7229 17.5342 13.3424 17.1537C12.9618 16.7731 12.7239 16.2731 12.6686 15.7378C12.6134 15.2025 12.7441 14.6644 13.0389 14.2142C13.3337 13.7639 13.7745 13.4289 14.2873 13.2654C14.8 13.102 15.3534 13.12 15.8544 13.3166L21.5606 7.61037V5.28412C21.5608 4.97285 21.6844 4.67434 21.9044 4.45412L24.0669 2.29162C24.1068 2.25123 24.1571 2.22254 24.2122 2.20865C24.2672 2.19477 24.3251 2.19623 24.3794 2.21287C24.4906 2.24537 24.5731 2.33787 24.5956 2.45162L25.1706 5.32787L28.0456 5.90287C28.1581 5.92537 28.2506 6.00787 28.2831 6.11912C28.2996 6.17316 28.301 6.23064 28.2874 6.28545C28.2737 6.34026 28.2455 6.39034 28.2056 6.43037L26.0419 8.59287C25.9331 8.70183 25.8039 8.78827 25.6617 8.84725C25.5195 8.90623 25.3671 8.9366 25.2131 8.93662Z" fill="white"/>
                                        <path d="M3.28125 15.5C3.28125 18.608 4.5159 21.5887 6.71359 23.7864C8.91128 25.9841 11.892 27.2188 15 27.2188C16.5389 27.2188 18.0628 26.9156 19.4846 26.3267C20.9064 25.7378 22.1982 24.8746 23.2864 23.7864C24.3746 22.6982 25.2378 21.4064 25.8267 19.9846C26.4156 18.5628 26.7188 17.0389 26.7188 15.5C26.7188 14.3775 26.5613 13.2925 26.2675 12.2663C26.2091 12.0306 26.2444 11.7815 26.3659 11.5714C26.4875 11.3612 26.6858 11.2064 26.9192 11.1395C27.1526 11.0727 27.4028 11.0989 27.6172 11.2128C27.8316 11.3266 27.9935 11.5192 28.0688 11.75C28.4112 12.9425 28.5938 14.2 28.5938 15.5C28.5938 23.0075 22.5075 29.0938 15 29.0938C7.4925 29.0938 1.40625 23.0075 1.40625 15.5C1.40625 7.99251 7.4925 1.90626 15 1.90626C16.2688 1.90501 17.53 2.08126 18.75 2.43001C18.869 2.46337 18.9801 2.51992 19.0772 2.59641C19.1742 2.67289 19.2551 2.76779 19.3154 2.87567C19.3756 2.98354 19.4139 3.10225 19.4281 3.22498C19.4423 3.3477 19.4321 3.47202 19.3981 3.59079C19.364 3.70956 19.3069 3.82044 19.2299 3.91704C19.1529 4.01365 19.0575 4.09408 18.9493 4.15372C18.8411 4.21335 18.7222 4.25101 18.5994 4.26453C18.4766 4.27805 18.3523 4.26717 18.2337 4.23251C17.1821 3.93217 16.0937 3.78028 15 3.78126C11.892 3.78126 8.91128 5.01591 6.71359 7.2136C4.5159 9.41129 3.28125 12.392 3.28125 15.5Z" fill="white"/>
                                        <path d="M8.90471 15.4997C8.9082 16.3276 9.08039 17.1462 9.41077 17.9053C9.74115 18.6644 10.2228 19.3483 10.8263 19.915C11.4298 20.4818 12.1424 20.9197 12.9208 21.2018C13.6991 21.484 14.5268 21.6045 15.3533 21.5561C16.1798 21.5077 16.9878 21.2914 17.7279 20.9203C18.4679 20.5493 19.1246 20.0312 19.6579 19.3979C20.1911 18.7645 20.5896 18.0292 20.8291 17.2367C21.0686 16.4442 21.1441 15.6111 21.051 14.7885C21.0247 14.6219 21.044 14.4513 21.1068 14.2947C21.1697 14.1382 21.2736 14.0016 21.4078 13.8994C21.5419 13.7971 21.7012 13.7331 21.8688 13.714C22.0364 13.6949 22.206 13.7215 22.3597 13.791C22.6735 13.931 22.8847 14.2297 22.9122 14.5722C23.1063 16.2163 22.7834 17.88 21.9883 19.332C21.1933 20.7841 19.9656 21.9524 18.4759 22.6746C16.9863 23.3967 15.3086 23.6368 13.6762 23.3615C12.0438 23.0862 10.5377 22.3092 9.36721 21.1385C8.19708 19.969 7.41987 18.4644 7.14336 16.8333C6.86686 15.2023 7.10478 13.5256 7.82411 12.0358C8.54344 10.546 9.70854 9.31701 11.1578 8.51922C12.6071 7.72143 14.2687 7.3944 15.9122 7.58349C16.0365 7.59502 16.1571 7.63123 16.2672 7.69001C16.3773 7.74879 16.4745 7.82894 16.5532 7.92578C16.6319 8.02262 16.6904 8.1342 16.7254 8.25396C16.7604 8.37373 16.7712 8.49928 16.757 8.62325C16.7429 8.74723 16.7042 8.86713 16.6431 8.97593C16.582 9.08473 16.4998 9.18025 16.4013 9.25688C16.3028 9.3335 16.1901 9.3897 16.0696 9.42217C15.9491 9.45465 15.8234 9.46274 15.6997 9.44599C14.846 9.34729 13.9811 9.43024 13.1617 9.68941C12.3423 9.94858 11.5869 10.3781 10.9453 10.9498C10.3036 11.5215 9.79006 12.2224 9.43838 13.0065C9.08671 13.7907 8.90484 14.6403 8.90471 15.4997Z" fill="white"/>
                                    </svg>
                                </span>
                                <span class="ml-3">Goal Reached</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-xs mt-2 text-justify">
                        Help us provide the children of Chhuk Village in Kompot with improved access to education by supporting our efforts to build a quality school and equip them with the knowledge and skills they need for a brighter future.
                    </p>
                    <div class="progress-section flex items-center justify-between mt-2">
                        <div class="w-[90%] relative">
                            <div class="w-[100%] h-3 rounded bg-gray-200">
                            </div>
                            <div class="w-[100%] h-3 rounded bg-red-500 absolute top-0 left-0">
                            </div>
                        </div>
                        <span>100%</span>
                    </div>
                    <div class="mt-2 flex justify-between">
                        <span class="">Raised: <span class="font-bold">$5000</span></span>
                        <span class="">Goal: <span class="font-bold">$5000</span></span>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="inline-block py-3 px-8 font-bold text-white bg-red-300 rounded-[10px]">Donate Now</a>
                    </div>
                </div>

                <div class="col-span-1 border justify-between rounded-xl grid grid-cols-1 grid-rows-3">
                    <div class="border-b w-[100%] flex justify-center content-center items-center">
                        <div class="text-center">
                            <i class="far fa-user text-2xl"></i>
                            <div class="text-2xl view-number">2K</div>
                            <div class="text-xs text-gray-500 view-number">view</div>
                        </div>
                    </div>
                    <a href="#" class="border-b w-[100%] flex justify-center content-center items-center">
                        <div class="text-center">
                            <i class="fa fa-share text-2xl"></i>
                            <div class="text-xl text-gray-500 view-number">Share</div>
                        </div>
                    </a>
                    <div class="w-[100%] flex justify-center content-center items-center">
                        <div class="text-center">
                            <i class="far fa-clock text-2xl"></i>
                            <div class="text-2xl view-number">36 days</div>
                            <div class="text-xs text-gray-500 view-number">left</div>
                        </div>
                    </div>
                </div>

            </div>
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

                        <div class="flex flex-col justify-between gap-3">
                            <div class="grid grid-cols-3" role="group">
                                <div class="col-span-1 flex">
                                    <button type="button"
                                            class="w-full inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-l-lg">
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
                                </div>
                                <div class="col-span-1 flex">
                                    <button type="button"
                                            class="w-full inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border-t border-b border-gray-200">
                                        <div class="flex justify-center items-center mx-auto">
                                            <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                                            </svg>
                                            <div class="flex inline-block justify-center">
                                                <span class="font-bold mx-1">25</span>
                                                <span class=""> Share</span>
                                            </div>
                                        </div>

                                    </button>
                                </div>

                                <div class="col-span-1">
                                    <button type="button"
                                            class="w-full inline-flex items-center px-4 py-2 text-sm font-medium text-textColorWithLightBg bg-transparent border border-gray-200 rounded-r-md">
                                        <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                            <path
                                                d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                        </svg>
                                        <span class="font-bold mx-1">36</span>
                                        <span>Day Left</span>


                                    </button>
                                </div>
                            </div>
                            <div class="inline-flex" role="group">
                                <button type="button" class="py-3 px-8 border rounded-xl bg-red-500 text-white hover:bg-red-700 hover:cursor-pointer w-full md:w-auto lg:w-auto">Donation Now</button>
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
    </div>
    <div id="modalBackground" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 items-center hidden">
    </div>
    @vite('resources/js/panha.js')
</body>
</html>
