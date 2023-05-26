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
    <div class="mx-32 mt-10 mb-56 "> 
        <p class="font-bold text-xl ml-2">Notifications</p>
        <div class="flex items-center mt-4 mb-0.5 ml-2 ">
            <a href="#" >All</a>
            <span class="border border-blue-600 rounded-full p-px px-0.5 text-center text-xs ml-1 bg-blue-600 text-white">12</span>
            <a href="#" class="ml-16 ">Following</a>
            <a href="#" class="ml-16">Followers</a> 
        </div>
        <div class=" ml-[237px] h-0.5 bg-blue-600 rounded-md w-20 "></div>
        <div class=" border shadow bg-slate-50 px-2 py-2 mt-8 rounded  ">           
            <div class="flex">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-8 ">
                <strong> Saovty Ly</strong> 
                <br>
                <button class="border pb-1 px-2  bg-blue-600 hover:bg-blue-700 text-white font-medium text-center rounded mt-2">Follow Back</button>   
            </div>                            
        </div>
        <div class="px-2 py-2  ">  
            <div class="flex">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-8 ">
                <strong> Saovty Ly</strong>
                <br>
                <button class="border pb-1 px-2  bg-blue-600 hover:bg-blue-700 text-white font-medium text-center rounded mt-2">Friend</button>   
                
            </div>                   
        </div>
    </div>
</body>
</html>