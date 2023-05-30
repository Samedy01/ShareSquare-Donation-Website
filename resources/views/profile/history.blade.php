@extends('layouts.profileheader')

@section('profile_contents')

<div class="w-screen px-10 py-5 mx-auto">
    <form class="flex items-center w-full justify-start">
        <label for="voice-search" class="sr-only">Search</label>
        <div class="w-full flex flex-wrap justify-center ">
            <div class="relative w-full sm:w-auto mr-0 md:mr-3 lg:mr-3 mb-2 md:mb-2 lg:mb-0">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="voice-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos, Design Templates..." required>
            </div>
            <div class="w-full sm:w-auto mb-2 md:mb-2 lg:mb-0">
                <div date-rangepicker class="flex items-center md:justify-between">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="start" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date start">
                    </div>
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="end" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date end">
                    </div>
                </div>
            </div>
            <button type="submit"
                class="w-full sm:w-auto inline-flex items-center justify-center py-2.5 px-3 ml-0 md:ml-3 lg:ml-3 text-sm font-medium text-white bg-mainColor rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>Search
            </button>
        </div>
    </form>
    {{-- Overview Card --}}
    <div class="px-4 py-4 mx-auto m-4 justify-start">
        <h1 class="text-2xl font-bold">Overview </h1>

    </div>

    <div
        class="px-4 w-full mx-auto flex flex-wrap -mb-px text-sm font-medium text-promptTextColor justify-center items-center gap-5 lg:justify-start">

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Total Cash Donation</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow">
                        <span id="dropdownTitle1">All</span>

                    </button>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">10</h5>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5 justify-center items-center">
                <a href="#">
                    <h5 class="mb-3 text-xl font-medium tracking-tight text-gray-900 px-4">Total Item Donation</h5>
                </a>
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="w-56 mb-2 flex items-center justify-between text-gray-500 bg-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex shadow">
                        <span id="dropdownTitle1">All</span>

                    </button>
                </div>
                <h5 class="mt-3 mb-1 text-3xl font-extrabold tracking-tight text-gray-900 px-4">10</h5>
            </div>
        </div>
    </div>
    {{-- Cash Donation Table --}}
    <div class="px-4 py-4 mx-auto m-4 justify-start">
        <h1 class="text-2xl font-bold">Cash Donation </h1>

    </div>

    <div class="px-4 py-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for cash donation">
            </div>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User/Organizer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Campaign Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Item Donation Table --}}
    <div class="px-4 py-4 mx-auto m-4 justify-start">
        <h1 class="text-2xl font-bold">Item Donation </h1>

    </div>

    <div class="px-4 py-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for item donation">
            </div>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User/Organizer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Campaign Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                        APOPO vzw
                    </th>
                    <td class="px-6 py-4 whitespace-normal">
                        Support APOPO’s Minefield Survey HeroDOGs
                    </td>
                    <td class="px-6 py-4">
                        Wild Life Conservation
                    </td>
                    <td class="px-6 py-4">
                        2 May 2023
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-mainColor hover:underline">View
                            Campaign</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</div>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
