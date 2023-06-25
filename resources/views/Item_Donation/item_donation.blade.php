@extends('layouts.layout')

@section('contents')
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <div class="group relative w-full rounded">
            <img src="{{ asset($campaign->image_thumbnail_path) }}" class=" mx-auto block max-w-[900px] w-full object-cover max-h-[500px]" alt="">
            <div
                class="absolute rounded-md bottom-0 flex border-none w-full justify-center items-center bg-slate-800 opacity-0 group-hover:h-20 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <p class="font-bold text-white text-lg">Building Decent School For Chhuk Village in Kompot</p>
            </div>
            <div
                class="absolute rounded-md right-0 top-0 flex border-none shadow-lg w-12 justify-center items-center bg-slate-800 opacity-0 group-hover:h-12 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <i class="fa-solid fa-xmark fa-2xl text-white"></i>
            </div>
        </div>


        <div class=" border shadow-md md:px-8 pt-4 pb-8 mt-8 lg:grid lg:grid-cols-2 rounded">
            <div class="justify-center text-center">
                <h2 class="font-bold">Delivery Option</h2>
                <p class="text-gray-700 my-3">Choose one option on how you would like to receive your donated item</p>
                <label for="drop-off"
                    class="shadow relative items-center mb-1 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                    <input type="checkbox" class="hidden" id="drop-off" name="deliveryOption" value="drop-off"
                        data-target-open="#pickup_note_form,#pickup_location_form">
                    <span
                        class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                        <span class="tick-icon hidden text-red-500">
                            <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                    <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                        <div class="my-1 h-auto w-20">
                            <img src="{{ asset('img/svgs/drop-off.svg') }}">
                        </div>
                        <div class="my-1">Drop Off</div>
                        <div class="text-gray-400 my-1 text-center">Location to drop off the item</div>
                    </div>
                </label>
                <label for="delivery"
                    class="ml-3 shadow relative items-center mb-1 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                    <input type="checkbox" class="hidden" id="delivery" name="deliveryOption" value="delivery"
                        data-target-open="#delivery_note_form">
                    <span
                        class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                        <span class="tick-icon hidden text-red-500">
                            <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                    <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                        <div class="my-1 h-auto w-20 object-cover">
                            <img src="{{ asset('img/svgs/delivery.svg') }}" alt="delivery image">
                        </div>
                        <div class="sm:my-1">Delivery</div>
                        <div class="text-gray-400 my-1 text-center">Delivery option to deliver the items</div>
                    </div>
                </label>
            </div>
            <div class="">
                <h2 class="font-bold my-3 sm:my-0 text-center">Location</h2>
                <p class="text-gray-700 sm:pt-3 pb-3 text-center">Choose one option on how you would like to receive your donated
                    item</p>
                {{-- <span class="border shadow-md px-52 py-16 text-gray-600 body-font relative"> --}}
                @if($campaign->is_drop_off)
                    <!--drop off location-->
                    @if(!empty($campaign->dropOffLocation))
                        @foreach($campaign->dropOffLocation as $location)
                            <div class="mt-4">
                                <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3 locationWrapper mx-auto">
                                    <h2 class="text-2xl font-bold">{{ $location->location_name }}</h2>
                                    <p class="text-xs text-gray-400">{{$location->location_description}}</p>
                                </div>
                                <div class="map-container mt-2 w-2/3 mx-auto">
                                    <iframe src="https://www.google.com/maps?q={{$location->location_latitude}},{{$location->location_longitude}}&z=15&output=embed" id="map-iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif

            </div>
        </div>
        {{-- Donor Contact Information --}}
        <div class=" border shadow-md sm:px-8 pt-4 mt-8 px-4  rounded">
            <h2 class="font-bold">Campaign Raiser Contact Information</h2>
            <div class="pt-4 pb-2 flex">
                <span class="pt-3">
                    <i class="fa-solid fa-envelope fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light ">
                    Email
                    <p class="font-medium">{{$campaign->user->email}}</p>
                </span>
            </div>
            <div class="pb-2 flex">
                <span class="pt-3">
                    <i class="fa-solid fa-phone fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light">
                    Phone Number
                    <p class="font-medium">{{$campaign->user->phone}}</p>
                </span>
            </div>
            <div class="pb-2 flex">
                <span class="pt-3">
                    <i class="fa-brands fa-telegram fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light">
                    Telegram
                    <p class="font-medium">{{ $campaign->user->telegram}}</p>
                </span>
            </div>
        </div>
        <form action="{{ route('compaigns.perform_donate_item') }}" method="POST"  >
            @csrf
            <input type="number" class="hidden" name="user_id" value="1">
            <input type="number" class="hidden" name="campaign_id" value="1">
            <div class=" border shadow-md sm:px-8 pt-4 mt-8 px-4  rounded">
                <h2 class="font-bold">Item For Drop Off</h2>
                <h6 class="pt-4 pb-2 flex">Please provide the name and the quantity of item</h6>
                <div class="flex flex-wrap sm:mb-3">
                    <div class="w-full md:w-1/2 ">
                        <label class="block text-gray-700 font-bold mb-2" for="item_name">
                            Item Name
                        </label>
                        <input
                            class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="item_name" type="text" placeholder="Input Item Name" name="item_name" value="{{$campaign->itemCategory->name}}">
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 sm:px-3 ">
                        <label class="block text-gray-700 font-bold mb-2" for="qty_item">
                            Quantity
                        </label>
                        <input
                            class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            required id="qty_item" type="text" placeholder="Input Quatity Of Item" name="quantity_items">
                    </div>
                </div>
            </div>
            <div class=" border shadow-md sm:px-8 pt-4 mt-8 px-4  rounded">
                <h2 class="font-bold">Contact Information</h2>
                <h6 class="pt-4 pb-2 flex">Please provide the name and the quantity of item</h6>
                <div class="flex flex-wrap sm:mb-3">

                    <div class="w-full md:w-1/2 ">
                        <label class="block text-gray-700 font-bold mb-2" for="phone_number">
                            Phone Number
                        </label>
                        <input
                            class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="phone_number" type="text" placeholder="Input your phone number" name="phone_number" value="{{ Auth::user() == null? null:Auth::user()->phone }}">
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 sm:px-3  ">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input
                            class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="qty_item" type="text" placeholder="Input your email address" name="email" value="{{ Auth::user() == null? null:Auth::user()->email }}">
                    </div>
                    <div class="w-full md:w-1/2  ">
                        <label class="block text-gray-700 font-bold mb-2" for="facebook">
                            Facebook(Optional)
                        </label>
                        <input
                            class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="facebook" type="text" placeholder="Input your facebook link" name="facebook" value="{{ Auth::user() == null? null:Auth::user()->facebook }}">
                    </div>

                    <div class="w-full md:w-1/2 sm:px-3 ">
                        <label class="block text-gray-700 font-bold mb-2" for="telegram">
                            Telegram(Optional)
                        </label>
                        <input
                            class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="telegram" type="text" placeholder="Input your telegram username" name="telegram" value="{{ Auth::user() == null? null:Auth::user()->telegram }}">
                    </div>
                </div>
            </div>
            <p class="text-[#ff4238] sm:px-8 mt-3 font-medium">Contact Information</p>
            <div class=" border shadow-md sm:px-8 pt-4 mt-4 px-4  rounded">
                <h2 class="font-bold">Date and Time For Drop Off</h2>
                <h6 class="pt-4 pb-2">Please provide your contact information that is/are reachable</h6>
                <div class="flex flex-wrap sm:mb-3">
                    <div class="w-full md:w-1/2 sm:px-3 ">
                        <label class="block text-gray-700 font-bold mb-2" for="date">
                            Date
                        </label>
                        <input
                            class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="date" type="date" name="date">
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 ">
                        <label class="block text-gray-700 font-bold mb-2" for="time">
                            Time
                        </label>
                        <input
                            class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="time" type="time" name="time">
                    </div>
                    <div class="w-full   ">
                        <label class="block text-gray-700 font-bold mb-2" for="facebook">
                            Note(Optional)
                        </label>
                        <input
                            class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="facebook" type="text" placeholder="Add Note" name="note">
                    </div>
                </div>
            </div>




            <button type="submit"
                class="mt-8 bg-[#ff4238] text-white font-bold w-full border border-gray-200 rounded py-3  mb-3">Donate</button>
    </form>
        @vite('resources/js/saovty.js')
@endsection
