@extends('layouts.admin')

@section('contents')
    <main class="ml-64 p-8">
        <h1 class="text-2xl font-bold mb-4">Campaigns list</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span id="close-alert" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 5.652a1 1 0 010 1.414L7.414 12l6.934 6.934a1 1 0 01-1.414 1.414L6 13.414l-6.934 6.934a1 1 0 01-1.414-1.414L4.586 12 .652 5.652a1 1 0 011.414-1.414L6 10.586l6.348-6.348a1 1 0 011.414 0z"/>
            </svg>
        </span>
            </div>

            <script>
                document.getElementById('close-alert').addEventListener('click', function() {
                    this.parentNode.remove();
                });
            </script>
        @endif

        <div class="bg-white rounded-lg shadow p-3 mb-3 flex justify-between items-end">
            <div class="other_filter">
                <form method="get" action="{{route('admin.campaigns')}}" id="form_filter_other">
                    <div class="relative inline-block w-60">
                            <label for="campaignCategoryId" class="block mb-1 text-sm font-medium text-gray-700">Campaign Category</label>
                            <select name="campaign_category_id" id="campaignCategoryId" class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="all" {{$campaignCategoryId == 'all'?'selected':''}}>All</option>
                                @foreach($campaignCategories as $campaignCategory)
                                    <option value="{{$campaignCategory->id}}"  {{$campaignCategoryId == $campaignCategory->id?'selected':''}}>{{$campaignCategory->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="relative inline-block w-60">
                            <label for="raising_type" class="block mb-1 text-sm font-medium text-gray-700">Raising Type</label>
                            <select id="raising_type" name="raising_type" class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="all" {{$raisingType == 'all'?'selected':''}}>All</option>
                                <option value="cash" {{$raisingType == 'cash'?'selected':''}}>Cash</option>
                                <option value="item" {{$raisingType == 'item'?'selected':''}}>Item</option>
                            </select>
                    </div>
                </form>
            </div>
            <div>
                <div class="flex items-center">
                    <div class="{{ $filterStatus == 'pending' ? 'border-b-2 border-secondaryColor':'border-b-2 border-transparent' }}  mr-4">
                        <a href="{{ route('admin.campaigns',array_merge(request()->query(),['filter_status' => 'pending'])) }}" class="flex items-center p-1 rounded-lg hover:bg-gray-200">
                            <span>Pending</span>
                            <div class=" ml-2 pending_status rounded-[50%] border w-5 h-5 text-xs flex justify-center items-center">{{$numOfPending}}</div>
                        </a>
                    </div>
                    <div class="{{ $filterStatus == 'success' ? 'border-b-2 border-secondaryColor':'border-b-2 border-transparent' }} mr-4">
                        <a href="{{ route('admin.campaigns', array_merge(request()->query(),['filter_status' => 'success'])) }}" class="flex items-center rounded-lg p-1 hover:bg-gray-200">
                            <span>Success</span>
                            <div class=" ml-2 success_status rounded-[50%]  w-5 h-5 text-xs flex justify-center items-center">{{$numOfSuccess}}</div>
                        </a>
                    </div>
                    <div class="{{ $filterStatus == 'reject' ? 'border-b-2 border-secondaryColor':'border-b-2 border-transparent' }} mr-4">
                        <a href="{{ route('admin.campaigns', array_merge(request()->query(),['filter_status' => 'reject'])) }}" class="flex items-center rounded-lg hover:bg-gray-200 p-1">
                            <span>Reject</span>
                            <div class=" ml-2 reject_status rounded-[50%]  w-5 h-5 text-xs flex justify-center items-center">{{$numOfReject}}</div>
                        </a>
                    </div>
                    <div class="{{ $filterStatus == 'all' || $filterStatus == null ? 'border-b-2 border-secondaryColor':'border-b-2 border-transparent' }} mr-4">
                        <a href="{{ route('admin.campaigns', array_merge(request()->query(),['filter_status' => 'all'])) }}" class="flex items-center rounded-lg hover:bg-gray-200 p-1">
                            <span>All</span>
                            <div class=" ml-2 all_status rounded-[50%]  w-5 h-5 text-xs flex justify-center items-center">{{$totalCampaign}}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                    <tr>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100">

                            <a href="{{ route('admin.campaigns', array_merge(request()->query(),['sort_column' => 'id', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc'])) }}">
                                ID
                                @if ($sortColumn == 'id')
                                    @if ($sortOrder == 'asc')
                                        <i class="fas fa-sort-up ml-1"></i>
                                    @else
                                        <i class="fas fa-sort-down ml-1"></i>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100">Title</th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100 ">
                            <a href="{{ route('admin.campaigns', ['sort_column' => 'campaign_category_id', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">
                                Category
                                @if ($sortColumn == 'campaign_category_id')
                                    @if ($sortOrder == 'asc')
                                        <i class="fas fa-sort-up ml-1"></i>
                                    @else
                                        <i class="fas fa-sort-down ml-1"></i>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100 ">
                            <a href="{{ route('admin.campaigns', ['sort_column' => 'status', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">
                                Status
                                @if ($sortColumn == 'status')
                                    @if ($sortOrder == 'asc')
                                        <i class="fas fa-sort-up ml-1"></i>
                                    @else
                                        <i class="fas fa-sort-down ml-1"></i>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100">Raising type</th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100">
                            <a href="{{ route('admin.campaigns', ['sort_column' => 'created_at', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">
                                Created at
                                @if ($sortColumn == 'created_at')
                                    @if ($sortOrder == 'asc')
                                        <i class="fas fa-sort-up ml-1"></i>
                                    @else
                                        <i class="fas fa-sort-down ml-1"></i>
                                    @endif
                                @endif
                            </a>
                        </th>
                        <th class="py-3 px-4 font-semibold text-left bg-gray-100">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($campaigns as $campaign)
                        @php
                            if(!empty($campaign->campaignCategory)){
                                $hash = md5($campaign->campaignCategory->name); // Hash the word using MD5 algorithm
                                 //dump($hash);
                                // Extract the RGB values from the hash
                                $red = hexdec(substr($hash, 0, 2));
                                $green = hexdec(substr($hash, 1, 2));
                                $blue = hexdec(substr($hash, 4, 2));

                                // Generate the color code in hexadecimal format
                                $colorCodeOfCategory = sprintf("#%02x%02x%02x", $red, $green, $blue);
                                //dump($colorCodeOfCategory);
                            }
                        @endphp
                        <tr class="campaign_row hover:bg-gray-100 hover:cursor-pointer"
                            data-route="{{route('admin.view_campaign',['campaign_id'=>$campaign->id])}}">
                            <td class="py-4 px-6 border-b border-gray-300">{{ $campaign->id }}</td>
                            <td class="py-4 px-6 border-b border-gray-300 truncate max-w-xs">{{ $campaign->title }}</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                @if(!empty($campaign->campaignCategory))
                                <span class="px-1 py-1 rounded-lg" style="color: rgba({{$red}},{{$green}},{{$blue}},1.3);background-color: rgba({{$red}},{{$green}},{{$blue}}, 0.3);">{{ $campaign->campaignCategory->name }}</span>
                                @else
                                    <span class="px-1 py-1 rounded-lg"></span>
                                @endif
                            </td>
                            @if($campaign->status == 'pending')
                                <td class="py-4 px-6 border-b border-gray-300"><span class="px-1 pending_status rounded-lg">{{ $campaign->status }}</span></td>
                            @elseif($campaign->status == 'success')
                                <td class="py-4 px-6 border-b border-gray-300"><span class="px-1 success_status rounded-lg">{{ $campaign->status }}</span></td>
                            @elseif($campaign->status == 'reject')
                                <td class="py-4 px-6 border-b border-gray-300"><span class="px-1 reject_status rounded-lg">{{ $campaign->status }}</span></td>
                            @endif
                            @if(empty(!$campaign->itemCategory))
                            <td class="py-4 px-6 border-b border-gray-300"><span class="px-1 bg-purple-100 text-purple-700 rounded-lg">{{$campaign->itemCategory->name}}</span></td>
                            @else
                                <td class="py-4 px-6 border-b border-gray-300"><span class="px-1 bg-green-100 text-green-700 rounded-lg">Cash</span></td>

                            @endif
                            <td class="py-4 px-6 border-b border-gray-300">{{ $campaign->created_at->format('M jS, Y H:i A') }}</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <div class="flex items-center space-x-2">
                                    <a href="#" class="action_button text-yellow-500 hover:text-yellow-700 hover:bg-gray-200 rounded-lg px-1">Edit</a>
                                    <a href="#" class="action_button text-red-500 hover:text-red-700 hover:bg-gray-200 rounded-lg px-1">Delete</a>
                                    <form class="inline-block" action="/admins/campaignDelete" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        <input class="hidden" name="campaign_id" value="{{$campaign->id}}">
                                        <button type="submit" class="action_button text-red-500 hover:text-red-700 hover:bg-gray-200 rounded-lg px-1">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{$campaigns->appends(request()->query())->links() }}</div>


        </div>
    </main>
    @vite('resources/js/admin.js')
@endsection
