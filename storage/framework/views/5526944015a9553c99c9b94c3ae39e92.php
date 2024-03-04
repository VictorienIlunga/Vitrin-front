<div id="sectionSend" class="hidden w-full h-screen  md:pt-1 flex justify-center items-center   md:pb-0 backdrop-blur-md bg-black/30 fixed top-0 left-0 z-50">
    <div class="w-full  md:w-[45%] h-full md:h-[87vh]    bg-white overflow-hidden  md:rounded-xl flex flex-col  items-center">
        <div id="layoutSectionSend" class="w-full h-[10%] bg-[#8259fd] flex justify-center items-center text-white font-bold">
            Recharger de l'argent
        </div>

        <div id="defaultScanSection" class="w-full h-[90%] flex justify-center items-center">
            <div class="w-11/12  h-[95%] border rounded-xl flex justify-center items-center">
                <div class="w-11/12 h-[90%] flex flex-col justify-between">
                    
                    <div class="w-full h-auto md:h-[50%] ">
                        <div id="showProfilsender" class="w-full">
                            <div  class="w-full h-auto flex justify-between items-center space-x-2  ">
                                <div class="w-full h-auto flex items-center space-x-2 ">
                                    <div class="w-20 h-20 rounded-full overflow-hidden bg-gray-200">
                                        <img src="<?php echo e(asset('storage/profil/'.Auth::user()->image)); ?>" class="w-full h-full object-cover">
                                    </div>
                                    <div class="w-60 h-[60px] space-y-1">
                                        <div class="w-[60%] h-6 rounded-xl bg-gray-200 flex justify-center items-center"><?php echo e(Auth::user()->name); ?></div>
                                        <div class="w-[100%] h-6 rounded-xl bg-gray-200 flex justify-center items-center"><?php echo e(Auth::user()->email); ?></div>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                        

                        <div class="w-full flex justify-between items-center bg-gray-200 rounded-md mx-[0.5%] mt-4">
                            <div id="typeAction" data="In" class="cursor-pointer w-[49.5%] h-10 border rounded-md  bg-white  text-black text-[15px] flex justify-center items-center  space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14 14.252V22H4a8 8 0 0 1 10-7.748M12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m6.586 4l-1.829-1.828l1.415-1.415L22.414 18l-4.242 4.243l-1.415-1.415L18.586 19H15v-2z"/></svg>
                                <div>Recharger</div>
                            </div>
                            <div id="typeAction" data="Out" class=" cursor-pointer w-[49.5%] h-10 border rounded-md   text-[15px] flex justify-center text-black items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 18v-4h-2v4h-2l3 3l3-3zM11 4C8.8 4 7 5.8 7 8s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4m0 10c-4.4 0-8 1.8-8 4v2h9.5c-.3-.8-.5-1.6-.5-2.5c0-1.2.3-2.3.9-3.4c-.6 0-1.2-.1-1.9-.1"/></svg>
                                <div>Retirer</div>
                            </div>
                        </div> 

                        <div class="w-full mt-4 h-auto border rounded-xl flex justify-center items-center py-4">
                            <form id="senderForm"  method="post" class=" w-11/12 md:w-10/12 h-auto flex flex-col justify-between ">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="typeOperation" id="typeOperation" value="In">
                                <div class="w-full h-1/2 flex flex-col justify-start pt-2 border-b">
                                    <div class="w-full flex justify-between items-center">
                                        <input class="border-none  w-11/12 px-0 " type="number" name="Montant" id="Montant" placeholder="Montant" required>
                                        <div>
                                            FBU
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="w-full h-1/2 flex flex-col justify-start pt-2">
                                    <div class="w-full flex justify-between items-center">
                                        <input class="border-none  w-full px-0 " type="password" name="password" id="password" placeholder="password"    required>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="w-full h-auto flex justify-between mt-4">

                            <div onclick="ShowAddCapital()" class="flex justify-center items-center cursor-pointer">
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

</div><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/capital/partial/capital.blade.php ENDPATH**/ ?>