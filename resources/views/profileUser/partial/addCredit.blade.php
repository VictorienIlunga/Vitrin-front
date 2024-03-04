<div id="sectionAddCredit" class="hidden w-full h-screen  md:pt-1 flex justify-center items-center   md:pb-0 backdrop-blur-md bg-black/30 fixed top-0 left-0 z-50">
    <div class="w-full  md:w-[45%] h-full md:h-[87vh]    bg-white overflow-hidden  md:rounded-xl flex flex-col  items-center">
        <div id="layoutSectionSend" class="w-full h-[10%] bg-[#8259fd] flex justify-center items-center text-white font-bold">
            Octroyer un crédit
        </div>

        <div id="defaultScanSection" class="w-full h-[90%] flex justify-center items-center">
            <div class="w-11/12  h-[95%] border rounded-xl flex justify-center items-center">
                <div class="w-11/12 h-[90%] flex flex-col justify-between">
                    
                    <div class="w-full h-auto md:h-[60%] ">

                        <div class="w-full mt-4 h-auto border rounded-xl flex justify-center items-center py-4">
                            <form id="senderForm" action="{{route("OperationCredit")}}" method="post" class=" w-11/12 md:w-10/12 h-auto flex flex-col justify-between ">
                                @csrf
                                <input type="hidden" name="clientId" id="clientId" value="{{$client->id}}">

                                <div>
                                    <x-input-label for="name" id="label-name" :value="__('Montant')" />
                                    <x-text-input id="Montant" class="block mt-1 w-full" type="number" name="Montant" :value="old('Montant')" required autofocus  />
                                    <x-input-error :messages="$errors->get('Montant')" class="mt-2" />
                                </div>

                                <div class="mt-1">
                                    <x-input-label for="name" id="label-name" :value="__('Date de fin')" />
                                    <x-text-input id="DateFin" class="block mt-1 w-full" type="date" name="DateFin" :value="old('Date de fin')" required autofocus  />
                                </div>

                                <div class="mt-1" >
                                    <x-input-label for="pays" :value="__('Gage')" />
                                    <textarea class="w-full rounded-md  border border-gray-300 text-black mt-1 " name="Gage" id="Gage" cols="" rows="2" required></textarea>
                                </div>

                                <div class="mt-1">
                                    <x-input-label for="name" id="label-name" :value="__('Mot de passe')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')"  required autofocus  autocomplete="new-password"/>
                                    <x-input-error :messages="$errors->get('Montant')" class="mt-2" />
                                </div>


                                <div class=" flex items-center space-x-2 mt-1">
                                    <input type="checkbox" id="accepter" name="accepter" value="oui" required>
                                    <label for="accepter">J'accepte les termes et conditions</label>
                                </div>

                            </form>
                        </div>

                        <div id="StatutAddCredit" class="w-full h-10 rounded-md border-2 border-red-500 bg-red-500/30 text-red-500  mt-4 font-bold flex justify-center items-center hidden">Ce client a déjà un crédit</div>

                        <div id='addcreditfooter' class="w-full h-auto flex justify-between mt-4">

                            <div onclick="ShowAddCredit()" class="flex justify-center items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-600 w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12.727 3.687a1 1 0 1 0-1.454-1.374l-8.5 9a1 1 0 0 0 0 1.374l8.5 9.001a1 1 0 1 0 1.454-1.373L4.875 12z"/></svg>
                                <div class="text-blue-600 font-semibold">
                                    Retour
                                </div>
                            </div>
                            
                           

                            <div id="senderFormSubmit" class="w-40 h-10 flex justify-center items-center rounded-full bg-[#8259fd] text-white cursor-pointer font-semi-bold">
                                <div class="w-auto hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24"><circle cx="4" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale0" attributeName="r" begin="0;svgSpinners3DotsScale1.end-0.25s" dur="0.75s" values="3;.2;3"/></circle><circle cx="12" cy="12" r="3" fill="currentColor"><animate attributeName="r" begin="svgSpinners3DotsScale0.end-0.6s" dur="0.75s" values="3;.2;3"/></circle><circle cx="20" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale1" attributeName="r" begin="svgSpinners3DotsScale0.end-0.45s" dur="0.75s" values="3;.2;3"/></circle></svg>
                                </div>
                                <div class="w-auto">
                                    Suivant
                                </div>
                                
                            </div>
    
                        </div>

                    </div>
                    

                </div>
            </div>

        </div>


    </div>
</div>