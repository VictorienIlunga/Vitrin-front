
<x-guest-layout>

    <div>
        <img src="{{asset('storage/logo/GONEY 11.webp')}}" alt="logo goney" class="w-auto h-20 ">
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white md:shadow-md overflow-hidden sm:rounded-lg">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-sky-600 shadow-sm focus:ring-sky-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-center mt-4 space-y-2">
            <x-primary-button >
                {{ __('Log in') }}
            </x-primary-button>

        </div>
    </form>


    </div>

</x-guest-layout>
