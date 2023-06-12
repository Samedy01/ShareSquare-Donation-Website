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
            <div class="border shadow rounded py-10 px-5 text-center mx-auto">
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

<script src="https://js.stripe.com/v3/"></script>

@vite('resources/js/panha.js')
@endsection
