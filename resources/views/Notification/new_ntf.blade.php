<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Notification</title>
</head>
<body>
    <div class="mx-32 mt-10 mb-56"> 
        <p class="font-bold text-xl ml-2">Notifications</p>
        <div class="flex items-center mt-4 mb-0.5 ml-2 ">
            <a href="#">All</a>
            <span class="border border-blue-600 rounded-full p-px px-0.5 text-center text-xs ml-1 bg-blue-600 text-white">12</span>
            <a href="#" class="ml-16">Following</a>
            <a href="#" class="ml-16">Followers</a>
        </div>
        <div class="h-0.5 bg-blue-600 rounded-md w-14"></div>
        {{-- Campaign donated --}}
        <div class=" border shadow bg-slate-50 px-2 py-2 mt-8 rounded  ">  
            <div class="flex ">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-4 mt-4 ">
                <strong> Saovty Ly</strong> Saovty Ly was donated 10.00$ to <strong>Komar Angkor</strong>'s Campaign. 
            </div>                   
        </div>
        {{-- Following --}}
        <div class="px-2 py-2  ">  
            <div class="flex">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-4 ">
                <strong> Saovty Ly</strong> Saovty Ly starts following on you. 
                <br>
                <button class="border pb-1 px-2  bg-blue-600 hover:bg-blue-700 text-white font-medium text-center rounded ml-5 mt-2">Follow Back</button>   
                <button class="border pb-1 px-2  bg-gray-300 hover:bg-gray-400 text-center font-medium rounded ">Accept</button> 
            </div>                   
        </div>
        {{-- New post --}}
        <div class="px-2 py-2  ">  
            <div class="flex ">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-4 mt-4 ">
                <strong> Saovty Ly</strong> Saovty Ly had a new post about <strong>Care Sharing</strong>'s Campaign. 
            </div>              
        </div>
        {{-- Share post --}}
        <div class="px-2 py-2  ">  
            <div class="flex ">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-4 mt-4 ">
                <strong> Saovty Ly</strong> Saovty Ly shared <strong>Care Sharing</strong>'s Campaign post. 
            </div>              
        </div>
        {{-- Like post --}}
        <div class="px-2 py-2  ">  
            <div class="flex ">
                <img src="{{asset('img/image/saovty.png')}}"
                class="border-1 rounded-full items-center w-16 h-16" >
                <p class="ml-4 mt-4 ">
                <strong> Saovty Ly</strong> Saovty Ly liked <strong>Care Sharing</strong>'s Campaign post. 
            </div>              
        </div>
        
    </div>
</body>
</html>