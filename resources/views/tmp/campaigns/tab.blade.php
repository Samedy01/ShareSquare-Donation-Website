<div class="p-3 shadow text-center">

    <div class="inline-block clearfix">
        @php
            $tabs = ['Overview', 'Report', 'Comments', 'Donators'];
            $focus = 'more-focus';
        @endphp

        @foreach($tabs as $tab)
            @if ($loop->index != $currentindex)
                @php
                    $focus = 'less-focus';
                @endphp 
            @endif
            <a class="item {{$focus}} inline-block float-left py-3 px-8 border-r text-xl font-medium" href="{{route('campaigns.user.report', ['campaign_id' => 1])}}">{{$tab}}</a>
        @endforeach

    </div>
</div>
