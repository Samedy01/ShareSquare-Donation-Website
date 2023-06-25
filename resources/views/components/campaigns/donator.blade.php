{{-- need $donor: User --}}
{{-- $donated date --}}
{{-- $donated amount --}}

<div class="inline-block my-4">
    <div class="border border-strokeColor w-donator-card clearfix p-4 rounded-xl">
        {{-- profile image --}}
        <div class="float-left w-donator-img h-donator-img bg-white shadow rounded-lg">
            <img src="/img/upload/profile/{{$campcashdonor['donor']->image_profile_path}}" alt="">
        </div>

        {{-- description text --}}
        <div class="h-donator-img pl-5 flex flex-wrap content-between">
            {{-- name --}}
            <div class="w-full">
                <p class="text-primaryTextColor font-bold text-2xl line-clamp-1">{{$campcashdonor['donor']->name}}</p>
                <div class="pt-2"></div>
                <p class="">
                    <span class="text-topDonorCardThinText">Donated on {{$campcashdonor['campCash']->donation_date}} •</span>
                    <span class=" text-primaryTextColor font-semibold"> $ {{$campcashdonor['campCash']->original_amount / 100}}</span>
                </p>
            </div>

            {{-- button --}}
            <div class="">
                <button class="bg-lightGrayColor text-textColorWithLightBg font-medium text-xl py-3 px-12 rounded-xl">Follow</button>
            </div>
        </div>


    </div>
</div>