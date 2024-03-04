<section>
    <header>
        <h2 class="text-lg font-medium text-black">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="w-full h-full mt-6 space-y-6">
        @csrf
        @method('patch')
        <div id="add-img" class="w-full h-auto flex md:hidden flex-col justify-center items-center">
            <div class="w-28 h-28 sm:w-32 sm:h-32 lg:w-40 lg:h-40 flex justify-center items-center rounded-full border border-gray-600 bg-gray-300">
                <img id="photo-img" src="" class="hidden w-full h-full rounded-full object-cover">
                @if (isset(Auth::user()->image))
                <img id="svg-img" src="{{asset('storage/profil/'.Auth::user()->image)}}" class="w-full h-full rounded-full object-cover">  
                @else
                <svg id="svg-img" xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 sm:w-28 sm:h-28 lg:w-32 lg:h-32" viewBox="0 0 48 48"><path fill="gray" d="M16.8 9.186A4.25 4.25 0 0 1 20.515 7h6.97A4.25 4.25 0 0 1 31.2 9.186l1.286 2.314h3.764A5.75 5.75 0 0 1 42 17.25v6.794A12.94 12.94 0 0 0 35 22c-1.181 0-2.326.158-3.414.453a8 8 0 1 0-9.4 10.34a13.085 13.085 0 0 0 .81 7.207H11.75A5.75 5.75 0 0 1 6 34.25v-17a5.75 5.75 0 0 1 5.75-5.75h3.764L16.8 9.186ZM24 19.5a5.5 5.5 0 0 0-1.155 10.879a13.045 13.045 0 0 1 6.4-7.039A5.503 5.503 0 0 0 24 19.5ZM35 46c6.075 0 11-4.925 11-11s-4.925-11-11-11s-11 4.925-11 11s4.925 11 11 11Zm0-18a1 1 0 0 1 1 1v5h5a1 1 0 1 1 0 2h-5v5a1 1 0 1 1-2 0v-5h-5a1 1 0 1 1 0-2h5v-5a1 1 0 0 1 1-1Z"/></svg>  
                @endif
            </div>

            <div class="text-[10px] md:text-[12px] text-black ">
                Modifier la photo de profil
            </div>
        </div>
        <input class="hidden" type="file" accept="image/*" name="photo" id="photo"  >
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="number" :value="__('Numéro')" />
            <x-text-input id="number" name="number" type="text" class="mt-1 block w-full" :value="old('number', $user->number)" required autofocus autocomplete="number" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="Adresse" :value="__('Adresse')" />
            <x-text-input id="Adresse" name="Adresse" type="text" class="mt-1 block w-full" :value="old('Adresse', $user->Adresse)" required autofocus autocomplete="Adresse" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
