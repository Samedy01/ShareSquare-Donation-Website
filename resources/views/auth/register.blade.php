<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />


        <div class="h-full md:h-auto md:w-40px">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/login.jpg') }}"
                 alt="Sign Up"/>
        </div>

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Sign Up
                </h1>
{{--                <p>Join our community and sign up today to make a difference.</p>--}}
                            <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full h-10" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full h-10" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-3">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full h-10" type="number" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full h-10"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full h-10"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}
{{--        </div>--}}
            <hr class="mt-6">

            <x-primary-button class="w-full primary-bg-color text-white justify-center p-10 h-10 rounded-lg mb-6 hover:bg-red-500 hover:text-gray-100">
                {{ __('Sign Up') }}
            </x-primary-button>
{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
            <!-- Remember Me -->
            <div class="block mb-1">
                <label for="remember_me" class="inline-flex items-center">
                    <span class="ml-2 text-sm text-gray-600">By clicking on Sign Up, you agree to our Terms of service and Privacy Policy.</span>
                </label>
            </div>
            <hr class="mb-4">
            <div class="text-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none">
                Already have an account?
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="ml-4 font-semibold primary-text-color">Sign In</a>
                @endif
            </div>

    </form>
            </div>
        </div>
    </div>
</x-guest-layout>
