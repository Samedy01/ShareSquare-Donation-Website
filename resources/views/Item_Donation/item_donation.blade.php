<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/saovty.css')
    @vite('resources/js/jquery-3.6.1.min.js')
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>

    <title>Item Donation</title>
</head>

<body>
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <div class="group relative w-full rounded ">
            <img src="{{ asset('img/image/img_donation.png') }}" class="w-full object-cover " alt="">

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
            <div class="  text-center ">
                <h2 class="font-bold my-3 sm:my-0 ">Location</h2>
                <p class="text-gray-700 sm:pt-3 pb-3">Choose one option on how you would like to receive your donated
                    item</p>
                {{-- <span class="border shadow-md px-52 py-16 text-gray-600 body-font relative"> --}}
                <iframe class="sm:mx-28 lg:mx-24 justify-between mx-6 " title="map" scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style=""></iframe>

            </div>
        </div>
        {{-- Donor Contact Information --}}
        <div class=" border shadow-md sm:px-8 pt-4 mt-8 px-4  rounded">
            <h2 class="font-bold">Donor Contact Information</h2>
            <div class="pt-4 pb-2 flex">
                <span class="pt-3">
                    <i class="fa-solid fa-envelope fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light ">
                    Email
                    <p class="font-medium">saovtyly@gmail.com</p>
                </span>
            </div>
            <div class="pb-2 flex">
                <span class="pt-3">
                    <i class="fa-solid fa-phone fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light">
                    Phone Number
                    <p class="font-medium">096 1681111</p>
                </span>
            </div>
            <div class="pb-2 flex">
                <span class="pt-3">
                    <i class="fa-brands fa-telegram fa-xl text-gray-700"></i>
                </span>
                <span class="pl-5 pb-3 font-light">
                    Telegram
                    <p class="font-medium">@Saovtyy</p>
                </span>
            </div>
        </div>
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
                        id="item_name" type="text" placeholder="Input Item Name">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 sm:px-3 ">
                    <label class="block text-gray-700 font-bold mb-2" for="qty_item">
                        Quantity
                    </label>
                    <input
                        class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="qty_item" type="text" placeholder="Input Quatity Of Item">
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
                        id="phone_number" type="text" placeholder="Input your phone number">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 sm:px-3  ">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <input
                        class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="qty_item" type="text" placeholder="Input your email address">
                </div>
                <div class="w-full md:w-1/2  ">
                    <label class="block text-gray-700 font-bold mb-2" for="facebook">
                        Facebook(Optional)
                    </label>
                    <input
                        class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="facebook" type="url" placeholder="Input your facebook link">
                </div>

                <div class="w-full md:w-1/2 sm:px-3 ">
                    <label class="block text-gray-700 font-bold mb-2" for="telegram">
                        Telegram(Optional)
                    </label>
                    <input
                        class="block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="telegram" type="text" placeholder="Input your telegram username">
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
                        id="date" type="date">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 ">
                    <label class="block text-gray-700 font-bold mb-2" for="time">
                        Time
                    </label>
                    <input
                        class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="time" type="time">
                </div>
                <div class="w-full   ">
                    <label class="block text-gray-700 font-bold mb-2" for="facebook">
                        Note(Optional)
                    </label>
                    <input
                        class=" block w-full text-gray-700 border border-gray-200 rounded py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="facebook" type="url" placeholder="Add Note">
                </div>
            </div>
        </div>
        <a href="#">
            <button
                class="mt-8 bg-[#ff4238] text-white font-bold w-full border border-gray-200 rounded py-3  mb-3">Donate</button>
        </a>
        @vite('resources/js/saovty.js')
</body>

</html>
