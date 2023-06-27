<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Section</title>
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>
    <script src="resources/js/saovty.js"></script>
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/saovty.js') --}}
</head>

<body>
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <div class="flex items-center mt-4  ml-2 sm:ml-4">
            <p class="font-bold text-xl ">All Comment</p>
            <span class="border  rounded-full p-0.5  text-center text-xs ml-2 mt-0.5 bg-primaryTextColor "></span>
            <p class="ml-1 font-bold text-lg text-red-400">14</p>
        </div>

        <div class="hover:shadow hover:bg-slate-100 px-2 pt-4 pb-3 hover:items-center mt-4 sm:mt-6 rounded  ">
            <div class="flex ">
                <img src="{{ asset('img/image/saovty.png') }}"
                    class="border-1 rounded-full items-center w-14 h-14 sm:w-16 sm:h-16">
                <form>
                    <div class="flex-col ">
                        <div class="flex items-center">
                            <textarea onclick="myFunction()"  id="btn" placeholder="Add Comment"
                                class="focus:ml-5 ml-2  text-gray-500 h-[48px] w-[147px] sm:w-[375px] lg:w-[805px] border-none rounded resize-none "
                                required></textarea>
                              
                            <div class="pl-0 justify-end" id="form">
                                <button type="button"
                                    class="mt-2 ml-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Add emoji</span>
                                </button>
                                <button type="button" id="form"
                                    class="inline-flex justify-center p-0.5 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                            </div>
                            <button onclick="myFunction1 type="submit" 
                                class="justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600 block">
                                <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                    </path>
                                </svg>
                                <span class="sr-only">Send message</span>
                            </button>

                        </div>
                        <hr class="ml-5 w-[240px] sm:w-[470px] lg:w-[900px] h-0.5 bg-gray-300 rounded border-0">
                    </div>
                </form>
            </div>
        </div>

        <div class=" hover:shadow hover:bg-slate-100 px-2 pt-4 pb-3 rounded  ">
            <div class="flex">
                <img src="{{ asset('img/image/saovty.png') }}"
                    class="border-1 rounded-full items-center w-14 h-14 sm:w-16 sm:h-16">
                <div class=" flex-col">
                    <div class="flex flex-row items-start">
                        <p class="sm:ml-5 ml-5 text-gray-500 ">Saovty LY </p>
                        <p class="border  rounded-full p-0.5  text-center text-xs ml-2 mt-2 bg-primaryTextColor "></p>
                        <p class="ml-1 text-gray-500">3 days ago</p>
                    </div>
                    <p class="sm:ml-5 ml-5">I donated to this campaign and it feels great to know that my contribution
                        is going towards making a positive impact in the community.</p>
                    <div class="sm:ml-5 ml-5">
                        <i class="hover:opacity-50 fa-regular fa-thumbs-up  ">
                            <span class="mx-2">3</span>
                        </i>
                        <i class="hover:opacity-50 fa-regular fa-thumbs-down">
                            <span class="ms-2">
                                1
                            </span>
                        </i>
                        <span class="ms-2 hover:underline hover:opacity-50">Reply</span>
                        <span class="ms-2 hover:underline hover:opacity-50">Edit</span>
                        <span class="ms-2 hover:underline hover:opacity-50">Delete</span>
                    </div>


                </div>


            </div>


        </div>

    </div>
    </div>
    {{-- <script>
        function myFunction() {
            var x = document.getElementById("form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script> --}}

</body>

</html>
