@extends('layouts.layout')
@section('contents')
<div class="campaign-profile py-14 px-14">
    <div class="pb-12">
        <div class="donation-title text-4xl pr-36">{{$campaign->title}}</div>
        <div class="h-8"></div>
        <div class="donation-subtitle text-3xl">
            <p class="donation-less-focus-text">
                Created by <span class="donation-more-focus-text">{{$user->name}}</span> • {{$campaign->created_at}}
            </p>
        </div>
    </div>

    <div class="tmp bg-green-200 rounded-md clearfix">
        <div class="float-left w-3/5 bg-yellow-300">
            <img src="/images/campaigns/{{$campaign->image_thumbnail_path}}" class="rounded-xl" alt="">
            <div class="p-8">
                Under Image Content
            </div>
        </div>



        <div class="float-left w-2/5 bg-white pl-12">
            <div class="border bg-white rounded-xl shadow px-3 py-5">
                {{-- info text --}}
                <p>
                    <span class="primary-text-color text-4xl font-medium">$4456 </span>
                    <span class="title-color text-2xl font-medium">raised of $20,000 goal</span>
                </p>
                {{-- progress slide bar --}}
                <div class="clearfix py-5">
                    <div class="h-3 primary-bg-color w-1/4 float-left rounded-l-md"></div>
                    <div class="h-3 bg-gray-300 w-3/4 float-left rounded-r-md"></div>
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
                <button class="w-full block primary-bg-color text-center py-6 rounded-xl">
                    <span class="text-white font-bold text-2xl">Donate Now</span>
                </button>
            </div>

            {{-- options --}}
            <div class="py-6 flex justify-between">
                @php
                    $options = [
                        ['text' => 'Share', 'icon' => 'fa fa-share'],
                        ['text' => 'Care', 'icon' => 'fa fa-heart'],
                        ['text' => 'Follow', 'icon' => 'fa fa-user-plus'],
                    ];
                @endphp
                @foreach ($options as $option)
                    <div class="item">
                        <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                            <i class="dark-blue-grey {{$option['icon']}} h-5"></i>
                            <div class="h-1"></div>
                            <p class="title-color text-xl font-medium">{{$option['text']}}</p>
                        </div>
                    </div>
                @endforeach
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
                ['campaign' => $campaign, 'campaign_id' => 1])}}">
                {{$tab}}
                </a>
            @endforeach
    
        </div>
    </div>
    

    <div>
        {{$slot}}
    </div>
    
</div>
@endsection
