@extends('layouts.admin')

@section('contents')

{{--    hidden input--}}
<input name="campaign_id" id="campaign_id" value="{{$campaign->id}}" class="hidden">
<input name="admin_id" id="admin_id" value="{{Auth::user()->id}}" class="hidden">


    <main class="ml-64 p-8">
        <h1 class="text-2xl font-bold mb-4">View campaign</h1>
        <div class="bg-white rounded-lg shadow p-4">
            <!--0: User information-->
            <section class="w-3/4 px-14 py-5 flex items-center">
                <img src="{{asset($user->image_profile_path)}}" id="user_profile" class="w-10 h-10 mr-2 rounded-[50%] hover:cursor-pointer" alt="profile picture" data-route-to-profile="{{route('users.view_other_user',$user->id)}}">
                <span class="user_name" >This campaign create by
                <span id="user_name" class="font-bold hover:cursor-pointer hover:text-mainColor" data-route-to-profile="{{route('users.view_other_user',$user->id)}}">{{$user->name}}</span>
                <span> on {{$campaign->created_at->format('F d,Y h:i A')}}</span>
            </span>
            </section>
            <!--1 - About -->
            <section class="about_section w-3/4 px-14 py-10">
                <div class="section_number flex items-center">
                    <div
                        class="number p-2 border border-mainColor text-center text-white bg-mainColor w-10 h-10 rounded-[50%] mr-2 font-bold">
                        1
                    </div>
                    <div class="section_title text-2xl font-bold">About</div>
                </div>
                <hr class="my-3 border-none ring-1 ring-gray-300">
                <!--campaign thumnail-->
                <div class="campaign_title mb-5">
                    <div class="text-gray-500 text-sm">Thumbnail</div>
                    <div class="text-base "><img class="w-[250px] h-[150px] object-cover rounded "
                                                 src="{{ asset($campaign->image_thumbnail_path) }}"></div>
                </div>
                <!--subtitles -->
                @foreach($campaignSubtitles as $campaignSubtitle)
                    <div class="campaign_title mb-5">
                        <div class="text-gray-500 text-base">{{ $campaignSubtitle->name }}</div>
                        <div class="text-base ">{{ $campaignSubtitle->description }}</div>
                        @if($campaignSubtitle->campaignImage != null)
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                                @foreach( $campaignSubtitle->campaignImage as $campaignImage)
                                    <!-- Picture 1 -->
                                    <div class="bg-gray-200">
                                        <img src="{{asset($campaignImage->image_path == null? '':$campaignImage->image_path)}}" alt="Picture 1" class="">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
                {{--campaign category--}}
                <div class="campaign_category mb-5">
                    <div class="text-gray-500 text-sm">Campaign category</div>
                    <div
                        class="text-base bg-red-300 inline-block px-2 py-1 rounded">{{ $campaign->campaignCategory == null? '':$campaign->campaignCategory->name }}</div>
                </div>

            </section>
            <!--2: campaign option-->
            <section class="campaign_option w-3/4 px-14 py-10">
                <div class="section_number flex items-center">
                    <div
                        class="number p-2 border border-mainColor text-center text-white bg-mainColor w-10 h-10 rounded-[50%] mr-2 font-bold">
                        2
                    </div>
                    <div class="section_title text-2xl font-bold">Campaign Option</div>
                </div>
                <hr class="my-3 border-none ring-1 ring-gray-300">
                <!--campaign option-->
                <div class="campaign_option mb-5">
                    <div class="text-gray-500 text-sm">Campaign option</div>
                    <div
                        class="text-base bg-green-300 inline-block px-2 py-1 rounded">{{ $campaign->is_cash ? 'Raising Cash': 'Raising '.($campaign->itemCategory == null? '':$campaign->itemCategory->name) }}</div>
                </div>
                @if(!$campaign->is_item)
                    {{--Payment method--}}
                    <div class="payment_method mb-5">
                        <div class="text-gray-500 text-sm">Payment Method</div>
                        <div
                            class="text-base  inline-block px-2 py-1 ">{{ strtoupper($campaign->payment_option) }} {{ $campaign->payment_account_number }} </div>
                        <span class="underline hover:text-red-400 hover:cursor-pointer" id="bank_qr"
                              data-modal-target="sample-qr-code" data-modal-toggle="sample-qr-code">View Qr Code</span>
                    </div>
                @endif
                @if($campaign->is_item)
                    @if($campaign->is_drop_off)
                        <!--drop off location-->
                        @if(!empty($campaign->dropOffLocation))
                            @foreach($campaign->dropOffLocation as $location)
                            <div class="mt-4">
                                <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3 locationWrapper ">
                                    <h2 class="text-2xl font-bold">{{ $location->location_name }}</h2>
                                    <p class="text-xs text-gray-400">{{$location->location_description}}</p>
                                </div>
                                <div class="map-container mt-2 w-2/3" >
                                    <iframe src="https://www.google.com/maps?q={{$location->location_latitude}},{{$location->location_longitude}}&z=15&output=embed" id="map-iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    @endif
                    @if($campaign->is_delivery)
                        {{--drop off note--}}
                        <div class="delivery_off_note mt-5">
                            <div class="text-gray-500 text-sm">Pick up note</div>
                            <div
                                class="text-base  inline-block px-2 py-1 ">{{ $campaign->delivery_note }}</div>
                        </div>
                    @endif
                    @if($campaign->is_drop_off && !empty($campaign->drop_off_note))
                        {{--drop off note--}}
                        <div class="delivery_off_note mt-5">
                            <div class="text-gray-500 text-sm">Drop off note</div>
                            <div
                                class="text-base  inline-block px-2 py-1 ">{{ $campaign->drop_off_note }}</div>
                        </div>
                    @endif
                @endif

            </section>
            <!--3: campaign goal section -->
            <section class="campaign_goal w-3/4 px-14 py-10">
                <!--3: campaign goal-->
                <div class="section_number flex items-center">
                    <div
                        class="number p-2 border border-mainColor text-center text-white bg-mainColor w-10 h-10 rounded-[50%] mr-2 font-bold">
                        3
                    </div>
                    <div class="section_title text-2xl font-bold">Campaign Goal</div>
                </div>
                <hr class="my-3 border-none ring-1 ring-gray-300">
                <!--Donation amount goal-->
                @if($campaign->is_cash)
                    <div class="raising_goal mb-5">
                        <div class="text-gray-500 text-sm">Raising cash amount goal</div>
                        <div class="text-base  inline-block px-2 py-1 ">
                            ${{ number_format($campaign->raising_cash_amount_goal,0,'.',',') }} </div>
                    </div>
                @else
                    <div class="raising_goal mb-5">
                        <div class="text-gray-500 text-sm">Raising item quantity goal</div>
                        <div class="text-base  inline-block px-2 py-1 font-bold">
                            {{ number_format($campaign->raising_item_quantity_goal,0,'.',',') }} of {{ $campaign->itemCategory == null? '':$campaign->itemCategory->name }}(s)</div>
                    </div>
                @endif


                <!--start date end date-->
                <div class="raising_goal mb-5">
                    <div class="text-gray-500 text-sm">Duration</div>
                    <div class="text-base  inline-block px-2 py-1 ">From <span
                            class="font-bold">{{date('F jS, Y',strtotime($campaign->start_date))}}</span> to <span
                            class="font-bold">{{ date('F jS, Y',strtotime($campaign->end_date))}}</span></div>
                </div>
            </section>
            <!--4: contact information section -->
            <section class="campaign_goal w-3/4 px-14 py-10">

                <!--4: contact information-->
                <div class="section_number flex items-center">
                    <div
                        class="number p-2 border border-mainColor text-center text-white bg-mainColor w-10 h-10 rounded-[50%] mr-2 font-bold">
                        4
                    </div>
                    <div class="section_title text-2xl font-bold">Contact Information</div>
                </div>
                <hr class="my-3 border-none ring-1 ring-gray-300">
                <div class="user_id_card mb-5">
                    <div class="text-gray-500 text-sm">Identity Card</div>
                    <div class="text-base "><img class="w-[250px] h-[150px] object-cover rounded "
                                                 src="{{ asset($idCardImagePath->path) }}"></div>
                </div>
                <!--phone number-->
                <div class="phone_number mb-5">
                    <div class="text-gray-500 text-sm">Phone number</div>
                    <div class="text-base  inline-block px-2 py-1 ">{{ $campaign->phone_number }} </div>
                </div>
                <!--email number-->
                <div class="email_address mb-5">
                    <div class="text-gray-500 text-sm">Email Address</div>
                    <div class="text-base  inline-block px-2 py-1 ">{{ $campaign->email_address }} </div>
                </div>
                <!--telegram number-->
                <div class="telegram mb-5">
                    <div class="text-gray-500 text-sm">Telegram</div>
                    <div class="text-base  inline-block px-2 py-1 ">{{ $campaign->telegram }} </div>
                </div>
                <!--facebook-->
                <div class="facebook mb-5">
                    <div class="text-gray-500 text-sm">facebook</div>
                    <div class="text-base  inline-block px-2 py-1 ">{{ $campaign->facebook }} </div>
                </div>
                @foreach($campaign->additionalContact as $contact)
                    <div class="mb-5 additional_contact">
                        <div class="text-gray-500 text-sm">{{$contact->name}}</div>
                        <div class="text-base  inline-block px-2 py-1 ">{{ $contact->link_ref }} </div>
                    </div>
                @endforeach
            </section>
            @if($campaign->status == 'pending')
                <div class="flex justify-center" id="approve_reject_wrapper">
                    <button data-modal-target="popup-modal-ask-approve" data-modal-toggle="popup-modal-ask-approve" class="flex items-center px-4 py-2 mr-2 bg-green-500 hover:bg-green-600 text-white rounded">
                        <i class="fas fa-check-circle mr-2"></i> Approve
                    </button>
                    <button data-modal-target="reason-modal" data-modal-toggle="reason-modal" class="flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">
                        <i class="fas fa-times-circle mr-2"></i> Reject
                    </button>
                </div>
            @elseif($campaign->status == 'success')
            <div class="w-[50%] text-center mx-auto" id="success_approve">
                <div class="bg-white text-white p-4 rounded-lg flex items-center justify-center border-green-700 border-dashed border">
                    <i class="fas fa-check-circle text-2xl mr-4 text-green-700"></i>
                    <span class="font-semibold text-green-700">Campaign approved</span>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{route('admin.campaigns')}}" class="px-3 py-2 bg-mainColor text-white text-center rounded-xl hover:cursor-pointer hover:bg-red-700 flex items-center"><i class="fas fa-arrow-left mr-2"></i>Back to Campaign list</a>
                </div>
            </div>
            @else
                <div class="w-[50%] text-center mx-auto" id="reject_approve">
                    <div class="bg-white text-white p-4 rounded-lg flex items-center justify-center border-red-700 border-dashed border">
                        <i class="fas fa-times-circle text-2xl mr-4 text-red-700"></i>
                        <span class="font-semibold text-red-700">Campaign Reject</span>
                    </div>
                    <div data-modal-target="rejected_reason-modal" data-modal-toggle="rejected_reason-modal" class="hover:text-mainColor italic underline hover:cursor-pointer">View reason</div>
                    <div class="flex justify-center mt-4">
                        <a href="{{route('admin.campaigns')}}" class="px-3 py-2 bg-mainColor text-white text-center rounded-xl hover:cursor-pointer hover:bg-red-700 flex items-center"><i class="fas fa-arrow-left mr-2"></i>Back to Campaign list</a>
                    </div>
                </div>
            @endif
            <div class="w-[50%] text-center mx-auto hidden" id="success_approve_after_request">
                <div class="bg-white text-white p-4 rounded-lg flex items-center justify-center border-green-700 border-dashed border">
                    <i class="fas fa-check-circle text-2xl mr-4 text-green-700"></i>
                    <span class="font-semibold text-green-700">Campaign approved</span>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{route('admin.campaigns')}}" class="px-3 py-2 bg-mainColor text-white text-center rounded-xl hover:cursor-pointer hover:bg-red-700 flex items-center"><i class="fas fa-arrow-left mr-2"></i>Back to Campaign list</a>
                </div>
            </div>
            <div class="w-[50%] text-center mx-auto hidden" id="reject_approve_after_request">
                <div class="bg-white text-white p-4 rounded-lg flex items-center justify-center border-red-700 border-dashed border">
                    <i class="fas fa-times-circle text-2xl mr-4 text-red-700"></i>
                    <span class="font-semibold text-red-700">Campaign Reject</span>
                </div>
                <div data-modal-target="rejected_reason-modal" data-modal-toggle="rejected_reason-modal" class="hover:text-mainColor italic underline hover:cursor-pointer">View reason</div>
                <div class="flex justify-center mt-4">
                    <a href="{{route('admin.campaigns')}}" class="px-3 py-2 bg-mainColor text-white text-center rounded-xl hover:cursor-pointer hover:bg-red-700 flex items-center"><i class="fas fa-arrow-left mr-2"></i>Back to Campaign list</a>
                </div>
            </div>
            <div class="hidden loader-dots block relative w-20 h-5 mx-auto" id="loadingDot">
                <div class="absolute top-0 mt-1 w-4 h-4 rounded-full bg-mainColor"></div>
                <div class="absolute top-0 mt-1 w-4 h-4 rounded-full bg-mainColor"></div>
                <div class="absolute top-0 mt-1 w-4 h-4 rounded-full bg-mainColor"></div>
                <div class="absolute top-0 mt-1 w-4 h-4 rounded-full bg-mainColor"></div>
            </div>

        </div>
    </main>

    <!--  section modal  -->
    {{--  Qr code  --}}
    <div id="sample-qr-code" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-hide="sample-qr-code">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8 flex items-center justify-center">
                    <img src="{{asset($campaign->qr_code_payment_image_path)}}" class="w-2/3 h-auto">
                </div>
            </div>
        </div>
    </div>
<!--Are you sure you want to approve?-->
    <div id="popup-modal-ask-approve" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-ask-approve">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to approved this campaign?</h3>
                    <button id="approve_button" data-modal-hide="popup-modal-ask-approve" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes
                    </button>
                    <button data-modal-hide="popup-modal-ask-approve" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
            </div>
        </div>
    </div>
{{--    Provide reason when reject--}}
    <!-- Main modal -->
    <div id="reason-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="reason-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Please provide the reason</h3>
                    <div class="space-y-6">
                        <div>

                            <label for="reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason</label>
                            <textarea id="reason" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="reason"></textarea>

                        </div>
                        <button data-modal-hide="reason-modal" id="reject_button" type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Rejected reason-->
<div id="rejected_reason-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="rejected_reason-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Rejected Reason</h3>
                    <div class="space-y-6">
                        <div>

                            <label for="rejected_reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white hidden">Reason</label>
                            <textarea id="rejected_reason" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="reason">{{ $campaign->rejected_reason }}</textarea>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@if($campaign->is_item)

@endif

@if($campaign->is_cash)

@endif

@if($campaign->is_cash)

@else

@endif

<script>

</script>
@vite('resources/js/admin.js')
@endsection
