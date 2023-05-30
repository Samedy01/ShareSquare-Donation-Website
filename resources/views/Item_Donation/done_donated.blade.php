<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>
    <title>Done Donated</title>
</head>

<body>
    <div class="mx-5 sm:mx-32 mt-10 mb-16">
        <div class="group relative w-full rounded ">
            <img src="{{ asset('img/image/img_donation.png') }}" class="w-full object-cover " alt="">

            <div
                class="absolute rounded-md bottom-0 flex border-none w-full justify-center items-center bg-slate-800 opacity-0 group-hover:h-12 sm:group-hover:h-20 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <p class="font-bold text-center text-white sm:text-lg text-base">Building Decent School For Chhuk
                    Village in Kompot</p>
            </div>
            <div
                class="absolute rounded-md right-0 top-0 flex border-none shadow-lg w-12 justify-center items-center bg-slate-800 opacity-0 group-hover:h-12 group-hover:opacity-100 bg-opacity-50 duration-50 ">
                <i class="fa-solid fa-xmark fa-2xl text-white"></i>
            </div>
        </div>
        <div
            class="relative border shadow-md px-8 pt-3 my-8 h-[590px] lg:h-screen justify-centers items-center rounded ">
            <div class="absolute border drop-shadow-lg pt-4 pb-8 my-4 right-0 bg-white rounded w-full ">
                <div class=" text-center">
                    <p class="font-bold text-base sm:text-lg">You've Made a Differnece!<br>
                        You've donated <span class="font-bold text-[#ff4238]">items</span> for the Campaign
                    </p>
                    <p class="sm:mt-3 mt-2">
                        Thank You for Your Generosity ! Share Your Impact, Inspire Others, and Donate Again.
                    </p>
                </div>
                <div class="border mx-auto shadow-md p-4 sm:my-8 my-4 h-76 w-52 rounded">
                    <img src="{{ asset('img/image/donation.png') }}" alt="">
                    <p class="text-center my-4"> Book <br> Quantity: 100 </p>
                    <div class="border rounded h-12 w-44">

                    </div>
                </div>
                <div class=" text-center ">
                    <a href="#">
                        <button
                            class=" bg-[#ff4238] text-white font-bold  border rounded py-3 px-4  justify-center w-52">Go
                            To Home</button>
                    </a>
                </div>


            </div>
        </div>



    </div>
</body>

</html>
