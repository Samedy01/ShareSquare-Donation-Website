@extends('layouts.layout')
@section('contents')
<div class="campaign-profile py-14 px-14">
    <div class="pb-12">
        <div class="donation-title text-4xl pr-36">{{$campaign->title}}</div>
        <div class="h-8"></div>
        <div class="donation-subtitle text-3xl">
            <p class="donation-less-focus-text">
                Created by <a href="{{route('user_overview', ['id' => -1234])}}"><span class="donation-more-focus-text">{{$user->name}}</span></a> • {{$campaign->created_at}}
            </p>
        </div>
    </div>

    <div class="rounded-md clearfix">
        <div class="float-left w-3/5 relative" style="height: 800px">
            <img src="/img/upload/campaign/{{$campaign->image_thumbnail_path}}" class="rounded-xl w-full h-3/4" alt="">

            <div class="py-3 flex justify-between">
                {{-- @for ($i = 0; $i < 3; $i++)
                    <img class="w-1/4 flex rounded-lg" src="/img/upload/campaign/{{$campaign->image_thumbnail_path}}" style="height: 100px"></img>        
                @endfor --}}

            </div>
        </div>

        <div class="float-left w-2/5 bg-white pl-12">
            <div class="border bg-white rounded-xl shadow px-3 py-5">
                {{-- info text --}}
                <p>
                    <span class="primary-text-color text-4xl font-medium">${{$campaign->raising_cash_amount_collected / 100}} </span>
                    <span class="title-color text-2xl font-medium">raised of ${{$campaign->raising_cash_amount_goal / 100}} goal</span>
                </p>
                {{-- progress slide bar --}}
                <div class="clearfix py-5">
                    <div class="h-3 float-left rounded-l-full rounded-r-full bg-gray-300" style="width: 100%">
                        <div class="h-3 primary-bg-color float-left rounded-l-full rounded-r-full" style="width: {{$campaign->raising_cash_amount_goal > 0 ? $campaign->raising_cash_amount_collected * 100 / $campaign->raising_cash_amount_goal : 0}}%"></div>

                        {{-- <div class="h-3 primary-bg-color float-left rounded-l-full rounded-r-full" style="width: {{5000 * 100 / $campaign->raising_cash_amount_goal}}%"></div> --}}
                    </div>
                </div>
                {{-- info text --}}
                <div>
                    <p>
                        <span class="dark-blue-grey">135 donations</span>
                    </p>
                </div>
            </div>

            {{-- donate button --}}
            <div class="py-6">
                <button onclick="window.location='{{route('campaigns.donate_cash',['campaign_id'=>$campaign->id])}}'" class="w-full block primary-bg-color text-center py-6 rounded-xl">
                    <span class="text-white font-bold text-2xl">Donate Now</span>
                </button>
            </div>

            {{-- options --}}
            <div class="pb-6 flex justify-between">
                @php
                    $options = [
                        ['text' => 'Share', 'icon' => 'fa fa-share'],
                        // ['text' => 'Care', 'icon' => 'fa fa-heart'],
                        // ['text' => 'Follow', 'icon' => 'fa fa-user-plus'],
                    ];
                @endphp
                @foreach ($options as $option)
                    <div class="item">
                        <input type="text" value="{{url()->current()}}" class="hidden" id="copied_url">
                        <button onclick="copyText()">
                            <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                                <i class="dark-blue-grey {{$option['icon']}} h-5"></i>
                                <div class="h-1"></div>
                                <p class="title-color text-xl font-medium">{{$option['text']}}</p>
                            </div>
                        </button>
                    </div>

                    <script>
                        function copyText() {
                            // Get the text field
                            var copyText = document.getElementById("copied_url");


                            // Select the text field
                            copyText.select();
                            copyText.setSelectionRange(0, 99999); // For mobile devices

                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText.value);

                            // Alert the copied text
                            alert("Copied the text: " + copyText.value);
                            }
                    </script>
                    
                @endforeach

                {{-- love button --}}
                @if(!empty($isLoveCampaign))
                <div id="love-button" class="item love-button hover:cursor-pointer"  data-care-lock="{{$isLoveCampaign->is_love}}" data-campaign-id="{{$campaign->id}}" data-token="{{ csrf_token()  }}">
                    <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                        <i class="dark-blue-grey far fa-heart icon_button text-xl"></i>
                        <div class="h-1"></div>
                        <p class="title-color text-xl font-medium">Care</p>
                    </div>
                </div>
                @else
                <div class="item love-button hover:cursor-pointer"  data-care-lock="0" data-campaign-id="{{$campaign->id}}" data-token="{{ csrf_token()  }}">
                    <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                        <i class="dark-blue-grey far fa-heart icon_button text-xl"></i>
                        <div class="h-1"></div>
                        <p class="title-color text-xl font-medium">Care</p>
                    </div>
                </div>
                @endif
            </div>

            {{-- top donors --}}
            <div class="">
                <div class="title text-xl pb-3">Top Donors</div>
                <div class="">

                    {{-- mocking data --}}
                    @php
                        $top_donors = [
                            ['name' => 'Robert', 'amount' => 'KHR 40,000', 'date' => '7 May 2023'],
                            ['name' => 'Bob', 'amount' => 'KHR 20,000', 'date' => '7 May 2023'],
                            ['name' => 'Jessica', 'amount' => 'KHR 10,000', 'date' => '7 May 2023'],
                        ];
                    @endphp

                    {{-- top donor card component --}}
                    @foreach ($top_donors as $item)
                        <x-top-donor-card :name="$item['name']" :date="$item['date']" :amount="$item['amount']"></x-top-donor-card>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12"></div>



    {{-- tabs --}}

    <div class="p-3 shadow text-center">

        <div class="inline-block clearfix">
            @php
            // Tabs and corresponding routes
                $tabs = ['Overview', 'Report', 'Comments', 'Donators'];
                $routes = ['campaigns.show', 'campaigns.show.report', 'campaigns.show.comments', 'campaigns.show.donators'];
            @endphp
    
            @foreach($tabs as $tab)
                @php
                    $focus = 'more-focus';
                @endphp
                @if ($loop->index != $currenttabindex)
                    @php
                        $focus = 'less-focus';
                    @endphp 
                @endif
                @php $current_route = $routes[$loop->index]; @endphp

                <a class="item {{$focus}} inline-block float-left py-3 px-8 border-r text-xl font-medium" href="{{route("$current_route", 
                ['campaign' => $campaign, 'campaign_id' => $campaign->id])}}">
                {{$tab}}
                </a>
            @endforeach
    
        </div>
    </div>
    

    <div>
        {{$slot}}
    </div>
    
</div>
@vite('resources/js/panha.js')
@endsection
