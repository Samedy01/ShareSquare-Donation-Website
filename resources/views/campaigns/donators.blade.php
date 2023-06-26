<x-campaigns.detail :campaign="$campaign" :user="$user" :currenttabindex='3'>

    <div class=" my-10 text-primaryTextColor font-bold text-4xl">Donor List</div>

    @if (count($campCashDonors) == 0)
        <div class=" text-promptTextColor text-3xl text-center">There is no donors yet!</div>
    @else
        <div class="flex justify-between flex-wrap">
            @foreach ($campCashDonors as $item)

                {{-- <form action="{{route('user_overview')}}" method="GET">
                    @csrf

                        <x-campaigns.donator :campcashdonor="$item"></x-campaigns.donator>

                </form> --}}
                <a href="{{route('user_overview', ['id' => $item['donor'] == null ? -1 : $item['donor']->id])}}">
                    <x-campaigns.donator :campcashdonor="$item"></x-campaigns.donator>
                </a>
            @endforeach
        </div>
    @endif
</x-campaigns.detail>