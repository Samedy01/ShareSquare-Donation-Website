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
    @vite('resources/js/app.js')
    @vite('resources/js/datepicker.js')
{{--    @vite('resources/flowbite.min.js')--}}
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
                <div
                    class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline">
                    <i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">1</span>
                </div>
                <div class="ml-3 text-label-form">About</div>
            </div>
            <hr>
            <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_2">
                <div
                    class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline">
                    <i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">2</span>
                </div>
                <div class="ml-3 text-label-form">Campaign Option</div>
            </div>
            <hr>
            <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_3">
                <div
                    class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline">
                    <i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">3</span>
                </div>
                <div class="ml-3 text-label-form">Campaign Goal</div>
            </div>
            <hr>
            <div class="text-center flex items-center my-5 label-form-number" data-for-label="form_step_4">
                <div
                    class="border p-3 rounded-[50%] w-5 h-5 flex items-center justify-center bg-gray-200 form-label-outline">
                    <i class="fa fa-check text-white hidden"></i><span class="text-gray-500 num-label-form">4</span>
                </div>
                <div class="ml-3 text-label-form">Contact Info</div>
            </div>
        </div>
    </div>
    {{--Right side--}}
    <form class=" col-span-3 max-h-[88vh] overflow-auto right-side pr-2 pl-2">
        <div class="">
            {{--<div class="test_append bg-red-500 rounded shadow-lg hover:cursor-pointer">
                Hello
            </div>
            <div class="test_click bg-yellow-300 rounded hover:cursor-pointer">Hello world</div>
            <div id="appendWraper">

            </div>--}}
            {{--1st form: About--}}
            <div class="mb-[100px] form" id="form_step_1" data-status="1">
                <h1 class="text-2xl font-bold">About</h1>
                <div class="mt-4 " id="campaign_option_form">
                    <p class="font-bold">Are you donating items or raising?</p>
                    <label for="donating"
                           class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border hover:border-red-500 campaign_type hover:cursor-pointer">
                        {{--normal image--}}
                        <img
                            src="{{asset('images/svgs/donating.svg')}}"
                            alt="triangle with all three sides equal"
                            class="icon"
                            height="50"
                            width="50"/>
                        {{--image active when checked--}}
                        <img
                            src="{{asset('images/svgs/donating_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="hidden icon_active"
                            width="50"/>
                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Donating</div>
                            <div class="text-gray-500">Online donation with ABA, ACELEDA, etc</div>
                        </div>
                        <input type="radio" class="hidden" id="donating" name="campaign_type" value="donating"
                               data-target-open="#donate_option_form,#delivery_option_form,#item_category_form">
                    </label>
                    <label for="raising"
                           class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border  hover:border-red-500 campaign_type hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/raising.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon"
                            width="50"/>
                        <img
                            src="{{asset('images/svgs/raising_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon_active hidden"
                            width="50"/>

                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Raising</div>
                            <div class="text-gray-500">Raising cash and/or items for the campaign</div>
                        </div>
                        <input type="radio" class="hidden" id="raising" name="campaign_type" value="raising"
                               data-target-open="#raising_option_form">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Campaign Thumbnail</p>
                    {{--Image preview--}}
                    <div class="max-w-md">
                        <div id="uploadContainer" class="bg-white rounded-lg shadow-md p-6 uploadContainer">
                            <div id="imagePreview" class="mb-6">
                                <label for="imageInput" class="block text-gray-700 hidden">Select Image</label>
                                <div class="previewContainer bg-gray-100 border border-gray-300 rounded-lg p-4 mt-2">
                                    <div class="previewMessage text-gray-500 text-center">
                                        <span class="block">Please upload the campaign thumbnail.</span>
                                    </div>
                                    <img class="previewImage hidden mt-4 rounded-md mx-auto" alt="Image Preview">
                                </div>
                            </div>
                            <div class="flex">
                                <input type="file" id="imageThumbnailInput" name="id_card_image" class="hidden">
                                <label for="imageThumbnailInput" id="uploadButton" class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt mr-2"></i>
                                    <span>Select Image</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title" class="font-bold">Title</label>
                    <input type="text" id="campaign_title"
                           class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                           placeholder="Your campaign title">
                    <a id="AddPhotoToTitle" href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                    <input id="hidden-input-images-title" type="file" multiple class="hidden inputForMultipleImage">
                    <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                        <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
                            <img class="mx-auto w-32 hidden"
                                 src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                 alt="no data"/>
                            <span class="text-small text-gray-500 hidden">No files selected</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col mt-4 oneSubTitle">
                    <label for="campaign_title" class="font-bold">Summary</label>
                    <textarea id="campaign_summary_1"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="Your campaign description"></textarea>
                    <a id="AddPhotoToSummary" href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-summary">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                    <input id="hidden-input-images-for-summary" type="file" multiple class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>
                <div class="flex flex-col mt-4 oneSubTitle">
                    <label for="campaign_title" class="font-bold">Purpose</label>
                    <textarea id="campaign_purpose"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-purpose">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                    <input id="hidden-input-images-for-purpose" type="file" multiple class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>
                <div class="flex flex-col mt-4 oneSubTitle">
                    <label for="campaign_title" class="font-bold">Goal</label>
                    <textarea id="campaign_purpose"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-goal">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos/Videos</span>
                    </a>
                    <input id="hidden-input-images-for-goal" type="file" multiple class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>
                {{--DIV for adding new subtitle to--}}
                <div id="additionalSubtitle" class="">

                </div>
                <div class="mt-4">
                    <a id="addNewSubtitle" href="#" class="inline-block bg-gray-200 py-2 px-5 rounded-[10px]">
                        <span class="">Add New Subtitle</span>
                    </a>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_category" class="font-bold">Campaign Category</label>
                    <select id="campaign_category"
                            class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent">
                        <option name="campaign-category" class="" value="1">Education</option>
                        <option name="campaign-category" class="" value="2">Health</option>
                    </select>
                </div>
                <div class="mt-10">
                    <a data-target="#form_step_2" href="#form_step_2"
                       class="nextform inline-block bg-red-500 py-2 px-16 rounded-[10px]">
                        <span class="text-white">Next</span>
                    </a>
                </div>
            </div>
            {{--2nd form: Campaign options / campaign option --}}
            <div class="mb-[100px] form hidden" id="form_step_2" data-status="0">
                <h1 class="text-3xl font-bold">Donation Option</h1>

                {{--Donating item campaing option--}}
                <div class="mt-4 hidden" id="donate_option_form">
                    <p class="font-bold">Type Of Donation</p>
                    <label for="donating-item"
                           class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border border-red-500 bg-red-50 hover:border-red-500 donation_option hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/item_active.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            width="50"
                            class="icon_active"
                        />
                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Item</div>
                            <div class="text-gray-500">Pick-Up, Delivery or Both</div>
                        </div>
                        <input type="radio" class="hidden" id="donating-item" name="donate-option" value="cash" checked>
                    </label>
                </div>
                {{--Select the type of raising of donation --}}
                <div class="mt-4 hidden" id="raising_option_form">
                    <p class="font-bold">Select the type of donation</p>
                    <label for="cash-input"
                           class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border hover:border-red-500 raising_option hover:cursor-pointer">
                        <img
                            src="{{asset('images/svgs/cash.svg')}}"
                            alt="triangle with all three sides equal"
                            height="50"
                            class="icon"
                            width="50"/>
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
                        <input type="radio" class="hidden" id="cash-input" name="raising-option" value="cash">
                    </label>
                    <label for="cashOrItem-input"
                           class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border  hover:border-red-500 raising_option hover:cursor-pointer">
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
                        <input type="radio" class="hidden" id="cashOrItem-input" name="raising-option"
                               value="cashOrItem">
                    </label>
                </div>
                {{--Choose item category--}}
                <div class="flex flex-col mt-4 hidden" id="item_category_form">
                    <label for="item_category" class="font-bold">Item Category</label>
                    <select id="item_category" name="item_category_id"
                            class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent">
                        <option class="" value="">Please selected item category</option>
                        <option class="" value="book">book</option>
                        <option class="" value="Marker">Marker</option>
                    </select>
                </div>
                {{--Choose type of payment--}}
                <div class="mt-4 hidden" id="payment_option_form">
                    <p class="font-bold">Chose payment method</p>
                    <p class="text-gray-400">You can choose more than one</p>
                    {{--ABA option--}}
                    <label for="aba_method"
                           class="paymentOption shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="radio" class="hidden" id="aba_method" name="paymentOption" value="aba">
                        <span
                            class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                    <span class="tick-icon hidden text-red-500">
                                      <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                              stroke-linecap="round"
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
                    <label for="aceleda_method"
                           class="paymentOption ml-3 shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="radio" class="hidden" id="aceleda_method" name="paymentOption" value="aceleda">
                        <span
                            class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                    <span class="tick-icon hidden text-red-500">
                                      <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                              stroke-linecap="round"
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
                <div class="hidden mt-4" id="account_number_form">
                    <div class="flex flex-col">
                        <p class="font-bold">Acount number</p>
                        <label for="account_number" class="">
                            <input placeholder="Enter your ABA account number" type="text" id="campaign_purpose"
                                   class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                        </label>
                    </div>
                </div>
                <div class="hidden mt-4" id="add_qr_code_pay_form">
                    <div class="flex flex-col">
                        <p class="font-bold">QR code</p>
                        <a href="#" class="primary-color-letter mt-3 hidden">
                            <i class="fa fa-plus-circle"></i>
                            <span>Add Qr code image</span>
                        </a>
                        {{--Image preview--}}
                        <div class="max-w-md">
                            <div id="uploadContainer" class="bg-white rounded-lg shadow-md p-6 uploadContainer">
                                <div id="imagePreview" class="mb-6">
                                    <label for="imageInput" class="block text-gray-700 hidden">Select Image</label>
                                    <div class="previewContainer bg-gray-100 border border-gray-300 rounded-lg p-4 mt-2">
                                        <div class="previewMessage text-gray-500 text-center">
                                            <span class="block">Please upload the your bank QR code.</span>
                                        </div>
                                        <img class="previewImage hidden mt-4 rounded-md mx-auto" alt="Image Preview">
                                    </div>
                                </div>
                                <div class="flex">
                                    <input type="file" id="imageQrCodeInput" name="qr_code_image" class="hidden image_input_with_preview">
                                    <label for="imageQrCodeInput" id="uploadButton" class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>
                                        <span>Select Image</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="underline text-gray-400">See the sample</a>
                    </div>
                </div>
                {{--In form 2st , show this div if the campaign is both donation/raising--}}
                <div class="mt-4 hidden" id="delivery_option_form">
                    <p class="font-bold">Delivery option</p>
                    <p class="text-gray-400">Choose one option on how you would donate your item</p>
                    {{--Delivery options--}}
                    <label for="drop-off"
                           class="shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                        <input type="checkbox" class="hidden" id="drop-off" name="deliveryOption" value="drop-off"
                               data-target-open="#pickup_note_form,#pickup_location_form">
                        <span
                            class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                    <span class="tick-icon hidden text-red-500">
                                      <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                              stroke-linecap="round"
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
                    <label for="delivery"
                           class="ml-3 shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                        <input type="checkbox" class="hidden" id="delivery" name="deliveryOption" value="delivery"
                               data-target-open="#delivery_note_form">
                        <span
                            class="tick-border absolute w-8 h-8 border-2 border-gray-200 rounded bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
                                    <span class="tick-icon hidden text-red-500">
                                      <svg class="w-6 h-6" viewBox="0 0 12 10" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4.75L4.5 8.25L11 1" stroke="currentColor" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                      </svg>
                                    </span>
                                </span>
                        <div class="text-gray-700 h-full flex justify-center items-center flex-col">
                            <div class="my-1 h-auto w-20 object-cover">
                                <img src="{{asset('images/svgs/delivery.svg')}}" alt="delivery image">
                            </div>
                            <div class="my-1">Delivery</div>
                            <div class="text-gray-400 my-1 text-center">Delivery option to deliver the items</div>
                        </div>
                    </label>
                </div>
                {{--TODO pickup location--}}
                <div class="mt-4 hidden" id="pickup_location_form">
                    <p class="font-bold">Pick up location</p>
                    <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3">
                        <h2 class="text-2xl font-bold">CADT - Innovation Center</h2>
                        <p class="text-xs text-gray-400">2nd Bridge Prek Leap, National Road Number 6, Phnom Penh,
                            12252</p>
                        <div class="absolute flex flex-col top-0 h-full right-3 justify-center">
                            <div class=" flex ">
                                <a href="#"
                                   class="flex w-5 h-5 justify-center items-center p-3 bg-white mr-2 shadow rounded"><i
                                        class="fa fa-edit block"></i></a>
                                <a href="#"
                                   class="flex w-5 h-5 justify-center items-center p-3 bg-white shadow rounded"><i
                                        class="fa fa-trash block"></i></a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-color-letter mt-3 block" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Location</span>
                    </a>

                </div>
                <div class="mt-4 hidden" id="pickup_note_form">
                    <div class="flex flex-col">
                        <p class="font-bold">Add Pick-Up Note</p>
                        <label for="campaign_title" class="">
                                <textarea id="campaign_purpose"
                                          class="w-full border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                                          placeholder="Add pick-up note"></textarea>
                        </label>
                    </div>
                </div>
                <div class="mt-4 hidden" id="delivery_note_form">
                    <div class="flex flex-col ">
                        <p class="font-bold">Add Delivery Note</p>
                        <label for="campaign_title" class="">
                                <textarea id="campaign_purpose"
                                          class="w-full border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                                          placeholder="Add delivery note"></textarea>
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <a href="#form_step_1"
                       class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_1">Previous</span>
                    </a>
                    <a href="#form_step_3"
                       class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform">
                        <span class="text-white" data-target="form_step_3">Next</span>
                    </a>
                </div>
            </div>
            {{--3th form: Campaign options--}}
            <div class="mb-[100px] hidden  form" id="form_step_3">
                <h1 class="text-3xl font-bold">Fund Raising Goal</h1>
                <div class="mt-4">
                    <p class="font-bold">Donation goal amount</p>
                    <label for="goal_amount" class="">
                        <input placeholder="Enter your donation goal amount" type="number" id="goal_amount"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Campaign Duration</p>
                    <label for="compaign_duration">
                        <div date-rangepicker datepicker-format="dd-M-yyyy" class="flex items-center mt-4">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                       class="py-5 px-7 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                       class="py-5 px-7 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full pl-10 p-2.5"
                                       placeholder="Select date end">
                            </div>
                        </div>
                    </label>
                </div>
                <div class="mt-10">
                    <a href="#form_step_2"
                       class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_2">Previous</span>
                    </a>
                    <a href="#form_step_4"
                       class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform">
                        <span class="text-white" data-target="form_step_4">Next</span>
                    </a>
                </div>
            </div>
            {{--4th form: Contact info--}}
            <div class="mb-[100px] form hidden" id="form_step_4">
                <h1 class="text-3xl font-bold">Contact Info</h1>
                <div class="mt-4">
                    <p class="font-bold">User Identity Card</p>
                    {{--Image preview--}}
                    <div class="max-w-md">
                        <div id="uploadContainer" class="bg-white rounded-lg shadow-md p-6">
                            <div id="imagePreview" class="mb-6">
                                <label for="imageInput" class="block text-gray-700">Select Image</label>
                                <div id="previewContainer" class="bg-gray-100 border border-gray-300 rounded-lg p-4 mt-2">
                                    <div id="previewMessage" class="text-gray-500 text-center">
                                        <span class="block">Please upload your identity card.</span>
                                    </div>
                                    <img id="previewImage" class="hidden mt-4 rounded-md mx-auto" alt="Image Preview">
                                </div>
                            </div>
                                <div class="flex">
                                    <input type="file" id="imageIDCardInput" name="id_card_image" class="hidden">
                                    <label for="imageIDCardInput" id="uploadButton" class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>
                                        <span>Select Image</span>
                                    </label>
                                </div>
                        </div>
                    </div>


                </div>
                <div class="mt-4">
                    <p class="font-bold">Phone number</p>
                    <label for="phone_number" class="">
                        <input name="phone_number" placeholder="Enter your phone number" type="text" id="phone_number"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Email Address</p>
                    <label for="email_address" class="">
                        <input name="email_address" placeholder="Enter your email address" type="text"
                               id="email_address"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Facebook (optional)</p>
                    <label for="facebook_link" class="">
                        <input name="facebook_link" placeholder="Enter your account link" type="text" id="facebook_link"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Telegram (optional)</p>
                    <label for="telegram_username" class="">
                        <input name="telegram_username" placeholder="Enter your telegram username" type="text"
                               id="telegram_username"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
                <div class="mt-4">
                    <div id="additionalContactWrapper">
                    </div>
                    <a id="addNewContactInfo" href="#" class="primary-color-letter mt-3 block">
                        <i class="fa fa-plus-circle"></i>
                        <span>Contact Info</span>
                    </a>
                </div>
                <div class="mt-10">
                    <a href="#form_step_3"
                       class="inline-block bg-white border-red-500 border py-2 px-16 rounded-[10px] hover:shadow previousform">
                        <span class="primary-color-letter" data-target="form_step_3">Previous</span>
                    </a>
                    <a href="#result_from_create_campaign"
                       class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform submit">
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
                <a href="#"
                   class="inline-block mt-3 bg-white border-1 border-red-500 border py-2 px-16 rounded-[10px] hover:shadow-lg submit">
                        <span class="primary-color-letter "
                              data-target="#result_from_create_campaign">View Campaign</span>
                </a>
            </div>
        </div>

        </div>
    </form>
</section>

<!-- using two similar templates for simplicity in js code -->
<template id="file-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0"
                 class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
            <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed"/>

            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                <h1 class="flex-1 group-hover:text-blue-800"></h1>
                <div class="flex">
              <span class="p-1 text-blue-800">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24">
                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z"/>
                  </svg>
                </i>
              </span>
                    <p class="p-1 size text-xs text-gray-700"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none"
                                  d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z"/>
                        </svg>
                    </button>
                </div>
            </section>
        </article>
    </li>
</template>

<template id="image-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0"
                 class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
            <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed"/>

            <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                <h1 class="flex-1"></h1>
                <div class="flex">
              <span class="p-1">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24">
                    <path
                        d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z"/>
                  </svg>
                </i>
              </span>

                    <p class="p-1 size text-xs"></p>
                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none"
                                  d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z"/>
                        </svg>
                    </button>
                </div>
            </section>
        </article>
    </li>
</template>

{{--Template for new subtitle--}}
<template id="newSubTitleTemplate">
    <div class="flex flex-col mt-4 oneSubTitle hidden newSubtitleTemplate">
        <label for="campaign_title-" class="font-bold">Title</label>
        <textarea id="campaign_title-"
                  class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                  placeholder="What is the purpose of your campaign"></textarea>
        <a href="#" class="primary-color-letter mt-3 addPhotoToAdditionalTitle"
           data-input-target="#hidden-input-images-for-title-">
            <i class="fa fa-plus-circle"></i>
            <span>Add Photos/Videos</span>
        </a>
        <input id="hidden-input-images-for-title-" type="file" multiple class="hidden inputForMultipleImage">
        <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

        </ul>
    </div>
</template>

<!-- template Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Adding New drop-off location</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <label for="location_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">location Name</label>
                        <input type="text" name="location_name" id="location_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cadt Innovation Center" required>
                    </div>
                    <div>
                        <label for="location_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location description</label>
                        <input type="text" name="location_description" id="location_description" placeholder="2nd Bridge Prek Leap, National Road Number 6, Phnom Penh, 12252" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="flex justify-between">

                    </div>
                    <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add new Location</button>
                </form>
            </div>
        </div>
    </div>
</div>

@vite('resources/js/panha.js')
</body>
</html>
