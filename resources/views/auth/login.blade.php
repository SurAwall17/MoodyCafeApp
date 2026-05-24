<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{ asset('images/logo.png') }}" class="w-55  m-auto" alt="">
        <h1 class="mb-3 mt-2 text-center font-semibold text-xl">Sign in to your account</h1>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full p-2" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full p-2" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>

            </label>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-primary hover:text-secondary rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-end mt-4 mb-2">


            <x-primary-button class="w-full">
                <label for="" class="m-auto">
                    {{ __('Log in') }}
                </label>
            </x-primary-button>


        </div>
        <div class="flex items-center justify-end">


            <x-secondary-button class="w-full">
                <label for="" class="m-auto flex">
                    <img src="{{ asset('images/google.png') }}" alt="" class="w-5 me-2">
                    {{ __('Sign in with google') }}
                </label>
            </x-secondary-button>


        </div>

    </form>
    <span class="flex justify-center text-sm">Don't have an account? <a href="/register"
            class="text-primary ms-1 hover:underline">
            Register</a></span>
</x-guest-layout>
