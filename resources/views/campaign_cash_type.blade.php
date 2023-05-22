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
            <div class="mb-[100px] form" id="form_step_1" data-status="1">
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
            <div class="mb-[100px] hidden form" id="form_step_2" data-status="0">
                <h1 class="text-3xl font-bold">Donation Option</h1>
                <div class="mt-4">
                    <p class="font-bold">Select the type of donation</p>
                    <label for="cash-input" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border hover:border-red-500">
                        <svg width="50" height="50" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="5" fill="#FF4238"/>
                            <g clip-path="url(#clip0_286_1194)">
                                <path d="M19.9291 14.5717V11.3574M19.9291 14.5717C18.1506 14.5717 16.7148 14.5717 16.7148 16.7146C16.7148 19.9289 23.1434 19.9289 23.1434 23.1431C23.1434 25.286 21.7077 25.286 19.9291 25.286M19.9291 14.5717C21.7077 14.5717 23.1434 15.386 23.1434 16.7146M16.7148 23.1431C16.7148 24.7503 18.1506 25.286 19.9291 25.286M19.9291 25.286V28.5003" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.9286 33.8571C27.6211 33.8571 33.8571 27.6211 33.8571 19.9286C33.8571 12.236 27.6211 6 19.9286 6C12.236 6 6 12.236 6 19.9286C6 27.6211 12.236 33.8571 19.9286 33.8571Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_286_1194">
                                    <rect width="30" height="30" fill="red" transform="translate(5 5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Cash</div>
                            <div class="text-gray-500">Online donation with ABA, ACLEDA, etc</div>
                        </div>
                        <input type="radio" class="hidden" id="cash-input" name="donate-option" value="cash">
                    </label>
                    <label for="cashOrItem-input" class="mt-3 flex w-[60%] py-3 px-5 rounded shadow-sm border  hover:border-red-500">
                        <svg width="50" height="50" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 27.5C9.08152 27.5 9.39946 27.3683 9.63388 27.1339C9.8683 26.8995 10 26.5815 10 26.25C10 25.9185 9.8683 25.6005 9.63388 25.3661C9.39946 25.1317 9.08152 25 8.75 25C8.41848 25 8.10054 25.1317 7.86612 25.3661C7.6317 25.6005 7.5 25.9185 7.5 26.25C7.5 26.5815 7.6317 26.8995 7.86612 27.1339C8.10054 27.3683 8.41848 27.5 8.75 27.5Z" fill="#FF4238" stroke="#FF4238" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M31.25 14.1903V25.8078C31.2501 25.9417 31.2143 26.0732 31.1464 26.1886C31.0784 26.304 30.9809 26.3991 30.8637 26.464L20.3638 32.2965C20.2524 32.3583 20.1273 32.3907 20 32.3907C19.8727 32.3907 19.7476 32.3583 19.6362 32.2965L9.13625 26.464C9.01915 26.3991 8.92157 26.304 8.85364 26.1886C8.78572 26.0732 8.74994 25.9417 8.75 25.8078V14.1903C8.75016 14.0566 8.78605 13.9254 8.85396 13.8102C8.92187 13.695 9.01933 13.6001 9.13625 13.5353L19.6362 7.70154C19.7476 7.63981 19.8727 7.60742 20 7.60742C20.1273 7.60742 20.2524 7.63981 20.3638 7.70154L30.8637 13.5353C30.9807 13.6001 31.0781 13.695 31.146 13.8102C31.214 13.9254 31.2498 14.0566 31.25 14.1903Z" stroke="#FF4238" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.41016 14.1157L19.6352 19.7957C19.7466 19.8577 19.872 19.8902 19.9995 19.8902C20.127 19.8902 20.2525 19.8577 20.3639 19.7957L30.6252 14.0957M20.0002 31.2482V19.9982" stroke="#FF4238" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.4 11.5V10M20.4 11.5C19.6253 11.5 19 11.5 19 12.5C19 14 21.8 14 21.8 15.5C21.8 16.5 21.1747 16.5 20.4 16.5M20.4 11.5C21.1747 11.5 21.8 11.88 21.8 12.5M19 15.5C19 16.25 19.6253 16.5 20.4 16.5M20.4 16.5V18" stroke="#FF4238" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="4.5" stroke="#FF4238"/>
                        </svg>

                        <div class="flex flex-col justify-between ml-3">
                            <div class="font-bold">Both Cash and Item</div>
                            <div class="text-gray-500">Accept both cash and items</div>
                        </div>
                        <input type="radio" class="hidden" id="cashOrItem-input" name="donate-option" value="cashOrItem">
                    </label>
                </div>
                <div class="mt-4">
                    <p class="font-bold">Chose payment method</p>
                    <p class="text-gray-400">You can choose more than one</p>
                    {{--ABA option--}}
                    <label class="shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="checkbox" class="hidden">
                        <span class="absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
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
                            <div class="my-1">hello</div>
                            <div class="text-gray-400 my-1">Donate with ABA</div>
                        </div>
                    </label>
                    <label class="ml-3 shadow relative items-center mb-1 mt-2 hover:cursor-pointer border inline-block h-[200px] w-40 hover:border-red-500 rounded-[10px]">
                        <input type="checkbox" class="hidden">
                        <span class="absolute w-8 h-8 border-2 border-gray-200 rounded-[50%] bg-white flex items-center justify-center transition-colors duration-200 right-2 top-2">
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
                            <div class="my-1">hello</div>
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
