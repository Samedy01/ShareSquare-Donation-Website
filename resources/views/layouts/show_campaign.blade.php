@extends('layouts.layout')

@section('contents')
    @php
        $action = Route::currentRouteAction();
    //    dump($action);
        $controllerAction = class_basename($action);
    //    dump($action);
    //    dd('hi');
        list($controller, $method) = explode('@', $controllerAction);
    @endphp
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


                <!--if raise cash - route to cash-->
                @if($campaign->is_cash)
                {{-- donate button --}}
                <div class="py-6">
                    <button data-route="{{route('campaigns.donate_cash',['campaign_id'=>$campaign->id])}}" class="w-full block primary-bg-color text-center py-6 rounded-xl donateNow">
                        <span class="text-white font-bold text-2xl">Donate Now</span>
                    </button>
                </div>
                @else
                    <div class="py-6">
                        <button data-route="{{route('campaigns.donate_item',['campaign_id'=>$campaign->id])}}" class="w-full block primary-bg-color text-center py-6 rounded-xl donateNow">
                            <span class="text-white font-bold text-2xl">Donate Now</span>
                        </button>
                    </div>
                @endif

                {{-- options --}}
                <div class="py-6 flex justify-between">
                    @php
                        $options = [
                            ['text' => 'Share', 'icon' => 'fa fa-share','class'=>'share-button'],
                            ['text' => 'Care', 'icon' => 'far fa-heart','class'=>'lov-button'],
                            ['text' => 'Follow', 'icon' => 'fa fa-user-plus','class'=>'follow-button'],
                        ];
                    @endphp
                    @foreach ($options as $option)
                        <div class="item {{$option['class']}} hover:cursor-pointer">
                            <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                                <i class="dark-blue-grey {{$option['icon']}} h-5 icon_button" ></i>
                                <div class="h-1"></div>
                                <p class="title-color text-xl font-medium">{{$option['text']}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="item share-button hover:cursor-pointer relative">
                        <div class="py-2 px-5 shadow bg-white rounded-xl text-center">
                            <i class="dark-blue-grey fa fa-share h-5 icon_button" ></i>
                            <div class="h-1"></div>
                            <p class="title-color text-xl font-medium">Share</p>
                        </div>
                        <div class="shadow flex p-1 bg-green-500 justify-center rounded-lg absolute top-[-30px] hidden copy_wrapper">
                            <input type="hidden" name="current_url" id="current_url" value="{{route('campaigns.show',$campaign->id)}}">
                            <div class="text-white flex items-center justify-center copy w-20 hidden">
                                <i class="fa fa-clipboard mr-1"></i>
                                <span>Copy</span>
                            </div>
                            <div class="text-white flex items-center justify-center copied hidden w-20">
                                <i class="fa fa-check mr-1"></i>
                                <span>Copied</span>
                            </div>
                        </div>
                    </div>
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
                <div data-route="{{route('campaigns.comment',$campaign->id)}}" class="flex hover:bg-gray-200 rounded-lg justify-center items-center {{$controller == 'HomeController' && $method == 'index' ? 'more-focus':''}}  float-left py-3 px-8 border-r text-xl font-medium hover:cursor-pointer" id="comment_tab">
                    <span>Comment</span>
                    <span class="w-5 h-5 text-center rounded-full bg-gray-500 text-white flex justify-center items-center text-xs">{{$campaign->number_of_comment}}</span>
                </div>
            </div>
        </div>

        <div class="pb-12"></div>
        <div>
            @yield('show_campaign_tab_contents')
        </div>
    </div>
    @vite('resources/js/user_share.js')
    @vite('resources/js/panha.js')
@endsection

