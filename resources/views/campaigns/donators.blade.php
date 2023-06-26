<x-campaigns.detail :campaign="$campaign" :user="$user" :currenttabindex='3'>

    <div class=" my-10 text-primaryTextColor font-bold text-4xl">Donor List</div>

    @if (count($campCashDonors) == 0)
        <div class=" text-promptTextColor text-3xl text-center">There is no donors yet!</div>
    @else
        <div class="flex justify-between flex-wrap">
            @foreach ($campCashDonors as $item)
                <a href="{{route('user_overview')}}">

                    <x-campaigns.donator :campcashdonor="$item"></x-campaigns.donator>
                </a>
            @endforeach
        </div>
    @endif
</x-campaigns.detail>