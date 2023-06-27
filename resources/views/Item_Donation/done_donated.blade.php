@extends('layouts.layout')

@section('contents')
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <div class="group relative w-full rounded ">
            <img src="{{ asset($campaign->image_thumbnail_path) }}" class="w-full h-[500px] mx-auto object-cover " alt="">

            <div
                class="absolute rounded-md bottom-0 flex border-none w-full justify-center items-center bg-slate-800 opacity-0 group-hover:h-12 sm:group-hover:h-20 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <p class="font-bold text-center text-white sm:text-lg text-base">Building Decent School For Chhuk
                    Village in Kompot</p>
            </div>
            <div
                class="absolute rounded-md right-0 top-0 flex border-none shadow-lg w-12 justify-center items-center bg-slate-800 opacity-0 group-hover:h-12 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <i class="fa-solid fa-xmark fa-2xl text-white"></i>
            </div>
        </div>
        <div
            class="relative border shadow-md px-8 pt-3 my-8 h-[590px] lg:h-screen justify-centers items-center rounded ">
            <div class="absolute pt-4 pb-8 my-4 right-0 bg-white rounded w-full ">
                <div class=" text-center">
                    <p class="font-bold text-base sm:text-lg">You've Made a Differnece!<br>
                        You've donated <span class="font-bold text-[#ff4238]">items</span> for the Campaign
                    </p>
                    <p class="sm:mt-3 mt-2">
                        Thank You for Your Generosity ! Share Your Impact, Inspire Others, and Donate Again.
                    </p>
                </div>
                <div class="border mx-auto shadow-md p-4 sm:my-8 my-4 h-76 w-[400px] rounded">
                    <img class="rounded-lg" src="{{ asset($campaign->image_thumbnail_path) }}" alt="">
                    <p class="text-center my-4"> Book <br> Quantity: {{ $quantity }} </p>
                    <div class="border rounded flex items-start justify-around py-2 w-full">
                        <img src="{{ asset($donor == null ?'img/anonymous.png':$donor->image_profile_path) }}" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-bold">{{$donor->name}}</div>
                            <div class="">Donate on{{$campaignDonatedItem->created_at->format('F d, Y')}}</div>
                        </div>
                    </div>
                </div>
                <div class=" text-center ">
                    <a href="{{route('dashboard')}}">
                        <button
                            class=" bg-[#ff4238] text-white font-bold  border rounded py-3 px-4  justify-center w-52">Go
                            To Home</button>
                    </a>
                </div>
            </div>
        </div>



    </div>
@endsection

</html>
