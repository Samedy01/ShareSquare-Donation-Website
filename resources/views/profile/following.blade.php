@extends('layouts.profileheader')

@section('profile_contents')

<div class="w-screen px-10 py-5 mx-auto">
    {{-- Following Card --}}
    <div class="py-4 mx-auto">
        <div class="flex items-center">
            <h1 class="text-2xl font-bold mr-2 text-primaryTextColor">Following </h1>
            <span class="bg-secondaryColor text-mainColor text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">10</span>
        </div>
    </div>

    <div
        class="grid grid-cols-1 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 items-center justify-between w-full gap-5 md:gap-5 lg:gap-5">

        <div class="border bg-white rounded-lg shadow-lg flex flex-row inline-block">
            <div class="overflow-hidden">
                <img class="block h-full w-48 sm:w-48 md:w-48 lg:w-48 object-cover  bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                    src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="flex flex-col justify-between p-4 md:w-1/2 ml-1 md:ml-1 lg:ml-2">
                <div class=" overflow-hidden">
                    <h3 class="text-base md:text-lg lg:text-xl font-bold mb-2 line-clamp-1">Ly Sovortey</h3>
                    <h3 class="text-base font-medium text-promptTextColor mb-2 line-clamp-2">
                        @sovortey_ly
                    </h3>
                </div>
                <div class="inline-block">
                    <button type="button"
                        class="text-mainColor border bg-white hover:bg-mainColor hover:text-white focus:ring-4 focus:outline-none focus:ring-secondaryColor font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                            viewBox="0 0 640 512">
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                        </svg>
                        Follow
                    </button>
                </div>
            </div>
        </div>

        <div class="border bg-white rounded-lg shadow-lg flex flex-row inline-block">
            <div class="overflow-hidden">
                <img class="block h-full w-48 sm:w-48 md:w-48 lg:w-48 object-cover  bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                    src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="flex flex-col justify-between p-4 md:w-1/2 ml-1 md:ml-1 lg:ml-2">
                <div class=" overflow-hidden">
                    <h3 class="text-base md:text-lg lg:text-xl font-bold mb-2 line-clamp-1">Peav Monivirakpech</h3>
                    <h3 class="text-base font-medium text-promptTextColor mb-2 line-clamp-1">
                        @peav_monivirakpech
                    </h3>
                </div>
                <div class="inline-block">
                    <button type="button"
                        class="text-primaryTextColor border bg-white hover:bg-lightGrayColor hover:text-primaryTextColor focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Followed
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
        <div class="border bg-white rounded-lg shadow-lg flex flex-row inline-block">
            <div class="overflow-hidden">
                <img class="block h-full w-48 sm:w-48 md:w-48 lg:w-48 object-cover  bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                    src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="flex flex-col justify-between p-4 md:w-1/2 ml-1 md:ml-1 lg:ml-2">
                <div class=" overflow-hidden">
                    <h3 class="text-base md:text-lg lg:text-xl font-bold mb-2 line-clamp-1">Ly Saoty</h3>
                    <h3 class="text-base font-medium text-promptTextColor mb-2 line-clamp-1">
                        @ly_saoty
                    </h3>
                </div>
                <div class="inline-block">
                    <button type="button"
                        class="text-primaryTextColor border bg-white hover:bg-lightGrayColor hover:text-primaryTextColor focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Followed
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
        <div class="border bg-white rounded-lg shadow-lg flex flex-row inline-block">
            <div class="overflow-hidden">
                <img class="block h-full w-48 sm:w-48 md:w-48 lg:w-48 object-cover  bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                    src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="flex flex-col justify-between p-4 md:w-1/2 ml-1 md:ml-1 lg:ml-2">
                <div class=" overflow-hidden">
                    <h3 class="text-base md:text-lg lg:text-xl font-bold mb-2 line-clamp-1">Phin Samedy</h3>
                    <h3 class="text-base font-medium text-promptTextColor mb-2 line-clamp-1">
                        @vuthy_panha
                    </h3>
                </div>
                <div class="inline-block">
                    <button type="button"
                        class="text-primaryTextColor border bg-white hover:bg-lightGrayColor hover:text-primaryTextColor focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Followed
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
        <div class="border bg-white rounded-lg shadow-lg flex flex-row inline-block">
            <div class="overflow-hidden">
                <img class="block h-full w-48 sm:w-48 md:w-48 lg:w-48 object-cover  bg-cover lg:h-full md:h-full rounded-tl-[7px] rounded-bl-[7px]"
                    src="https://images.pexels.com/photos/1302883/pexels-photo-1302883.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="flex flex-col justify-between p-4 md:w-1/2 ml-1 md:ml-1 lg:ml-2">
                <div class=" overflow-hidden">
                    <h3 class="text-base md:text-lg lg:text-xl font-bold mb-2 line-clamp-1">Vuthy Panha</h3>
                    <h3 class="text-base font-medium text-promptTextColor mb-2 line-clamp-1">
                        @vuthy_panha
                    </h3>
                </div>
                <div class="inline-block">
                    <button type="button"
                        class="text-primaryTextColor border bg-white hover:bg-lightGrayColor hover:text-primaryTextColor focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Followed
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 mr-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
