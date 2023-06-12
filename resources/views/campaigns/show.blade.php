@extends('layouts.layout')
@section('contents')
<div class="campaign-profile donation px-14">
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
                <button data-route="{{route('campaigns.donate_cash',['campaign_id'=>$campaign->id])}}" class="w-full block primary-bg-color text-center py-6 rounded-xl donateNow">
                    <span class="text-white font-bold text-2xl">Donate Now</span>
                </button>
            </div>

            {{-- options --}}
            <div class="py-6 flex justify-between">
                @php
                    $options = [
                        ['text' => 'Share', 'icon' => 'fa fa-share','class'=>'share-button'],
                        ['text' => 'Care', 'icon' => 'far fa-heart','class'=>'love-button'],
                        ['text' => 'Follow', 'icon' => 'fa fa-user-plus','class'=>'follow-button'],
                    ];
                @endphp
                @foreach ($options as $option)
                    <div class="item {{$option['class']}} hover:cursor-pointer">
                        <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                            <i class="dark-blue-grey {{$option['icon']}} h-5 icon_button"></i>
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
                $focus = 'more-focus';
            @endphp

            @foreach($tabs as $tab)
                @if (!$loop->first)
                    @php
                        $focus = 'less-focus';
                    @endphp
                @endif
                <div class="item {{$focus}} inline-block float-left py-3 px-8 border-r text-xl font-medium">{{$tab}}</div>
            @endforeach

        </div>
    </div>

    <div class="pb-12"></div>

    <div class="donation-details">

        @php
            $campaign_display = [
                'Summary' => $campaign->summary,
                'Purpose' => $campaign->purpose,
                'Goal' => $campaign->goal,
            ];
        @endphp


        @foreach ($campaign_display as $key=>$value)
            <div class="item pb-16">
                <div class="title text-4xl pb-12">{{$key}}</div>
                <div class="content text-xs">{{$value}}</div>
            </div>
        @endforeach

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

        <div class="p-3"></div>

        <button class="border primary-border-color rounded-xl p-6 block w-full">
            <span class="primary-text-color text-center font-semibold text-2xl">Add New Subtitle</span>
        </button>
    </div>
</div>
@vite('resources/js/panha.js')
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body>

</body>
</html> --}}
