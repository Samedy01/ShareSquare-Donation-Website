
<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="h-32 md:h-auto md:w-full">
        <img aria-hidden="true" class="object-cover w-full h-full"
             src="{{ asset('images/login.jpg') }}"
             alt="Login"/>
    </div>

                <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
         <div class="w-full">
             <h1 class="mb-4 text-2xl font-semibold text-gray-700">
                 Sign In
             </h1>
             <div class="mb-10"></div>

             <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="loginname" :value="__('Email or Phone Number')" />
            <x-text-input id="loginname" class="block mt-1 w-full" type="text" name="loginname" :value="old('loginname')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('loginname')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
                 <div class="mb-6"></div>

            <x-primary-button class="w-full primary-bg-color text-white justify-center p-10 h-10 rounded-lg mb-6 hover:bg-red-500 hover:text-red-100">
                {{ __('Sign in') }}
            </x-primary-button>

                 <div class="text-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none">

                      Don't have an account?
                      @if (Route::has('register'))
                             <a href="{{ route('register') }}" class="ml-4 font-semibold primary-text-color">Sign Up</a>
                      @endif
                 </div>

    </form>
         </div>
    </div>
    </div>


</x-guest-layout>


