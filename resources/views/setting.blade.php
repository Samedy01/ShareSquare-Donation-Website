<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/saovty.css')
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>
    <title>Setting</title>
</head>
<body>
    <div class="mx-32 mt-10 mb-56"> 
        
        <div class=" border shadow-md px-8 py-6 mt-8 rounded">
            <i class="fa-sharp fa-solid fa-globe fa-xl"></i>            
            <span class="font-bold ml-3 text-xl">Language</span> 
            <h6 class="mt-4">Choose your preferred language to be displayed on</h6> 
            <div class="w-full md:w-1/2  mb-6 md:mb-0 my-4">     
                <div class="flex items-center my-4 px-4 border bg-gray-100 rounded-md dark:border-gray-300 ">
                    <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" 
                        class="w-4 h-4 rounded text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-1" class="w-full p-4 ml-2 text-gray-700 font-medium  ">English</label>
                </div>
                <div class="flex items-center mb-4 px-4 border bg-gray-100 rounded-md dark:border-gray-300">    
                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="w-full p-4 ml-2 font-medium text-gray-700 ">Khmer</label>
                </div>
            </div>
        </div>
        <div class=" border shadow-md px-8 py-6 mt-8 rounded">
            <i class="fa-solid fa-bell fa-xl"></i>           
            <span class="font-bold ml-3 text-xl">Notification</span> 
            <h6 class="mt-4">Customize where you want to receive your notifications</h6> 
            <div class="w-full md:w-1/2  mb-6 md:mb-0 my-4">  
                <label class="flex items-center">
                    <input id="notification" class="relative w-10 h-5 transition-all duration-200 ease-in-out bg-gray-300 rounded-full shadow-inner outline-none appearance-none " type="checkbox" checked />
                    <span class="ml-3">Push Notification</span>
                </label>
                <label class="flex items-center mt-4 mb-4">
                    <input  id="notification" class="relative w-10 h-5 transition-all duration-200 ease-in-out bg-gray-300 rounded-full shadow-inner outline-none appearance-none " type="checkbox" checked />
                    <span class="ml-3">Email Notification</span>
                </label> 
            </div>
            <p class="text-[#ff4238]">*Important account and content notifications may still be sent to you, even if your preferred notification settings are in place.</p>    
        </div>
    </div>
</body>
</html>