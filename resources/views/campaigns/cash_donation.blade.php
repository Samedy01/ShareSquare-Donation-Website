@extends('layouts.layout')
@section('contents')

    <section class="justify-center flex mt-5">
        <div class="image_thumbnail relative w-2/3 mx-auto h-[400px]">
            <img class="object-cover w-full h-[400px] rounded" src="{{asset($campaign->image_thumbnail_path)}}">
            <div class="absolute bottom-0 text-white py-3 w-full text-center bg-black bg-opacity-50 text-xl font-bold">
                {{$campaign->title}}
            </div>
        </div>
    </section>
    <form action="{{route('campaign.donate_now_cash')}}" method="post" id="payment-form" class="">
        @csrf
    <section class="container grid grid-cols-6 gap-3 mt-10 mb-10 w-3/4">
        <div class="donation_amount wrapper col-span-3 p-3 border shadow rounded-xl mx-auto  ">
            <div class="mt-4">
                <label>Choose donate amount</label>
                <div class="option_donate_amount flex justify-between items-center">
                    <span class="text-mainColor px-3 py-2 shadow rounded amount_suggest hover:bg-secondaryColor hover:cursor-pointer hover:border hover:border-mainColor border-transparent border" data-amount-suggest="1">1 USD</span>
                    <span class="text-mainColor px-3 py-2 shadow rounded amount_suggest hover:bg-secondaryColor hover:cursor-pointer hover:border hover:border-mainColor border-transparent border" data-amount-suggest="3">3 USD</span>
                    <span class="text-mainColor px-3 py-2 shadow rounded amount_suggest hover:bg-secondaryColor hover:cursor-pointer hover:border hover:border-mainColor border-transparent border" data-amount-suggest="5">5 USD</span>
                </div>
            </div>
            <div class="mt-4">
                <label for="donate_amount">or enter your own donated amount (USD)</label>
                <input type="number" name="donate_amount" placeholder="0" id="donate_amount" class="border px-5 py-3 rounded w-full amount-input mt-3" required>
            </div>
            {{--Hidden input--}}
            <div>
                <!--user name-->
                <input type="text" name="name" id="card-strip-name" class="hidden" value="{{$user->name}}">
                <input type="number" name="user_id" class="hidden" value="{{$user->id}}">
                <input type="number" name="campaign_id" class="hidden" value="{{$campaign->id}}">

            </div>
            <div class="border py-3 mt-3 rounded px-5 hidden" id="card_stripe"></div>
            <br>
            <hr>
            <div class="mt-10">
                <label>Add an optional donation to <span class="text-mainColor">ShareSquare</span> to amplify our impact</label>
                <select class="border rounded w-full px-5 py-3" name="commission">
                    <option value="3">3% of donation amount</option>
                    <option value="4">4% of donation amount</option>
                </select>
            </div>
            <br>
            <hr>
            <div class="flex items-center justify-between mt-10">
                <span class="text-xl">Total</span>
                <span class="text-xl font-bold" id="total_amount_donate">$0.00</span>
            </div>
        </div>
        <div class="payment_option wrapper col-span-3 p-3 border shadow rounded-xl">
            <h2 class="text-3xl mt-4">Donate To <span class="font-bold">{{$campaign->title}}</span></h2>
            <div class="mt-4">
                <label>Select on of the payment option</label>
            </div>
            <div class="payment-option-wrapper mt-4">
                <label for="stripe_payment" class="payment-option flex shadow p-4 rounded-xl items-center hover:cursor-pointer border-transparent border hover:border-mainColor hover:bg-secondaryColor">
                    <div class="pay_logo">
                        <img src="{{asset('images/strip-logo-l.png')}}" class="w-20 h-10 object-cover rounded">
                    </div>
                    <div class="payway_description ml-3">
                        <div>Stripe</div>
                        <div class="text-gray-400">Pay with Visa card</div>
                    </div>
                </label>
                <input id="stripe_payment" name="payment-option" value="stripe" class="hidden" type="radio">
            </div>
        </div>

    </section>
    <div class="container w-3/4 mx-auto mb-10">
        <button class="text-center py-5 border w-full bg-mainColor rounded-xl hover:cursor-pointer hover:bg-red-700 active:bg-red-500 text-xl text-white font-bold flex items-center justify-center" type="submit">
            <div>
                Donate
            </div>
            <div class="hidden loader-dots block relative w-20 h-4" id="donateLoading">
                <div class="absolute top-0 mt-1 w-2 h-2 rounded-full bg-white"></div>
                <div class="absolute top-0 mt-1 w-2 h-2 rounded-full bg-white"></div>
                <div class="absolute top-0 mt-1 w-2 h-2 rounded-full bg-white"></div>
                <div class="absolute top-0 mt-1 w-2 h-2 rounded-full bg-white"></div>
            </div>
        </button>
    </div>
    </form>
    <section class="resultDonate my-10 hidden">
        <div class="container">
            <div class="border shadow rounded py-10 px-5 text-center mx-auto w-3/5">
                <p class="font-bold text-3xl">You've Made a Different!</p>
                <p class="font-bold text-3xl mb-5">You've donated <span class="text-mainColor" id="resultDonateAmount">$20</span> Different!</p>
                <p class="text-gray-400 mb-5">Thank You for Your Generosity! Share Your Impact, Inspire Others, and Donate Again.</p>
                <div>
                    <a href="{{route('dashboard')}}" class="font-bold rounded text-white inline-block bg-mainColor hover:bg-red-700 active:bg-red-500 px-5 py-3">
                        Go to Home
                    </a>
                </div>
            </div>

        </div>
    </section>

    <button id="paymentClick" data-modal-target="payment_fail" data-modal-toggle="payment_fail" class="hidden block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Toggle modal
    </button>

    <div id="payment_fail" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="payment_fail">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">We cannot proceed donation with your card. Please try again.</h3>
                    </div>
            </div>
        </div>
    </div>

<script src="https://js.stripe.com/v3/"></script>

@vite('resources/js/panha.js')
@endsection
