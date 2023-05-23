<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>--}}
    @vite('resources/css/app.css')
    @vite('resources/css/panha.css')
    @vite('resources/js/jquery-3.6.1.min.js')
    @vite('resources/js/datepicker.js')
    <title>Create Campaign cash type</title>
</head>
<body>
    <section class="container mt-5">
        <h1 class="font-bold text-3xl">Create New Campaign</h1>
    </section>
    <section class="container grid grid-cols-4 gap-16 mt-5">
        {{--Left side--}}
        <div class="col-span-1">
            <div class="border px-5 rounded-xl">
                <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_1">
                    <div class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline"><i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">1</span></div>
                    <div class="ml-3 text-label-form">About</div>
                </div>
                <hr>
                <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_2">
                    <div class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline"><i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">2</span></div>
                    <div class="ml-3 text-label-form">Fundraising Goal</div>
                </div>
                <hr>
                <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_3">
                    <div class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline"><i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">3</span></div>
                    <div class="ml-3 text-label-form">Donation Option</div>
                </div>
                <hr>
                <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_4">
                    <div class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline"><i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">4</span></div>
                    <div class="ml-3 text-label-form">Contact Info</div>
                </div>
            </div>
        </div>
        {{--Right side--}}
        <div class=" col-span-3 max-h-[88vh] overflow-auto right-side pr-2 pl-2">
            {{--1st form: About--}}
            <div class="mb-[100px] form hidden" id="form_step_1" data-status="1">
                <h1 class="text-2xl font-bold">About</h1>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Title</label>
                    <input type="text" id="campaign_title" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="Your campaign title">
                    <a href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Summary</label>
                    <textarea  id="campaign_summary_1" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="Your campaign description"></textarea>
                    <a href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Purpose</label>
                    <textarea  id="campaign_purpose" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Goal</label>
                    <textarea  id="campaign_purpose" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="inline-block bg-gray-200 py-2 px-5 rounded-[10px]">
                        <span class="">Add New Subtitle</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Category</label>
                    <select id="campaign_purpose" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent">
                        <option class="" value="1">Education</option>
                        <option class="" value="2">Health</option>
                    </select>
                </div>
                <div class="mt-10">
                    <a data-target="#form_step_2" href="#form_step_2" class="nextform inline-block bg-red-500 py-2 px-16 rounded-[10px]">
                        <span class="text-white">Next</span>
                    </a>
                </div>
            </div>
            {{--2nd form: Donation options--}}
            <div class="mb-[100px] form" id="form_step_2" data-status="0">
                <h1 class="text-3xl font-bold">Donation Option</h1>
                <div class="mt-4">
                    <p class="font-bold">Are you donating items or raising?</p>
                    <label for="donating" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border hover:border-red-500 campaign_type hover:cursor-pointer">
                        {{--normal image--}}
                        <img
                            src="{{asset('images/svgs/donating.svg')}}"
                            alt="triangle with all three sides equal"
                            class="icon"
                            height="50"
                            width="50" />
                        {{--image active when checked--}}
                        <img
                            src="{{asset('images/svgs/donating_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="hidden icon_active"
                            width="50" />
                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Donating</div>
                            <div class="text-gray-500">Online donation with ABA, ACELEDA, etc</div>
                        </div>
                        <input type="radio" class="hidden" id="donating" name="campaign_type" value="donating">
                    </label>
                    <label for="raising" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border  hover:border-red-500 campaign_type hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/raising.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon"
                            width="50" />
                        <img
                            src="{{asset('images/svgs/raising_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon_active hidden"
                            width="50" />

                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Raising</div>
                            <div class="text-gray-500">Raising cash and/or items for the campaign</div>
                        </div>
                        <input type="radio" class="hidden" id="raising" name="campaign_type" value="raising">
                    </label>
                </div>
                {{--Select the type of donation--}}
                <div class="mt-4">
                    <p class="font-bold">Select the type of donation</p>
                    <label for="cash-input" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border hover:border-red-500 donation_option hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/cash.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon"
                            width="50" />
                        <img
                            src="{{asset('images/svgs/cash_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            width="50"
                            class="icon_active hidden"
                        />
                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Cash</div>
                            <div class="text-gray-500">Online donation with ABA, ACELEDA, etc</div>
                        </div>
                        <input type="radio" class="hidden" id="cash-input" name="donate-option" value="cash">
                    </label>
                    <label for="cashOrItem-input" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border  hover:border-red-500 donation_option hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/cash-item.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            width="50"
                            class="icon"
                        />
                        <img
                            src="{{asset('images/svgs/cash-item_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            width="50"
                            class="icon_active hidden"
                        />

                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Both Cash and Item</div>
                            <div class="text-gray-500">Accept both cash and items</div>
                        </div>
                        <input type="radio" class="hidden" id="cashOrItem-input" name="donate-option" value="cashOrItem">
                    </label>
                </div>
                {{--Choose type of payment--}}
                <div class="mt-4">
                    <p class="font-bold">Chose payment method</p>
                    <p class="text-gray-400">You can choose more than one</p>
                    {{--ABA option--}}
                    <label for="aba_method" class="paymentOption shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="radio" class="hidden" id="aba_method" name="paymentOption" value="aba">
                        <span class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                            <div class="my-1 h-10 w-20">
                                <img src="{{asset('images/ABA logo.png')}}">
                            </div>
                            <div class="my-1">ABA</div>
                            <div class="text-gray-400 my-1">Donate with ABA</div>
                        </div>
                    </label>
                    <label for="aceleda_method" class="paymentOption ml-3 shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="radio" class="hidden" id="aceleda_method" name="paymentOption" value="aceleda">
                        <span class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                            <div class="my-1 h-10 w-20">
                                <img src="{{asset('images/ACLEDA.png')}}">
                            </div>
                            <div class="my-1">Aceleda</div>
                            <div class="text-gray-400 my-1">Donate with Aceleda</div>
                        </div>
                    </label>
                </div>
                <div class="flex flex-col mt-4">
                    <p class="font-bold">Acount number</p>
                    <label for="account_number" class="">
                        <input placeholder="Enter your ABA account number" type="text" id="campaign_purpose" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="flex flex-col mt-4">
                    <p class="font-bold">QR code</p>
                    <a href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                    <a href="#" class="underline text-gray-400">See the sample</a>
                </div>
                {{--In form 2st , show this div if the campaign is both donation/raising--}}
                <div class="mt-4">
                    <p class="font-bold">Delivery option</p>
                    <p class="text-gray-400">Choose one option on how you would donate your item</p>
                    {{--Delivery options--}}
                    <label for="drop-off" class="shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                        <input type="checkbox" class="hidden" id="drop-off" name="deliveryOption" value="drop-off">
                        <span class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                            <div class="my-1 h-auto w-20">
                                <img src="{{asset('images/svgs/drop-off.svg')}}">
                            </div>
                            <div class="my-1">Drop Off</div>
                            <div class="text-gray-400 my-1 text-center">Location to drop off the item</div>
                        </div>
                    </label>
                    <label for="delivery" class="ml-3 shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                        <input type="checkbox" class="hidden" id="delivery" name="deliveryOption" value="delivery">
                        <span class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                <span class="tick-icon hidden text-red-500">
                                  <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                  </svg>
                                </span>
                            </span>
                        <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                            <div class="my-1 h-auto w-20 object-cover">
                                <img src="{{asset('images/svgs/delivery.svg')}}">
                            </div>
                            <div class="my-1">Delivery</div>
                            <div class="text-gray-400 my-1 text-center">Delivery option to deliver the items</div>
                        </div>
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Pick up location</p>
                    <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3">
                        <h2 class="text-2xl font-bold">CADT - Innovation Center</h2>
                        <p class="text-xs text-gray-400">2nd Bridge Prek Leap, National Road Number 6, Phnom Penh, 12252</p>
                        <div class="absolute flex flex-col top-0 h-full right-3 justify-center">
                            <div class=" flex ">
                                <a href="#" class="flex w-5 h-5 justify-center items-center p-3 bg-white mr-2 shadow rounded"><i class="fa fa-edit block"></i></a>
                                <a href="#" class="flex w-5 h-5 justify-center items-center p-3 bg-white shadow rounded"><i class="fa fa-trash block"></i></a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-color-letter mt-3 block">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Location</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <p class="font-bold">Add Pick-Up Note</p>
                    <label for="campaign_title" class="">
                        <textarea id="campaign_purpose" class="w-full border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="Add pick-up note"></textarea>
                    </label>
                </div>
                <div class="flex flex-col mt-4">
                    <p class="font-bold">Add Delivery Note</p>
                    <label for="campaign_title" class="">
                        <textarea id="campaign_purpose" class="w-full border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" placeholder="Add delivery note"></textarea>
                    </label>
                </div>
                <div class="mt-10">
                    <a href="#form_step_1" class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_1">Previous</span>
                    </a>
                    <a href="#form_step_3" class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform">
                        <span class="text-white" data-target="form_step_3">Next</span>
                    </a>
                </div>
            </div>
            {{--3th form: Donation options--}}
            <div class="mb-[100px] hidden  form" id="form_step_3">
                <h1 class="text-3xl font-bold">Fund Raising Goal</h1>
                <div class="mt-4">
                    <p class="font-bold">Donation goal amount</p>
                    <label for="goal_amount" class="">
                        <input placeholder="Enter your donation goal amount" type="number" id="goal_amount" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Campaign Duration</p>
                    <label for="compaign_duration">
                        <div date-rangepicker datepicker-format="dd-M-yyyy" class="flex items-center mt-4">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input name="start" type="text" class="py-5 px-7 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input name="end" type="text" class="py-5 px-7 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full pl-10 p-2.5" placeholder="Select date end">
                            </div>
                        </div>
                    </label>
                </div>
                <div class="mt-10">
                    <a href="#form_step_2" class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_2">Previous</span>
                    </a>
                    <a href="#form_step_4" class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform">
                        <span class="text-white" data-target="form_step_4">Next</span>
                    </a>
                </div>
            </div>
            {{--4th form: Contact info--}}
            <div class="mb-[100px] hidden form" id="form_step_4">
                <h1 class="text-3xl font-bold">Contact Info</h1>
                <div class="mt-4">
                    <p class="font-bold">Phone number</p>
                    <label for="phone_number" class="">
                        <input name="phone_number" placeholder="Enter your phone number" type="text" id="phone_number" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Email Address</p>
                    <label for="email_address" class="">
                        <input name="email_address" placeholder="Enter your email address" type="text" id="email_address" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Facebook (optional)</p>
                    <label for="facebook_link" class="">
                        <input name="facebook_link" placeholder="Enter your account link" type="text" id="facebook_link" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Telegram (optional)</p>
                    <label for="telegram_username" class="">
                        <input name="telegram_username" placeholder="Enter your telegram username" type="text" id="telegram_username" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">New contact (optional)</p>
                    <label for="telegram_username" class="">
                        <input name="telegram_username" placeholder="Contact title (Ex: Instagram)" type="text" id="telegram_username" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                    <label for="telegram_username" class="">
                        <input name="telegram_username" placeholder="Enter contact link" type="text" id="telegram_username" class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                    <a href="#" class="primary-color-letter mt-3 block">
                        <i class="fa fa-plus-circle"></i>
                        <span>Contact Info</span>
                    </a>
                </div>
                <div class="mt-10">
                    <a href="#form_step_3" class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_3">Previous</span>
                    </a>
                    <a href="#result_from_create_campaign" class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform submit">
                        <span class="text-white" data-target="#result_from_create_campaign">Submit</span>
                    </a>
                </div>
            </div>
            {{--5th success create--}}
            <div class="mb-[100px] form hidden" id="result_from_create_campaign">
                <div class="border md:w-2/3 sm:w-2/3 lg:w-1/3 text-center py-10 px-2 rounded-[10px] shadow-lg mx-auto">
                    <i class="fa fa-check-circle text-7xl text-green-500"></i>
                    <p class="font-bold text-2xl my-3">New Campaign Successfully Created</p>
                    <p class="text-gray-500 my-3">Congratulations! Your new campaign has been created successfully.</p>
                    <a href="#" class="inline-block mt-3 bg-white border-1 border-red-500 border py-2 px-16 rounded-[10px] hover:shadow-lg submit">
                        <span class="primary-color-letter " data-target="#result_from_create_campaign">View Campaign</span>
                    </a>
                </div>

            </div>

        </div>
    </section>
@vite('resources/js/panha.js')
</body>
</html>
