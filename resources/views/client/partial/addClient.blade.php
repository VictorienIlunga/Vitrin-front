<div id="sectionAddUser" class="hidden w-screen h-screen md:pt-1 flex justify-center items-center  md:pb-0 backdrop-blur-md bg-black/30 fixed top-0 left-0 z-50">
    <div class="w-full md:w-[70%] h-[100vh] md:h-auto pb-14   overflow-auto md:border   bg-white   md:rounded-md flex flex-col  items-center">
        <div class="w-11/12  h-[10vh] flex justify-between items-center my-4">
            <div class="text-[18px] md:text-[25px] font-semibold">Ajouter un nouveau client</div>
            <div onclick="addUser()" class="cursor-pointer">
                <svg  xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8 cursor-pointer" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72a.75.75 0 0 0-1.06-1.06L8 6.94z" clip-rule="evenodd"/></svg>
            </div>
        </div>
            
<form id="registerForm" class="w-11/12 h-auto  flex flex-col md:flex-row md:justify-between " method="POST" action="{{route('SavedClient') }}" enctype="multipart/form-data">
    @csrf
    <div class="w-full md:w-[45%] ">
        <div>
            <x-input-label for="name" id="label-name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('nom')" required autofocus  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    
        <div class="mt-4">
            <x-input-label for="name" id="label-name" :value="__('Prénom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    
        <div class="mt-4">
            <x-input-label for="pays" :value="__('Sexe')" />
            <select class="w-full rounded-md  border border-gray-300 text-black mt-1 "  name="sexe" id="sexe"  required>
            <option value='' disabled selected>Sexe</option>
                <option value='M'>Masculin</option>
                <option value='F'>Féminin </option>
            </select>
        </div>
      
    
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Numéro de téléphone')" />
            <div class="w-full rounded-md border border-gray-300 flex  items-center overflow-hidden mt-1" required>
                <div id="formInputViewNumberCode" class="w-[20%] h-full   border-r border-gray-400 text-center ">
                    +257
                </div>
                <input class="w-[80%] border-l-0 border-r-0 border-none  bg-white"  type="tel" name="telephone" id="telephone"  required>
            </div>
        </div>

        <div class="mt-4">
            <x-input-label for="pays" :value="__('Type de client')" />
            <select class="w-full rounded-md  border border-gray-300 text-black mt-1 "  name="type" id="type"  required>
            <option value='' disabled selected>Sélectionner un type</option>
                <option value='Etudiant'>Etudiant</option>
                <option value='Travailleur'>Travailleur</option>
                <option value='Chômeur'>Chômeur</option>
            </select>
        </div>

    </div>



    <div class="w-full md:w-[45%]">
        <div >
            <x-input-label for="pays" :value="__('Adresse')" />
            <textarea class="w-full rounded-md  border border-gray-300 text-black mt-1 " name="Adresse" id="Adresse" cols="30" rows="10" required></textarea>
        </div>

        <div class=" flex items-center space-x-2 mt-4">
            <input type="checkbox" id="accepter" name="accepter" value="oui" required>
            <label for="accepter">J'accepte les termes et conditions</label>
        </div>

        <div id="StatutAddClient">
            <div  class="w-full h-10 rounded-md border-2 border-green-500 bg-green-500/30 text-green-500  mt-4 font-bold flex justify-center items-center hidden">Client Ajouter</div>
            <div  class="w-full h-10 rounded-md border-2 border-red-500 bg-red-500/30 text-red-500  mt-4 font-bold flex justify-center items-center hidden">Error</div>
        </div>
        
        <div id="register" class="flex flex-col items-center justify-center space-y-2 mt-4">
            <x-primary-button  >
                {{ __('Register') }}
            </x-primary-button>

            <x-primary-button class="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6" viewBox="0 0 24 24"><g><circle cx="12" cy="2.5" r="1.5" fill="currentColor" opacity=".14"/><circle cx="16.75" cy="3.77" r="1.5" fill="currentColor" opacity=".29"/><circle cx="20.23" cy="7.25" r="1.5" fill="currentColor" opacity=".43"/><circle cx="21.5" cy="12" r="1.5" fill="currentColor" opacity=".57"/><circle cx="20.23" cy="16.75" r="1.5" fill="currentColor" opacity=".71"/><circle cx="16.75" cy="20.23" r="1.5" fill="currentColor" opacity=".86"/><circle cx="12" cy="21.5" r="1.5" fill="currentColor"/><animateTransform attributeName="transform" calcMode="discrete" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;30 12 12;60 12 12;90 12 12;120 12 12;150 12 12;180 12 12;210 12 12;240 12 12;270 12 12;300 12 12;330 12 12;360 12 12"/></g></svg>
            </x-primary-button>
        </div>
    </div>
    </form>


    </div>
</div>
