<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Followers</title>
</head>

<body>
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <p class="font-bold text-xl ml-2 sm:ml-4">Notifications</p>
        <div class="flex items-center mt-4 mb-0.5 ml-2 sm:ml-4 ">
            <a href="/new_notification">All</a>
            <span
                class="border border-blue-600 rounded-full p-px px-0.5 text-center text-xs ml-1 bg-blue-600 text-white">12</span>
            <a href="/following" class="ml-8 sm:ml-16 ">Following</a>
            <a href="/followers" class="ml-8 sm:ml-16">Followers</a>
        </div>
        <div class=" ml-[174px] sm:ml-[246px] h-0.5 bg-blue-600 rounded-md w-20 "></div>
        <div class="hover:shadow hover:bg-slate-100 px-2 py-2 mt-4 sm:mt-6 rounded  ">
            <div class="flex ">
                <img src="{{ asset('img/image/saovty.png') }}"
                    class="border-1 rounded-full items-center w-14 h-14 sm:w-16 sm:h-16">
                <p class="ml-5 sm:ml-8 ">
                    <strong> Saovty Ly</strong>
                    <br>
                    <button
                        class="border pb-0.5 px-1 sm:pb-1 sm:px-2  bg-blue-600 hover:bg-blue-700 text-white font-medium text-[14px] sm:text-base text-center rounded mt-1 sm:mt-2">Follow
                        Back</button>
                </p>
            </div>
        </div>
        <div class=" hover:shadow hover:bg-slate-100 px-2 pb-2 rounded  ">
            <div class="flex">
                <img src="{{ asset('img/image/saovty.png') }}"
                    class="border-1 rounded-full items-center w-14 h-14 sm:w-16 sm:h-16">
                <p class="ml-5 sm:ml-8 ">
                    <strong> Saovty Ly</strong>
                    <br>
                    <button
                        class="border pb-0.5 px-1 sm:pb-1 sm:px-2  bg-blue-600 hover:bg-blue-700 text-white font-medium text-[14px] sm:text-base text-center rounded mt-1 sm:mt-2">Friend</button>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
