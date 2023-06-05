@extends('layouts.layout')

@section('title', 'Browse campaign')

@section('contents')
<section class="container mt-5">
    <h1 class="font-bold text-3xl">Create New Campaign</h1>
</section>
<section class="container grid grid-cols-4 gap-16 mt-5 relative">
    <div class="absolute top-[-10%] right-[5%]"><i data-modal-target="draft-alert-modal" data-modal-toggle="draft-alert-modal" class="far fa-times-circle text-4xl hover:cursor-pointer hover:text-gray-500 text-gray-300"></i></div>
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
    <form id="formCreateCampaign" method="POST" action="{{ route('campaigns.store') }}"
          class=" col-span-3 max-h-[75vh] overflow-auto right-side pr-2 pl-2" enctype="multipart/form-data">
        @csrf
        <div class="">

            {{--1st form: About--}}
            <div class="mb-[100px] form hidden" id="form_step_1" data-status="1">

                <h1 class="text-2xl font-bold">About</h1>
                <div class="mt-4 " id="campaign_option_form">
                    <p class="font-bold">Are you donating items or raising?</p>

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
                    <label for="donating"
                           class="hover:cursor-not-allowed disabled:bg-secondaryColor mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border campaign_type">
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
                        <input type="radio" class="hidden" id="donating" name="campaign_type_disable" value="donating"
                               data-target-open="#donate_option_form,#delivery_option_form,#item_category_form">
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
                                <input type="file" id="imageThumbnailInput" name="thumbnail_image" class="hidden">
                                <label for="imageThumbnailInput" id="uploadButton"
                                       class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
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
                           placeholder="Your campaign title"
                           name="campaign_title"
                    >
                    <a id="AddPhotoToTitle" href="#" class="primary-color-letter mt-3">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_title[]" id="hidden-input-images-title" type="file" multiple
                           class="hidden inputForMultipleImage">
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
                    <textarea id="campaign_summary_1" name="campaign_summary"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="Your campaign description"></textarea>
                    <a id="AddPhotoToSummary" href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-summary">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_summary[]" id="hidden-input-images-for-summary" type="file" multiple
                           class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>
                <div class="flex flex-col mt-4 oneSubTitle">
                    <label for="campaign_purpose" class="font-bold">Purpose</label>
                    <textarea id="campaign_purpose"
                              name="campaign_purpose"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-purpose">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_purpose[]" id="hidden-input-images-for-purpose" type="file" multiple
                           class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>
                <div class="flex flex-col mt-4 oneSubTitle">
                    <label for="campaign_goal" class="font-bold">Goal</label>
                    <textarea id="campaign_goal"
                              name="campaign_goal"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAnyTitle"
                       data-input-target="#hidden-input-images-for-goal">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_goal[]" id="hidden-input-images-for-goal" type="file" multiple
                           class="hidden inputForMultipleImage">
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
                    <select id="campaign_category" name="campaign_category"
                            class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent">
                        <option class="" value="" selected>---- Choose one category ---</option>

                        @foreach($campaignCategories as $campaignCategory)
                            <option class="" value="{{ $campaignCategory->id }}">{{ $campaignCategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-10">
                    <a data-target="#form_step_2" href="#form_step_2"
                       class="nextform inline-block bg-red-500 py-2 px-16 rounded-[10px]">
                        <span class="text-white">Next</span>
                    </a>
{{--                    <button type="submit" class="p-3 rounded bg-green-300">Submit</button>--}}
                </div>
            </div>
            {{--2nd form: Campaign options / campaign option --}}
            <div class="mb-[100px] form" id="form_step_2" data-status="0">
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
                        <input type="radio" class="hidden" id="donating-item" name="donation_option" value="item"
                               checked>
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
                        <input type="radio" class="hidden" id="cash-input" name="raising_option" value="cash">
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
                        <input type="radio" class="hidden" id="cashOrItem-input" name="raising_option"
                               value="cashOrItem">
                    </label>
                </div>
                {{--Choose item category--}}
                <div class="flex flex-col mt-4 hidden " id="item_category_form">
                    <label for="item_category" class="font-bold">Item Category</label>
                    <select id="item_category" name="item_category_id"
                            class="select2 border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent">
                        <option class="" value="">Please selected item category</option>
                        @foreach($itemCategories as $itemCategory)
                            <option class="" value="{{ $itemCategory->id }}">{{ $itemCategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{--Choose type of payment--}}
                <div class="mt-4 hidden" id="payment_option_form">
                    <p class="font-bold">Chose payment method</p>
                    <p class="text-gray-400">You can choose more than one</p>
                    {{--ABA option--}}
                    <label for="aba_method"
                           class="paymentOption shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="radio" class="hidden" id="aba_method" name="payment_option" value="aba">
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
                        <input type="radio" class="hidden" id="aceleda_method" name="payment_option" value="acleda">
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
                            <div class="my-1">Acleda</div>
                            <div class="text-gray-400 my-1">Donate with Acleda</div>
                        </div>
                    </label>
                </div>
                <div class="hidden mt-4" id="account_number_form">
                    <div class="flex flex-col">
                        <p class="font-bold">Acount number</p>
                        <label for="account_number" class="">
                            <input placeholder="Enter your ABA account number" type="text" id="campaign_purpose"
                                   name="payment_account_number"
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
                                    <div
                                        class="previewContainer bg-gray-100 border border-gray-300 rounded-lg p-4 mt-2">
                                        <div class="previewMessage text-gray-500 text-center">
                                            <span class="block">Please upload the your bank QR code.</span>
                                        </div>
                                        <img class="previewImage hidden mt-4 rounded-md mx-auto" alt="Image Preview">
                                    </div>
                                </div>
                                <div class="flex">
                                    <input type="file" id="imageQrCodeInput" name="qr_code_image"
                                           class="hidden image_input_with_preview">
                                    <label for="imageQrCodeInput" id="uploadButton"
                                           class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>
                                        <span>Select Image</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="underline text-gray-400" data-modal-target="sample-qr-code" data-modal-toggle="sample-qr-code">See the sample</a>
                        <div id="sample-qr-code" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="sample-qr-code">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8 flex items-center justify-center">
                                        <img src="{{asset('img/sample_qr_code.png')}}" class="w-2/3 h-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--In form 2st , show this div if the campaign is both donation/raising--}}
                <div class="mt-4 hidden" id="delivery_option_form">
                    <p class="font-bold">Delivery option</p>
                    <p class="text-gray-400">Choose one option on how you would donate your item</p>
                    {{--Delivery options--}}
                    <label for="drop-off"
                           class="shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px] deliveryOption">
                        <input type="checkbox" class="hidden" id="drop-off" name="deliveryOption1" value="drop-off"
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
                        <input type="checkbox" class="hidden" id="delivery" name="deliveryOption2" value="delivery"
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
                <div class="mt-4" id="pickup_location_form"><!--don't forget to add hidden back-->
                    <p class="font-bold">Pick up location</p>
                    <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3 locationWrapper">
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
                    <!--additional location -->
                    <div class="" id="additionalLocationWrapper">

                    </div>
                    <a href="#" class="primary-color-letter mt-3 inline-block" data-modal-target="authentication-modal"
                       data-modal-toggle="authentication-modal">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Location</span>
                    </a>

                </div>
                <div class="mt-4 hidden" id="pickup_note_form">
                    <div class="flex flex-col">
                        <p class="font-bold">Add Pick-Up Note</p>
                        <label for="drop_off_note" class="">
                                <textarea id="drop_off_note"
                                          name="drop_off_note"
                                          class="w-full border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                                          placeholder="Add pick-up note"></textarea>
                        </label>
                    </div>
                </div>
                <div class="mt-4 hidden" id="delivery_note_form">
                    <div class="flex flex-col ">
                        <p class="font-bold">Add Delivery Note</p>
                        <label for="delivery_note" class="">
                                <textarea id="delivery_note"
                                          name="delivery_note"
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
                    <button type="submit" class="bg-blue-500 rounded p-3">Submit</button>

                </div>
            </div>
            {{--3th form: Campaign options--}}
            <div class="mb-[100px]  form hidden" id="form_step_3">
                <h1 class="text-3xl font-bold">Fund Raising Goal</h1>
                <div class="mt-4">
                    <p class="font-bold">Donation goal amount</p>
                    <label for="goal_amount" class="">
                        <input name="raising_or_donating_goal_amount" placeholder="Enter your donation goal amount"
                               type="number" id="goal_amount"
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
                                <input name="start_date" type="text"
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
                                <input name="end_date" type="text"
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
                                <div id="previewContainer"
                                     class="bg-gray-100 border border-gray-300 rounded-lg p-4 mt-2">
                                    <div id="previewMessage" class="text-gray-500 text-center">
                                        <span class="block">Please upload your identity card.</span>
                                    </div>
                                    <img id="previewImage" class="hidden mt-4 rounded-md mx-auto" alt="Image Preview">
                                </div>
                            </div>
                            <div class="flex">
                                <input type="file" id="imageIDCardInput" name="id_card_image" class="hidden">
                                <label for="imageIDCardInput" id="uploadButton"
                                       class="flex items-center justify-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
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
                    {{--                    <a href="#result_from_create_campaign"--}}
                    {{--                       class="inline-block bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg nextform submit">--}}
                    {{--                        <span class="text-white" data-target="#result_from_create_campaign">Submit</span>--}}
                    {{--                    </a>--}}
{{--                    <button type="submit" class=" rounded p-3 bg-green-500 py-2 px-16 rounded-[10px] hover:shadow-lg text-white">Submit</button>--}}
                    <button id="buttonFormSubmit" type="submit"
                            class="rounded p-3 bg-red-500 py-2 px-16 rounded-[10px] hover:shadow-lg submit text-white"
                            data-target="#result_from_create_campaign">
                        <span class="letterSubmmit" id="letterSubmmit">Submit</span>
                        <div role="status" class="loading hidden" id="submitLoading">
                            <svg aria-hidden="true"
                                 class="inline w-6 h-6 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor"/>
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill"/>
                            </svg>
                        </div>
                    </button>

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
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
     class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Adding New drop-off location</h3>
                <form class="space-y-6" action="#" id="formAddNewLocation">
                    <div>
                        <label for="location_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">location
                            Name</label>
                        <input type="text" name="location_name" id="location_name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Cadt Innovation Center" required>
                    </div>
                    <div>
                        <label for="location_description"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location
                            description</label>
                        <input type="text" name="location_description" id="location_description"
                               placeholder="2nd Bridge Prek Leap, National Road Number 6, Phnom Penh, 12252"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               required>
                    </div>
                    <div class="justify-between">
                        <label for="location_geocodes"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location
                        </label>
                        <div class="relative w-full border h-[300px]">
                            <div id="map" class="absolute top-0 w-full left-0 bottom-0"></div>
                        </div>
                        <input class="hidden" type="text" name="latitude_input" id="latitude_input">
                        <input class="hidden" type="text" name="longitude_input" id="longitude_input">
                    </div>

                    <button type="submit"
                            class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add new Location
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="draft-alert-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="draft-alert-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Do you want to save this to draft?</h3>
                <button data-modal-hide="draft-alert-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Save as draft
                </button>
                <button data-modal-hide="draft-alert-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicGFuaGFna3AiLCJhIjoiY2xpaXozbXBoMDM2YTNnczVhaXFxdjhhOCJ9.4IzvuunZe8a3RNR4Qs9HlQ';
    const map = new mapboxgl.Map({
        container: 'map',
// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [-79.4512, 43.6568],
        zoom: 8
    });

    /* Given a query in the form "lng, lat" or "lat, lng"
    * returns the matching geographic coordinate(s)
    * as search results in carmen geojson format,
    * https://github.com/mapbox/carmen/blob/master/carmen-geojson.md */
    const coordinatesGeocoder = function (query) {
// Match anything which looks like
// decimal degrees coordinate pair.
        const matches = query.match(
            /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
        );
        if (!matches) {
            return null;
        }

        function coordinateFeature(lng, lat) {
            return {
                center: [lng, lat],
                geometry: {
                    type: 'Point',
                    coordinates: [lng, lat]
                },
                place_name: 'Lat: ' + lat + ' Lng: ' + lng,
                place_type: ['coordinate'],
                properties: {},
                type: 'Feature'
            };
        }

        const coord1 = Number(matches[1]);
        const coord2 = Number(matches[2]);
        const geocodes = [];

        if (coord1 < -90 || coord1 > 90) {
// must be lng, lat
            geocodes.push(coordinateFeature(coord1, coord2));
        }

        if (coord2 < -90 || coord2 > 90) {
// must be lat, lng
            geocodes.push(coordinateFeature(coord2, coord1));
        }

        if (geocodes.length === 0) {
// else could be either lng, lat or lat, lng
            geocodes.push(coordinateFeature(coord1, coord2));
            geocodes.push(coordinateFeature(coord2, coord1));
        }
        console.log(geocodes[0].center[0]) // [0] = longitude , [1] = latitude
        console.log(geocodes[0].center[1]) // [0] = longitude , [1] = latitude

        document.getElementById("latitude_input").value = geocodes[0].center[1];
        document.getElementById("longitude_input").value = geocodes[0].center[0];

        return geocodes;
    };

    // Add the control to the map.
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            localGeocoder: coordinatesGeocoder,
            zoom: 15,
            placeholder: 'Try: -40, 170',
            mapboxgl: mapboxgl,
            reverseGeocode: true
        })
    );
</script>
@vite('resources/js/panha.js')
@endsection
