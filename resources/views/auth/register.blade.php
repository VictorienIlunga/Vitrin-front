<x-guest-layout>

    <div class="w-full flex justify-center items-center text-[40px] font-bold">
        Inscription
    </div>
    <div class="w-full sm:max-w-[70%] h-auto   flex flex-col space-y-4 justify-center items-center mt-6 px-6 py-4 bg-white md:shadow-md overflow-hidden sm:rounded-lg">

    <form id="registerForm" class="w-11/12 h-auto md:h-auto flex flex-col md:flex-row md:justify-between " method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="w-full md:w-[38%] h-full">
        
                <div id="add-img" class="w-full h-full flex flex-col justify-center-center items-center ">
                    <div class="w-28 h-28 sm:w-40 sm:h-40  flex justify-center items-center rounded-full border border-gray-600 bg-gray-300">
                        <img id="photo-img" src="" class="hidden w-full h-full rounded-full object-cover">
                        <svg id="svg-img" xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 sm:w-28 sm:h-28 " viewBox="0 0 48 48"><path fill="gray" d="M16.8 9.186A4.25 4.25 0 0 1 20.515 7h6.97A4.25 4.25 0 0 1 31.2 9.186l1.286 2.314h3.764A5.75 5.75 0 0 1 42 17.25v6.794A12.94 12.94 0 0 0 35 22c-1.181 0-2.326.158-3.414.453a8 8 0 1 0-9.4 10.34a13.085 13.085 0 0 0 .81 7.207H11.75A5.75 5.75 0 0 1 6 34.25v-17a5.75 5.75 0 0 1 5.75-5.75h3.764L16.8 9.186ZM24 19.5a5.5 5.5 0 0 0-1.155 10.879a13.045 13.045 0 0 1 6.4-7.039A5.503 5.503 0 0 0 24 19.5ZM35 46c6.075 0 11-4.925 11-11s-4.925-11-11-11s-11 4.925-11 11s4.925 11 11 11Zm0-18a1 1 0 0 1 1 1v5h5a1 1 0 1 1 0 2h-5v5a1 1 0 1 1-2 0v-5h-5a1 1 0 1 1 0-2h5v-5a1 1 0 0 1 1-1Z"/></svg>  
                    </div>

                    <div class="text-[16px] ">
                        Ajouter la photo de profil
                    </div>
                </div>

                
        </div>

        <div class="w-full md:w-[58%]"> 
                <input class="hidden" type="file" accept="image/*" name="photo" id="photo"  >
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="tel" :value="__('Numéro')" />
                    <x-text-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('Numéro')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="tel" :value="__('Adresse')" />
                    <x-text-input id="tel" class="block mt-1 w-full" type="text" name="Adresse" :value="old('Adresse')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                </div>


        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        
        
       

        <div class="flex flex-col items-center justify-center space-y-2 mt-4">
            <x-primary-button >
                {{ __('Register') }}
            </x-primary-button>

            
        </div>

       

        </div>
    </form>

    </div>

    

</x-guest-layout>
