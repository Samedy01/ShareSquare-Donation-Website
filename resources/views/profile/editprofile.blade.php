@extends('layouts.layout')

@section('contents')

<div class="px-10 py-5 mx-auto">

    <div class="px-2 py-4 mx-auto m-4">
        {{-- Edit Profile Title --}}
        <h1 class="text-2xl font-bold">Edit Profile </h1>

        {{-- Search Button --}}
        <div class="my-4">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search" required>
                </div>
                <button type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>
        {{-- Main Setting --}}
        <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
            @csrf
        {{-- Profile Image --}}
        <div class="container flex flex-col lg:flex-row py-3 border-b border-gray-200">
            <div class="flex-auto w-full md:w-1/3 lg:w-1/3">
                <!-- Content of the first div -->
                <h5 class="mb-2 text-xl font-medium tracking-tight text-gray-900">Profile Image</h5>
                <p class="campaign-theme font-normal text-gray-500 mb-2">You can upload your avatar here.</p>
            </div>
            <div class="flex-none w-full md:w-2/3 lg:w-2/3">
                <!-- Content of the second div -->
                <div class="flex flex-col md:flex-row">
                    <div class="w-32 h-32 rounded-full overflow-hidden border">
                        <img src="{{ asset($user->image_profile_path)}}" alt="Profile Image" id="previewProfileUpload"
                            class="object-cover w-full h-full">
                    </div>
                    <!-- Spacing -->
                    {{-- <div class="md:ml-5"></div> --}}
                    <div class="ml-0 mt-4 md:ml-5 space-y-3 ">
                        {{-- <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Upload new avatar</h5>
                        --}}
                        <div class="lg:text-left font-medium text-lg">Upload new avatar</div>
                        <div class="flex space-x-4 items-center">
                            <div class="inline-block">
                                <input type="file" id="profile-image" name="profile_image" class="hidden">
                                <button type="button" id="uploadProfile"
                                    class="text-primaryTextColor border bg-lightGrayColor hover:bg-gray-200 hover:text-primaryTextColor focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    Choose file
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="hidden">No file chosen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container flex flex-col lg:flex-row py-3 border-b border-gray-200">
            <div class="flex-auto w-full md:w-1/3 lg:w-1/3">
                <!-- Content of the first div -->
                <h5 class="mb-2 text-xl font-medium tracking-tight text-gray-900">Main Setting</h5>
                <p class="campaign-theme font-normal text-gray-500 mb-2">This information will appear on your profile.
                </p>
            </div>
            <div class="flex-none w-full md:w-2/3 lg:w-2/3">
                <!-- Content of the second div -->
                <form class=" pb-2 border-b border-gray-200">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your
                                Username</label>
                            <input type="text" id="username" aria-label="disabled input" name="user_name"
                                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 cursor-not-allowed"
                                value="{{'@'.str_replace(' ','_',$user->name)}}" readonly>
                        </div>
                        <div>
                            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">User ID</label>
                            <input type="text" id="user_id" aria-label="disabled input" name="user_id"
                                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 cursor-not-allowed"
                                value="{{$user->id}}" readonly>
                        </div>
                        @php
                        $parts = explode(' ',$user->name) /* something like 'Jonh' has only one element */
                        @endphp
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First
                                name</label>
                            <input type="text" id="first_name" name="first_name" value="{{$parts[0]}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last
                                name</label>

                            {{-- Bug!! --}}
                            {{-- <input type="text" id="last_name" name="last_name" value="{{$parts[1]}}" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="Doe" required> --}}
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email" value="{{$user->email}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="john.doe@company.com" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                number</label>
                            <input type="tel" id="phone" name="phone" value="{{$user->phone}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="123-45-678" required>
                        </div>
                        <div>
                            <label for="telegram-input"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Telegram</label>
                            <input type="text" id="telegram-input" value="{{$user->telegram}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                name="telegram" placeholder="@john_doe" >
                        </div>
                        <div>
                            <label for="organization"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Organization</label>
                            <input type="text" id="organization" name="organization" value="{{$user->organization}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="ShareSquare">
                        </div>
                        <div>
                            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 ">Website
                                URL</label>
                            <input type="text" id="website" name="website" value="{{ $user->website }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="sharesquare.com">
                        </div>
                        <div>
                            <label for="job" class="block mb-2 text-sm font-medium text-gray-900 ">Job
                                Title</label>
                            <input type="text" id="job" name="job" value="{{$user->job_title}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="Philanthropist">
                        </div>
                        <div>
                            <label for="location-input"
                                class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                            <input type="text" id="location-input" name="location" value="{{ $user->location }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                placeholder="Phnom Penh, Cambodia">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="bio-input" class="block mb-2 text-sm font-medium text-gray-900">Bio</label>
                        <textarea id="bio-input" name="bio"
                            class="block w-full min-h-[10rem] p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-red-500 focus:border-red-500 resize-none"
                            placeholder="Tell us about yourself in fewer than 250 characters">{{$user->bio}}</textarea>
                    </div>

                </form>
                <div>
                    <h5 class="text-bold text-base my-2">Private Profile</h5>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input name="is_enable_profile_anonymous" id="remember" type="checkbox" {{ $user->is_enable_profile_anonymous == 1 ? 'checked':'' }}
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-red-300 checked:bg-mainColor"
                                >
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Don't
                            display activity-related personal information on your profile.</label>
                    </div>
                </div>
                <div class="inline-flex">
                    <button  type="submit"
                        class="{{ request()->is('profile/overview')}} py-2.5 px-5 mr-2 mb-2 text-white bg-mainColor hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto text-center">Update
                        Setting Profile</button>
                    <a href=""
                        class="{{ request()->is('profile/overview')}}py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-mainColor focus:z-10 focus:ring-4 focus:ring-gray-200">Cancel</a>

                </div>

            </div>
        </div>
        </form>
    </div>
</div>
@vite('resources/js/editprofile.js')
@endsection
