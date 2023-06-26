@extends('layouts.otherprofileheader')

@section('otherprofile_contents')
<div class="w-screen px-10 py-5 mx-auto">
    <div class="w-full flex items-center justify-between mb-2">
        <div class="flex items-center">
            <h1 class="text-2xl font-bold mr-2 text-primaryTextColor">Campaign </h1>
            <span class="bg-secondaryColor text-mainColor text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">10</span>
        </div>
        <button type="button"
            class="text-white bg-mainColor hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-2.5 md:px-2.5 lg:px-5 text-center inline-flex items-center mr-2 relative">
            <span class="hidden sm:inline-block mr-2">Create New Campaign</span>
            <svg aria-hidden="true" class="w-5 h-5  ml-0 md:ml-0 lg:ml-2" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
            </svg>
        </button>
    </div>

    <div class="w-full flex flex-wrap items-center justify-between gap-3">
        <div class="inline-flex overflow-x-auto rounded-md shadow-sm" role="group">
            <a href="{{route('user_allCampaign')}}"
                class="inline-flex flex-shrink-0 items-center px-4 py-2 text-sm font-medium bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-red-700 {{request()->is('otheruserprofile/usercampaign/allcampaign') ? 'text-red-700 focus:text-black' : 'text-promptTextColor'}}">
                <svg aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor">
                    <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                </svg>
                All Campaign
            </a>
            <a href="{{route('user_reachedgoal')}}"
                class="inline-flex flex-shrink-0 items-center px-4 py-2 text-sm font-medium bg-white border-t border-r border-b border-gray-200 hover:bg-gray-100 hover:text-red-700 {{request()->is('profile/mycampaign/reachedgoal') ? 'text-red-700 focus:text-black' : 'text-promptTextColor'}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                    aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" zoomAndPan="magnify"
                    viewBox="0 0 375 374.999991" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <rect x="-37.5" width="16" fill="currentColor" y="-37.499999" height="16" fill-opacity="1" />
                    <rect x="-37.5" width="16" fill="currentColor" y="-37.499999" height="16" fill-opacity="1" />
                    <rect x="-37.5" width="16" fill="currentColor" y="-37.499999" height="16" fill-opacity="1" />
                    <path fill="currentColor"
                        d="M 41.160156 96.035156 L 4.574219 59.453125 L 50.304688 50.304688 L 59.453125 4.574219 L 96.035156 41.160156 L 96.035156 89.570312 L 161.140625 154.671875 L 169.207031 114.332031 L 187.5 187.5 L 114.328125 169.207031 L 154.671875 161.140625 L 89.570312 96.039062 L 41.15625 96.039062 Z M 187.5 224.085938 C 170.828125 224.085938 156.914062 212.863281 152.507812 197.609375 L 114.359375 188.074219 C 114.667969 228.21875 147.28125 260.671875 187.5 260.671875 C 227.910156 260.671875 260.667969 227.910156 260.667969 187.5 C 260.667969 147.28125 228.214844 114.667969 188.070312 114.359375 L 197.605469 152.507812 C 212.859375 156.914062 224.082031 170.828125 224.082031 187.5 C 224.082031 207.707031 207.703125 224.085938 187.5 224.085938 Z M 88.460938 114.328125 L 60.894531 114.328125 C 48.417969 135.871094 41.160156 160.8125 41.160156 187.5 C 41.160156 268.320312 106.679688 333.839844 187.5 333.839844 C 268.320312 333.839844 333.839844 268.320312 333.839844 187.5 C 333.839844 106.679688 268.320312 41.160156 187.5 41.160156 C 160.8125 41.160156 135.871094 48.417969 114.328125 60.894531 L 114.328125 88.460938 L 123.972656 98.105469 C 141.914062 85.332031 163.800781 77.746094 187.5 77.746094 C 248.117188 77.746094 297.257812 126.882812 297.257812 187.5 C 297.257812 248.117188 248.117188 297.257812 187.5 297.257812 C 126.882812 297.257812 77.742188 248.117188 77.742188 187.5 C 77.742188 163.800781 85.332031 141.914062 98.105469 123.972656 L 88.460938 114.332031 Z M 187.5 0 C 157.53125 0 128.054688 7.242188 101.621094 20.878906 L 108.371094 27.628906 C 132.84375 15.511719 159.964844 9.144531 187.5 9.144531 C 285.839844 9.144531 365.851562 89.15625 365.851562 187.5 C 365.851562 285.84375 285.839844 365.855469 187.5 365.855469 C 89.15625 365.855469 9.144531 285.84375 9.144531 187.5 C 9.144531 159.964844 15.515625 132.835938 27.628906 108.371094 L 20.875 101.621094 C 7.238281 128.050781 0 157.53125 0 187.5 C 0 290.886719 84.113281 375 187.5 375 C 290.886719 375 375 290.886719 375 187.5 C 375 84.113281 290.886719 0 187.5 0 Z M 187.5 0 "
                        fill-opacity="1" fill-rule="nonzero" />
                </svg>
                Goal Reached
            </a>
            <a href="{{route('user_unreachedgoal')}}"
                class="inline-flex flex-shrink-0 items-center px-4 py-2 text-sm font-medium bg-white border-t border-r border-b border-gray-200 hover:bg-gray-100 hover:text-red-700 {{request()->is('profile/mycampaign/unreachedgoal') ? 'text-red-700 focus:text-black' : 'text-promptTextColor'}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                    aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" zoomAndPan="magnify"
                    viewBox="0 0 375 374.999991" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <rect x="-37.5" width="16" fill="currentColor" y="-37.499999" height="16" fill-opacity="1" />
                    <rect x="-37.5" width="16" fill="currentColor" y="-37.499999" height="16" fill-opacity="1" />
                    <path fill="currentColor"
                        d="M 216.277344 187.726562 C 216.277344 188.667969 216.230469 189.609375 216.136719 190.546875 C 216.046875 191.484375 215.90625 192.414062 215.722656 193.339844 C 215.539062 194.261719 215.3125 195.175781 215.039062 196.078125 C 214.765625 196.980469 214.445312 197.867188 214.085938 198.738281 C 213.726562 199.609375 213.324219 200.457031 212.878906 201.289062 C 212.433594 202.121094 211.949219 202.929688 211.425781 203.710938 C 210.902344 204.496094 210.34375 205.253906 209.746094 205.980469 C 209.148438 206.710938 208.515625 207.40625 207.847656 208.074219 C 207.183594 208.738281 206.484375 209.371094 205.757812 209.96875 C 205.027344 210.566406 204.269531 211.128906 203.488281 211.652344 C 202.703125 212.175781 201.898438 212.660156 201.066406 213.105469 C 200.234375 213.546875 199.382812 213.949219 198.511719 214.3125 C 197.640625 214.671875 196.753906 214.988281 195.851562 215.261719 C 194.953125 215.535156 194.039062 215.765625 193.113281 215.949219 C 192.191406 216.132812 191.257812 216.269531 190.320312 216.363281 C 189.382812 216.457031 188.441406 216.5 187.5 216.5 C 186.558594 216.5 185.617188 216.457031 184.679688 216.363281 C 183.742188 216.269531 182.808594 216.132812 181.886719 215.949219 C 180.960938 215.765625 180.046875 215.535156 179.144531 215.261719 C 178.246094 214.988281 177.359375 214.671875 176.488281 214.3125 C 175.617188 213.949219 174.765625 213.546875 173.933594 213.105469 C 173.101562 212.660156 172.296875 212.175781 171.511719 211.652344 C 170.730469 211.128906 169.972656 210.566406 169.242188 209.96875 C 168.515625 209.371094 167.816406 208.738281 167.152344 208.074219 C 166.484375 207.40625 165.851562 206.710938 165.253906 205.980469 C 164.65625 205.253906 164.097656 204.496094 163.574219 203.710938 C 163.050781 202.929688 162.566406 202.121094 162.121094 201.289062 C 161.675781 200.457031 161.273438 199.609375 160.914062 198.738281 C 160.554688 197.867188 160.234375 196.980469 159.960938 196.078125 C 159.6875 195.175781 159.460938 194.261719 159.277344 193.339844 C 159.09375 192.414062 158.953125 191.484375 158.863281 190.546875 C 158.769531 189.609375 158.722656 188.667969 158.722656 187.726562 C 158.722656 186.78125 158.769531 185.84375 158.863281 184.902344 C 158.953125 183.964844 159.09375 183.035156 159.277344 182.109375 C 159.460938 181.1875 159.6875 180.273438 159.960938 179.371094 C 160.234375 178.46875 160.554688 177.582031 160.914062 176.710938 C 161.273438 175.839844 161.675781 174.992188 162.121094 174.160156 C 162.566406 173.328125 163.050781 172.519531 163.574219 171.738281 C 164.097656 170.953125 164.65625 170.199219 165.253906 169.46875 C 165.851562 168.742188 166.484375 168.042969 167.152344 167.375 C 167.816406 166.710938 168.515625 166.078125 169.242188 165.480469 C 169.972656 164.882812 170.730469 164.320312 171.511719 163.796875 C 172.296875 163.273438 173.101562 162.789062 173.933594 162.347656 C 174.765625 161.902344 175.617188 161.5 176.488281 161.136719 C 177.359375 160.777344 178.246094 160.460938 179.144531 160.1875 C 180.046875 159.914062 180.960938 159.683594 181.886719 159.5 C 182.808594 159.316406 183.742188 159.179688 184.679688 159.085938 C 185.617188 158.992188 186.558594 158.949219 187.5 158.949219 C 188.441406 158.949219 189.382812 158.992188 190.320312 159.085938 C 191.257812 159.179688 192.191406 159.316406 193.113281 159.5 C 194.039062 159.683594 194.953125 159.914062 195.851562 160.1875 C 196.753906 160.460938 197.640625 160.777344 198.511719 161.136719 C 199.382812 161.5 200.234375 161.902344 201.066406 162.347656 C 201.894531 162.789062 202.703125 163.273438 203.488281 163.796875 C 204.269531 164.320312 205.027344 164.882812 205.757812 165.480469 C 206.484375 166.078125 207.183594 166.710938 207.847656 167.375 C 208.515625 168.042969 209.148438 168.742188 209.746094 169.46875 C 210.34375 170.199219 210.902344 170.953125 211.425781 171.738281 C 211.949219 172.519531 212.433594 173.328125 212.878906 174.160156 C 213.324219 174.992188 213.726562 175.839844 214.085938 176.710938 C 214.445312 177.582031 214.765625 178.46875 215.039062 179.371094 C 215.3125 180.273438 215.539062 181.1875 215.722656 182.109375 C 215.90625 183.035156 216.046875 183.964844 216.136719 184.902344 C 216.230469 185.84375 216.277344 186.78125 216.277344 187.726562 Z M 216.277344 187.726562 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 375 180.980469 L 332.285156 180.980469 C 328.6875 106.789062 268.433594 46.539062 194.246094 43.390625 L 194.246094 0.226562 L 180.753906 0.226562 L 180.753906 42.941406 C 106.566406 46.539062 46.3125 106.789062 43.164062 180.980469 L 0 180.980469 L 0 194.46875 L 42.714844 194.46875 C 46.3125 268.660156 106.566406 328.910156 180.753906 332.058594 L 180.753906 374.773438 L 194.246094 374.773438 L 194.246094 332.058594 C 268.433594 328.910156 328.6875 268.660156 331.835938 194.46875 L 374.550781 194.46875 Z M 313.847656 180.980469 L 287.769531 180.980469 C 284.621094 130.621094 244.15625 90.601562 193.792969 87.003906 L 193.792969 60.925781 C 258.542969 64.523438 310.703125 116.679688 313.847656 180.980469 Z M 275.628906 194.46875 C 272.480469 237.636719 237.859375 272.257812 194.246094 275.855469 L 194.246094 264.164062 L 180.753906 264.164062 L 180.753906 275.855469 C 137.589844 272.707031 102.96875 238.085938 99.371094 194.46875 L 111.0625 194.46875 L 111.0625 180.980469 L 99.371094 180.980469 C 102.519531 137.816406 137.140625 103.191406 180.753906 99.59375 L 180.753906 111.285156 L 194.246094 111.285156 L 194.246094 99.59375 C 237.410156 102.742188 272.03125 137.363281 275.628906 180.980469 L 263.9375 180.980469 L 263.9375 194.46875 Z M 180.753906 61.375 L 180.753906 87.453125 C 130.394531 90.601562 90.378906 131.070312 86.78125 181.429688 L 60.703125 181.429688 C 64.296875 116.679688 116.457031 64.523438 180.753906 61.375 Z M 61.152344 194.46875 L 87.230469 194.46875 C 90.378906 244.828125 130.84375 284.847656 181.203125 288.445312 L 181.203125 314.523438 C 116.457031 310.925781 64.296875 258.769531 61.152344 194.46875 Z M 194.246094 314.074219 L 194.246094 287.996094 C 244.605469 284.847656 284.621094 244.378906 288.21875 194.019531 L 314.296875 194.019531 C 310.703125 258.769531 258.542969 310.925781 194.246094 314.074219 Z M 194.246094 314.074219 "
                        fill-opacity="1" fill-rule="nonzero" />
                </svg>
                Goal Unreached
            </a>
            <a href="{{route('user_closedcampaign')}}"
                class="inline-flex flex-shrink-0 items-center px-4 py-2 text-sm font-medium bg-white border-t border-r border-b border-gray-200 hover:bg-gray-100 hover:text-red-700 {{request()->is('profile/mycampaign/closedcampaign') ? 'text-red-700 focus:text-black' : 'text-promptTextColor'}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                    aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" zoomAndPan="magnify"
                    viewBox="0 0 30 30.000001" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <clipPath id="5d64393da1">
                            <path
                                d="M 0.484375 0 L 29.515625 0 L 29.515625 29.03125 L 0.484375 29.03125 Z M 0.484375 0 "
                                clip-rule="nonzero" />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#5d64393da1)">
                        <path fill="currentColor"
                            d="M 15 0 C 6.984375 0 0.484375 6.5 0.484375 14.515625 C 0.484375 22.53125 6.984375 29.03125 15 29.03125 C 23.015625 29.03125 29.515625 22.53125 29.515625 14.515625 C 29.515625 6.5 23.015625 0 15 0 Z M 15 27.21875 C 7.996094 27.21875 2.296875 21.519531 2.296875 14.515625 C 2.296875 7.511719 7.996094 1.816406 15 1.816406 C 22.003906 1.816406 27.703125 7.511719 27.703125 14.515625 C 27.703125 21.519531 22.003906 27.21875 15 27.21875 Z M 15 27.21875 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                    <path fill="currentColor"
                        d="M 20.679688 11.4375 L 20.679688 9.085938 C 20.679688 7.578125 20.089844 6.152344 19.011719 5.0625 C 17.929688 3.992188 16.503906 3.40625 15 3.40625 C 11.867188 3.40625 9.320312 5.953125 9.320312 9.085938 L 9.320312 11.4375 C 7.746094 12.9375 6.761719 15.046875 6.761719 17.390625 C 6.761719 21.933594 10.457031 25.628906 15 25.628906 C 19.542969 25.628906 23.238281 21.933594 23.238281 17.390625 C 23.238281 15.046875 22.253906 12.9375 20.679688 11.4375 Z M 11.136719 9.085938 C 11.136719 6.953125 12.867188 5.21875 15 5.21875 C 16.023438 5.21875 16.996094 5.621094 17.730469 6.347656 C 18.460938 7.085938 18.863281 8.058594 18.863281 9.085938 L 18.863281 10.117188 C 17.710938 9.503906 16.394531 9.152344 15 9.152344 C 13.605469 9.152344 12.289062 9.503906 11.136719 10.117188 Z M 15 23.8125 C 11.457031 23.8125 8.574219 20.929688 8.574219 17.390625 C 8.574219 13.847656 11.457031 10.964844 15 10.964844 C 18.542969 10.964844 21.425781 13.847656 21.425781 17.390625 C 21.425781 20.929688 18.542969 23.8125 15 23.8125 Z M 15 23.8125 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 15 14.351562 C 13.324219 14.351562 11.960938 15.714844 11.960938 17.390625 C 11.960938 18.746094 12.863281 19.882812 14.09375 20.273438 L 14.09375 21.015625 C 14.09375 21.515625 14.5 21.921875 15 21.921875 C 15.5 21.921875 15.90625 21.515625 15.90625 21.015625 L 15.90625 20.273438 C 17.136719 19.882812 18.039062 18.746094 18.039062 17.390625 C 18.039062 15.714844 16.675781 14.351562 15 14.351562 Z M 15.003906 18.613281 C 15.003906 18.613281 15 18.609375 15 18.609375 C 15 18.609375 14.996094 18.613281 14.996094 18.613281 C 14.324219 18.609375 13.777344 18.0625 13.777344 17.390625 C 13.777344 16.714844 14.324219 16.167969 15 16.167969 C 15.675781 16.167969 16.222656 16.714844 16.222656 17.390625 C 16.222656 18.0625 15.675781 18.609375 15.003906 18.613281 Z M 15.003906 18.613281 "
                        fill-opacity="1" fill-rule="nonzero" />
                </svg>
                Closed
            </a>
            <a href="{{route('user_draft')}}"
                class="inline-flex items-center flex-shrink-0 px-4 py-2 text-sm font-medium bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-red-700 {{request()->is('profile/mycampaign/draft') ? 'text-red-700 focus:text-black' : 'text-promptTextColor'}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                    aria-hidden="true" class="w-4 h-4 mr-2 fill-current" fill="currentColor" zoomAndPan="magnify"
                    viewBox="0 0 30 30.000001" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <clipPath id="a5a7bf419b">
                            <path d="M 7 13 L 23 13 L 23 29.03125 L 7 29.03125 Z M 7 13 " clip-rule="nonzero" />
                        </clipPath>
                        <clipPath id="1e52bb2dc2">
                            <path
                                d="M 5.828125 13.234375 L 23.910156 13.234375 L 23.910156 14.550781 L 5.828125 14.550781 Z M 5.828125 13.234375 "
                                clip-rule="nonzero" />
                        </clipPath>
                        <clipPath id="735b8b4ebe">
                            <path d="M 5.765625 0 L 13 0 L 13 7 L 5.765625 7 Z M 5.765625 0 " clip-rule="nonzero" />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#a5a7bf419b)">
                        <path fill="currentColor"
                            d="M 19.667969 29.003906 L 10.089844 29.003906 C 9.855469 29.003906 9.652344 28.828125 9.613281 28.59375 L 7.132812 14.015625 C 7.085938 13.746094 7.265625 13.492188 7.527344 13.441406 C 7.792969 13.398438 8.042969 13.578125 8.089844 13.847656 L 10.5 28.011719 L 19.261719 28.011719 L 21.667969 13.847656 C 21.714844 13.578125 21.960938 13.398438 22.230469 13.441406 C 22.496094 13.492188 22.671875 13.746094 22.628906 14.015625 L 20.148438 28.59375 C 20.109375 28.828125 19.90625 29.003906 19.667969 29.003906 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                    <g clip-path="url(#1e52bb2dc2)">
                        <path fill="currentColor"
                            d="M 23.445312 14.425781 L 6.316406 14.425781 C 6.046875 14.425781 5.828125 14.203125 5.828125 13.929688 C 5.828125 13.660156 6.046875 13.433594 6.316406 13.433594 L 23.445312 13.433594 C 23.714844 13.433594 23.933594 13.660156 23.933594 13.929688 C 23.933594 14.203125 23.714844 14.425781 23.445312 14.425781 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                    <path fill="currentColor"
                        d="M 19.894531 27.257812 L 9.847656 27.257812 C 9.578125 27.257812 9.363281 27.03125 9.363281 26.761719 C 9.363281 26.484375 9.578125 26.265625 9.847656 26.265625 L 19.894531 26.265625 C 20.167969 26.265625 20.382812 26.484375 20.382812 26.761719 C 20.382812 27.03125 20.167969 27.257812 19.894531 27.257812 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 17.917969 8.488281 C 17.792969 8.488281 17.664062 8.4375 17.566406 8.335938 C 17.382812 8.140625 17.390625 7.828125 17.582031 7.636719 L 21.390625 3.925781 C 21.582031 3.738281 21.894531 3.742188 22.078125 3.941406 C 22.265625 4.140625 22.257812 4.453125 22.0625 4.640625 L 18.253906 8.351562 C 18.160156 8.441406 18.039062 8.488281 17.917969 8.488281 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 22.421875 10.089844 C 22.183594 10.089844 21.972656 9.910156 21.941406 9.660156 L 21.246094 4.347656 C 21.210938 4.078125 21.398438 3.832031 21.664062 3.796875 C 21.933594 3.757812 22.175781 3.949219 22.210938 4.21875 L 22.90625 9.527344 C 22.941406 9.800781 22.757812 10.046875 22.488281 10.085938 C 22.464844 10.089844 22.445312 10.089844 22.421875 10.089844 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 22.101562 7.761719 C 22.046875 7.761719 21.992188 7.753906 21.941406 7.738281 L 19.425781 6.847656 C 19.175781 6.757812 19.042969 6.476562 19.128906 6.214844 C 19.21875 5.957031 19.496094 5.824219 19.746094 5.914062 L 22.261719 6.804688 C 22.515625 6.894531 22.648438 7.175781 22.558594 7.433594 C 22.488281 7.636719 22.300781 7.761719 22.101562 7.761719 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 15.878906 14.425781 C 15.824219 14.425781 15.769531 14.417969 15.714844 14.398438 C 15.460938 14.308594 15.332031 14.027344 15.417969 13.769531 L 17.460938 7.832031 C 17.550781 7.574219 17.824219 7.4375 18.078125 7.527344 C 18.332031 7.621094 18.46875 7.898438 18.378906 8.160156 L 16.335938 14.09375 C 16.265625 14.296875 16.078125 14.425781 15.878906 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 20.933594 14.425781 C 20.878906 14.425781 20.828125 14.417969 20.773438 14.398438 C 20.519531 14.308594 20.386719 14.027344 20.472656 13.769531 L 21.964844 9.429688 C 22.054688 9.175781 22.332031 9.035156 22.585938 9.128906 C 22.835938 9.21875 22.972656 9.5 22.882812 9.757812 L 21.390625 14.09375 C 21.320312 14.296875 21.132812 14.425781 20.933594 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 18.40625 14.425781 C 18.351562 14.425781 18.296875 14.417969 18.242188 14.398438 C 17.992188 14.308594 17.859375 14.027344 17.945312 13.769531 L 19.714844 8.621094 C 19.804688 8.367188 20.078125 8.226562 20.332031 8.320312 C 20.585938 8.410156 20.71875 8.691406 20.628906 8.949219 L 18.863281 14.09375 C 18.792969 14.296875 18.605469 14.425781 18.40625 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 19.609375 9.46875 C 19.34375 9.46875 19.046875 9.414062 18.734375 9.304688 C 18.15625 9.09375 17.46875 8.636719 17.433594 8.023438 C 17.417969 7.75 17.625 7.515625 17.890625 7.5 C 18.15625 7.492188 18.390625 7.695312 18.402344 7.964844 C 18.429688 8.007812 18.664062 8.230469 19.054688 8.367188 C 19.480469 8.519531 19.761719 8.484375 19.820312 8.445312 C 19.996094 8.242188 20.292969 8.226562 20.5 8.402344 C 20.699219 8.578125 20.714844 8.902344 20.539062 9.109375 C 20.339844 9.34375 20.011719 9.46875 19.609375 9.46875 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 21.855469 10.273438 C 21.589844 10.273438 21.296875 10.21875 20.984375 10.113281 C 20.40625 9.902344 19.722656 9.4375 19.6875 8.8125 C 19.671875 8.539062 19.878906 8.308594 20.144531 8.292969 C 20.40625 8.273438 20.644531 8.488281 20.65625 8.757812 C 20.683594 8.816406 20.910156 9.035156 21.304688 9.175781 C 21.738281 9.328125 22.027344 9.277344 22.082031 9.242188 C 22.265625 9.042969 22.566406 9.039062 22.761719 9.222656 C 22.960938 9.40625 22.964844 9.730469 22.78125 9.929688 C 22.578125 10.15625 22.25 10.273438 21.855469 10.273438 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 9.589844 14.425781 C 9.378906 14.425781 9.1875 14.289062 9.121094 14.074219 L 6.757812 6.027344 C 6.679688 5.765625 6.824219 5.488281 7.082031 5.410156 C 7.335938 5.332031 7.613281 5.480469 7.6875 5.742188 L 10.054688 13.789062 C 10.132812 14.050781 9.984375 14.324219 9.726562 14.40625 C 9.683594 14.417969 9.636719 14.425781 9.589844 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 14.664062 14.425781 C 14.453125 14.425781 14.257812 14.289062 14.195312 14.070312 L 11.421875 4.605469 C 11.347656 4.34375 11.492188 4.070312 11.75 3.988281 C 12.007812 3.914062 12.277344 4.0625 12.355469 4.324219 L 15.125 13.789062 C 15.203125 14.050781 15.058594 14.328125 14.800781 14.40625 C 14.753906 14.421875 14.707031 14.425781 14.664062 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <path fill="currentColor"
                        d="M 12.132812 14.425781 C 11.921875 14.425781 11.730469 14.289062 11.667969 14.074219 L 9.835938 7.875 C 9.757812 7.613281 9.90625 7.335938 10.164062 7.257812 C 10.417969 7.179688 10.6875 7.328125 10.765625 7.589844 L 12.597656 13.789062 C 12.675781 14.050781 12.53125 14.324219 12.273438 14.40625 C 12.226562 14.417969 12.179688 14.425781 12.132812 14.425781 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <g clip-path="url(#735b8b4ebe)">
                        <path fill="currentColor"
                            d="M 9.636719 1.085938 C 9.539062 1.085938 9.4375 1.101562 9.34375 1.128906 L 7.554688 1.675781 C 7.292969 1.75 7.085938 1.925781 6.957031 2.164062 C 6.824219 2.40625 6.796875 2.6875 6.878906 2.949219 L 7.550781 5.269531 L 11.289062 4.132812 L 10.613281 1.820312 C 10.535156 1.558594 10.359375 1.339844 10.117188 1.207031 C 9.964844 1.125 9.800781 1.085938 9.636719 1.085938 Z M 7.222656 6.378906 C 7.144531 6.378906 7.0625 6.359375 6.992188 6.316406 C 6.878906 6.257812 6.792969 6.152344 6.757812 6.027344 L 5.945312 3.238281 C 5.789062 2.71875 5.847656 2.171875 6.101562 1.691406 C 6.355469 1.214844 6.773438 0.871094 7.285156 0.726562 L 9.058594 0.183594 C 9.5625 0.0234375 10.105469 0.078125 10.574219 0.335938 C 11.046875 0.59375 11.390625 1.019531 11.542969 1.535156 L 12.355469 4.328125 C 12.433594 4.585938 12.285156 4.863281 12.027344 4.941406 L 7.363281 6.355469 C 7.316406 6.371094 7.269531 6.378906 7.222656 6.378906 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                </svg>
                Draft
            </a>
        </div>

        <div class="relative max-w-sm">

            <div date-rangepicker class="flex items-center md:justify-between">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input name="start" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date start">
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input name="end" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date end">
                </div>
            </div>

        </div>


    </div>


    @yield('usercampaign_contents')

</div>



@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Show/hide the dropdown menu on small screens
    $('.rounded-md.relative').on('click', '.md:hidden', function() {
      $(this).next('.absolute').toggleClass('hidden');
    });

    document.addEventListener('DOMContentLoaded', function() {
  const dropdownButton = document.getElementById('dropdownBtn');
  const dropdownMenu = document.getElementById('dropdownId');
  const dropdownItems = dropdownMenu.getElementsByClassName('dropdown-item');

  // Add click event listener to each dropdown item
  for (let item of dropdownItems) {
    item.addEventListener('click', function() {
      const selectedValue = this.getAttribute('data-dropdown-value');
      dropdownButton.textContent = selectedValue;
    });
  }
});

$(document).ready(function() {
    // Add the "selected" class to the "All Campaign" button
    $("#allCampaignButton").addClass("selected");
});
</script>
