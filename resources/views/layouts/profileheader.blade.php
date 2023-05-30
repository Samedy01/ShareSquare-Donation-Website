@extends('layouts.layout')

@section('contents')
<div class="bg-white ">
    <div class="flex flex-col md:flex-row px-6 py-4 justify-center items-center">
        <div class="w-32 h-32 rounded-full overflow-hidden">
            <img src="{{ asset('img/profile/user-profile.png')}}" alt="Profile Image"
                class="object-cover w-full h-full">
        </div>
        <!-- Spacing -->
        <div class="md:ml-5"></div>
        <div class="ml-5 mt-4 md:mt-0 md:ml-5 space-y-3 ">
            <div class="text-center lg:text-left font-bold text-xl">User Name</div>
            <div class="text-center lg:text-left text-base text-promptTextColor">Email -
                Member since
                March 14, 2023
            </div>
            <div class="flex mt-4 space-x-3 md:mt-6 justify-center md:justify-start lg:justify-start">
                <a href="{{ route('editprofile') }}"
                    class="{{ request()->is('profile/editprofile')}} inline-flex items-center text-center px-4 py-2 text-sm text-white bg-mainColor hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg sm:w-auto text-center">Edit
                    Profile</a>
                <a href="{{ route('overview') }}"
                    class="{{ request()->is('profile/overview')}}inline-flex items-center text-center px-4 py-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainColor focus:z-10 focus:ring-4 focus:ring-gray-200">Share
                    Profile</a>
                {{-- <button type="button"
                    class="text-mainColor border border-mainColor hover:bg-mainColor hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </button> --}}
            </div>
        </div>
    </div>


    {{-- Scrool Page Horizontally --}}
    <div class="border-b border-gray-100">
        <ul
            class="flex flex-wrap -mb-px text-sm font-medium text-center text-promptTextColor justify-center items-center">
            <a href="{{ route('overview') }}"
                class="inline-flex p-4 border-b-2 rounded-t-lg  {{ request()->is('profile/overview') ? 'text-mainColor border-mainColor' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group' }}"
                aria-current="{{ Request::is('profile/overview') ? 'page' : '' }}">
                <svg aria-hidden="true"
                    class="w-5 h-5 mr-2 {{ request()->is('profile/overview') ? 'text-mainColor' : 'group-hover:text-gray-500 text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-300' }} "
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                Overview
            </a>
            {{-- class="inline-flex p-4 text-mainColor border-b-2 border-mainColor rounded-t-lg active group" --}}
            <li class="mr-2">
                <a href="{{ route('mycampaign')}}"
                    class="inline-flex p-4 border-b-2 rounded-t-lg  {{ request()->is('profile/mycampaign') ? 'text-mainColor border-mainColor' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group' }}"
                    aria-current="page">
                    <svg aria-hidden="true"
                        class="w-5 h-5 mr-2 {{ request()->is('profile/mycampaign') ? 'text-mainColor' : 'group-hover:text-gray-500 text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-300' }} "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>My Campaign
                </a>
            </li>
            <li class="mr-2">
                <a href="{{route('history')}}"
                    class="inline-flex p-4 border-b-2 rounded-t-lg  {{ request()->is('profile/history') ? 'text-mainColor border-mainColor' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group' }}">
                    <svg aria-hidden="true"
                        class="w-5 h-5 mr-2 {{ request()->is('profile/history') ? 'text-red-500' : 'group-hover:text-gray-500 text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-300' }} "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>History
                </a>
            </li>
            <li class="mr-2">
                <a href="{{route('following')}}"
                    class="inline-flex p-4 border-b-2 rounded-t-lg  {{ request()->is('profile/following') ? 'text-mainColor border-mainColor' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group' }}">
                    <svg aria-hidden="true"
                        class="w-5 h-5 mr-2 {{ request()->is('profile/following') ? 'text-red-500' : 'group-hover:text-gray-500 text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-300' }} "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>Following
                </a>
            </li>
            <li class="mr-2">
                <a href="{{route('follower')}}"
                    class="inline-flex p-4 border-b-2 rounded-t-lg  {{ request()->is('profile/follower') ? 'text-mainColor border-mainColor' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group' }}">
                    <svg aria-hidden="true"
                        class="w-5 h-5 mr-2 {{ request()->is('profile/follower') ? 'text-red-500' : 'group-hover:text-gray-500 text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-300' }} "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>Follower
                </a>
            </li>
        </ul>
    </div>

    @yield('profile_contents')

</div>


@endsection
