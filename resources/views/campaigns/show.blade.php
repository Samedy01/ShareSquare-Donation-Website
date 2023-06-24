@php
    /**
     * @var object $campaign
     */
@endphp

@extends('layouts.show_campaign')

@section('show_campaign_tab_contents')

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
@endsection
