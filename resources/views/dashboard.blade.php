{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}

{{--    </x-slot>--}}

{{--    <div class="py-2">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>
    {{--Hero--}}
@extends('layouts.layout')
@section('contents')
    <section class="text-gray-600 body-font" style="background-image: url('{{ asset('images/charity-unsplash.jpg') }}'); background-size: cover; background-position: center; filter: brightness(90%)">
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                </div>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <!-- Rest of the content -->
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <head>
                            <link rel="stylesheet" href="app.css">
                        </head>
                        <body>
                        <h1 class="my-title1 ">Unleash Your Generosity</h1>
                        <h1 class="my-title2">Transform Lives: Join</h1>
                        <h1 class="my-title3">ShareSquare Today!</h1>
                        </body>
                            <div class="w-[360px] h-[54px] relative">
                                <div class="w-[210px] h-[54px] px-4 py-[12px] left-[220px] top-[150px] absolute rounded border border-white justify-center items-center gap-2 inline-flex transition-all duration-200 border border-transparent hover:border-red-500">
                                    <div class="w-0 h-0 relative"></div>
                                        <button class="text-right-[20px] text-white text-[18px] font-normal" onclick="window.location='{{route('campaigns.create')}}'">
                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                        {{ __("content.Create Campaign") }}</button>
                                    </div>
                                <div class="w-[196px] h-[54px] px-8 py-4 left-[3px] top-[150px] absolute bg-red-600 rounded backdrop-blur-[80px] justify-center items-center gap-[10px] inline-flex transition-all duration-200 border border-transparent hover:bg-red-700 hover:border-red-500">
                                    <button class="text-right text-white text-[18px] font-semibold">{{ __("content.Donate Now") }}</button>
                                </div>
                            </div>
                    </div>
                    <div class="w-[1304px] h-[150px] p-[35px] left-[0px] justify-between items-center gap-[22px] inline-flex">
                        <div class="left-[0px] top-[330px] text-right text-white text-[18px] font-semibold"></div>
                        <div class="text-right text-white text-[18px] font-semibold"></div>
                    </div>

                    </div>
                <div class="w-[1304px] h-[150px] p-[35px] left-[0px] justify-between items-center gap-[22px] inline-flex">
                    <div class="left-[0px] top-[330px] text-right text-white text-[18px] font-semibold">100 campaign created</div>
                    <div class="w-[659.50px] h-[0px] border border-neutral-200 backdrop-blur-[30px]"></div>
                    <div class="text-right text-white text-[18px] font-semibold">58 donations collected</div>
                </div>
            </section>
        </div>
    </section>


    {{--About Us--}}
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-20">
            <div class="flex flex-col justify-start items-start space-y-10">
                <div class="text-cyan-900 text-2xl font-bold uppercase tracking-widest">_______ What we do</div>
                <div class="text-cyan-900 text-4xl font-bold leading-tight">Empowering Positive Change: Discover the Mission of ShareSquare</div>
                <div class="text-gray-700 text-lg font-normal leading-relaxed">ShareSquare is a purpose-driven platform dedicated to empowering individuals and organizations to create and support impactful fundraising campaigns. Our mission is to provide a user-friendly space where generosity meets social causes, fostering a community that drives positive change. Join us as we strive to make a meaningful difference in education, health, disaster relief, and more through collective action and shared values.</div>
            </div>
            <div class="flex justify-center items-center">
                <img class="max-w-full h-auto rounded-2xl" src="{{ asset('images/charity-unsplash.jpg') }}" alt="Charity Unsplash" />
            </div>
        </div>
    </div>
{{-- Card View 1 --}}

    <section class="text-gray-800 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class=" items-start text-right my-0 ml-20 sm:ml-10">
                    <div class="text-cyan-900 text-lg md:text-2xl lg:text-[20px] font-bold uppercase tracking-widest mb-10">_______ Featured Donation Campaign</div>
                    <div class="w-full sm:w-auto text-cyan-900 text-base md:text-lg lg:text-[48px] font-bold leading-10 mb-10">We are all about creating a place where girls can thrive</div>
                </div>
                <div class="p-5 md:w-1/3 hover:bg-gray-200">
                    <div class="relative h-full rounded-lg overflow-hidden">
                        <div class="absolute inset-0">
                            <img src="{{ asset('images/charity-unsplash.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg relative z-10">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Donate Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 md:w-1/3 hover:bg-gray-200">
                    <div class="relative h-full rounded-lg overflow-hidden">
                        <div class="absolute inset-0">
                           <img src="{{ asset('images/charity-unsplash.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="relative w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Donate Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 md:w-1/3 hover:bg-gray-200">
                    <div class="relative h-full rounded-lg overflow-hidden">
                        <div class="absolute inset-0">
                            <img src="{{ asset('images/charity-unsplash.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="relative w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Donate Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--    View Card 2  --}}
    <section class="text-gray-800 bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

                <div class=" items-start text-left my-0 ml-4">
                    <div class="text-cyan-900 text-lg md:text-xl lg:text-xl font-bold uppercase tracking-widest mb-10">Featured Item Donation Campaign _______</div>
                    <div class="w-full sm:w-auto text-cyan-900 text-base md:text-lg lg:text-[48px] font-bold leading-10 mb-10">We are all about creating a place where girls can thrive</div>
                </div>
                <div class="p-5 md:w-1/3 hover:bg-gray-100">
                    <div class="relative h-full rounded-lg overflow-hidden">
                        <div class="absolute inset-0">
                            <img src="{{ asset('images/item-donation.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg relative z-10">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Claim Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 md:w-1/3 hover:bg-gray-100">
                    <div class="relative h-full rounded-lg overflow-hidden">
                        <div class="absolute inset-0">
                            <img src="{{ asset('images/item-donation.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg relative z-10">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Claim Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 md:w-1/3 focus:outline-none hover:bg-gray-100">
                    <div class="relative h-full rounded-lg overflow-hidden hover:bg-gray-100">
                        <div class="absolute inset-0">
                            <img src="{{ asset('images/item-donation.jpg') }}" alt="Background image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full md:w-96 h-80 md:h-96 bg-black bg-opacity-50 flex flex-col justify-center items-start space-y-4 p-4 rounded-lg relative z-10">
                            <div class="text-white text-xl md:text-2xl lg:text-3xl font-bold leading-tight">Mission smile 1k: Outdoor charity</div>
                            <div class="text-white text-base md:text-lg lg:text-xl font-normal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                            <div class="px-4 py-2 bg-white rounded backdrop-blur-[80px] flex justify-center items-center space-x-2 hover:bg-gray-200">
                                <button class="text-red-500 text-base md:text-lg lg:text-xl font-bold">Claim Now</button>
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                    <svg class="w-4 h-4 ml-0" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Our Feature--}}
    <div> <p class="mb-20"></p></div>
    <p class="mb-20"></p>
    <section class="text-gray-1000 body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                <img alt="feature" class="object-cover object-center h-full w-full" src="{{ asset('images/Services-img.png') }}">
            </div>
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-[543px] p-[0px] flex-col justify-start items-end gap-[45px] inline-flex">
                        <div class="p-[0px] justify-start items-center gap-6 inline-flex">
                            <div class="text-cyan-900 text-[20px] font-bold uppercase tracking-widest">_______ What we do</div>
                        </div>
                        <div class="w-[575px] text-right text-cyan-900 text-[48px] font-bold leading-10">Some services we provide for our girls</div>
                    </div>

                    <div class="p-[0px] justify-start items-start gap-[20px] inline-flex">
                        <div class="p-[0px] flex-col justify-end items-start gap-[33px] inline-flex">
                            <div class="p-[0px] justify-start items-start gap-[26px] inline-flex">
                                <div class="w-[45px] h-[45px] relative">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-0 text-red-500 mb-5">
                        <div class="p-[0px] justify-start items-start gap-[26px] inline-flex">
                            <div class="w-[45px] h-[45px] relative">
                                <div class="w-[45px] h-[45px] left-[0px] top-[0px] absolute bg-white rounded border border border border border-zinc-200 border-opacity-50"></div>
                                <img class="w-[35px] h-[35px] left-[5px] top-[5px] absolute rounded border border border border" src="{{ asset('images/featureOne.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title dark-blue-grey font-medium mb-0">Fundraising Campaign Creation</h2>
                        <p class="leading-relaxed text-base">We empower users to create fundraising campaigns easily, enabling them to raise funds for diverse social initiatives.</p>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-0 text-red-500 mb-5">
                        <div class="p-[0px] justify-start items-start gap-[26px] inline-flex">
                            <div class="w-[45px] h-[45px] relative">
                                <div class="w-[45px] h-[45px] left-[0px] top-[0px] absolute bg-white rounded border border border border border-zinc-200 border-opacity-50"></div>
                                <img class="w-[35px] h-[35px] left-[5px] top-[5px] absolute rounded border border border border" src="{{ asset('images/featureOne.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title dark-blue-grey font-medium mb-3">Monetary Donations</h2>
                        <p class="leading-relaxed text-base">We allow users to make monetary donations to support the campaigns created on the platform.</p>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-0 text-red-500 mb-5">
                        <div class="p-[0px] justify-start items-start gap-[26px] inline-flex">
                            <div class="w-[45px] h-[45px] relative">
                                <div class="w-[45px] h-[45px] left-[0px] top-[0px] absolute bg-white rounded border border border border border-zinc-200 border-opacity-50"></div>
                                <img class="w-[35px] h-[35px] left-[5px] top-[5px] absolute rounded border border border border" src="{{ asset('images/featureOne.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title dark-blue-grey font-medium mb-3">Item Donations</h2>
                        <p class="leading-relaxed text-base">We also facilitates the donation of physical items.</p>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-0 text-red-500 mb-5">
                        <div class="p-[0px] justify-start items-start gap-[26px] inline-flex">
                            <div class="w-[45px] h-[45px] relative">
                                <div class="w-[45px] h-[45px] left-[0px] top-[0px] absolute bg-white rounded border border border border border-zinc-200 border-opacity-50"></div>
                                <img class="w-[35px] h-[35px] left-[5px] top-[5px] absolute rounded border border border border" src="{{ asset('images/featureOne.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title dark-blue-grey font-medium mb-3">Item Claiming and Requesting</h2>
                        <p class="leading-relaxed text-base">We enable users to browse and search for donated items that meet their needs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div> <p class="mb-20"></p></div>
        <p class="mb-20"></p>
    </section>

{{--    Give Space   --}}
<div> <p class="mb-20"></p></div>
        <p class="mb-20"></p>

{{--Before Footer--}}
    <div class="flex justify-center bg-no-repeat bg-cover h-full md:bg-center" style="background-image:url('{{ asset('images/charity-unsplash.jpg') }}'); filter: brightness(90%)">
        <div class="flex flex-col items-center">
            <div class="flex flex-col justify-center items-center text-center max-w-7xl my-8 py-10 px-10 rounded-lg border-4 border-white overflow-hidden backdrop-blur-lg">
                <h1 class="text-base text-white font-medium tracking-wider">Welcome to ShareSquare</h1>
                <span class="underline underline-offset-2 text-white-700-mt-3 mb-10">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>
                <div class="flex flex-col text-gray-700 mt-5">
                    <h1 class="text-4xl text-white md:text-[50px] font-semibold mb-10">Be the Catalyst for Change:</h1>
                    <h1 class="text-4xl md:text-[50px] text-white font-semibold mb-10">Donate Now and Make an Impact!</h1>
                    <p class="text-xl text-white mt-2 md:mt-4 tracking-wide mb-5">Donate - Support - Make a Difference</p>
                </div>
                <p class="mt-4 text-sm md:w-[52%] tracking-wide leading-7"></p>
                <div class="flex justify-center mb-10">
                    <button class="inline-flex text-white bg-red-600 border-0 py-2 px-6 focus:outline-none hover:bg-red-800 rounded text-lg">Donate Now</button>
                    <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Create Campaign</button>
                </div>
            </div>
        </div>
    </div>

    {{--Footer--}}
    <footer class="text-gray-600 bg-white">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('images/logo.jpg')}}" alt="ShareSqure Logo" class="h-8 md:h-8 lg:h-14">
                    <!-- Logo Text -->
                    <div class="text-left">
                        <p class="primary-text-color font-bold text-sm md:text-sm lg:text-xl">ShareSquare</p>
                        <p class="text-mainColor text-xxs md:text-xs lg:text-xs ">Share the love, Change the world</p>
                    </div>
                </a>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2023 ShareSquare —
                <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@DonateMate</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
        </div>
    </footer>
{{--</x-app-layout>--}}
@endsection



