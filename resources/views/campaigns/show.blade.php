<x-campaigns.detail :campaign="$campaign" :user="$user">
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

        <div class="title text-4xl pb-12">Contact Information</div>
        <div>
            <x-campaigns.contact-info></x-campaigns.contact-info>

        </div>


        {{-- <div class=" border shadow-md sm:px-8 pt-4 mt-8 px-4  rounded">
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
        </div> --}}

        <div class="p-3"></div>
    </div>
</x-campaigns.detail>
