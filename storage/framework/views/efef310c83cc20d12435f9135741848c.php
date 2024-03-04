
<div id="sectionPayementConfirmation" class="hidden w-full h-screen md:pt-1 flex justify-center items-end md:items-center  md:pb-0 bg-neutral-900/80 fixed top-0 left-0 z-50">

    <div id="popup-modal" class=" z-50    h-auto fixed bottom-0 md:relative">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-t-lg md:rounded-lg shadow ">
            
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M298.9 24.31c-14.9.3-25.6 3.2-32.7 8.4l-97.3 52.1l-54.1 73.59c-11.4 17.6-3.3 51.6 32.3 29.8l39-51.4c49.5-42.69 150.5-23.1 102.6 62.6c-23.5 49.6-12.5 73.8 17.8 84l13.8-46.4c23.9-53.8 68.5-63.5 66.7-106.9l107.2 7.7l-1-112.09zM244.8 127.7c-17.4-.3-34.5 6.9-46.9 17.3l-39.1 51.4c10.7 8.5 21.5 3.9 32.2-6.4c12.6 6.4 22.4-3.5 30.4-23.3c3.3-13.5 8.2-23 23.4-39m-79.6 96c-.4 0-.9 0-1.3.1c-3.3.7-7.2 4.2-9.8 12.2c-2.7 8-3.3 19.4-.9 31.6c2.4 12.1 7.4 22.4 13 28.8c5.4 6.3 10.4 8.1 13.7 7.4c3.4-.6 7.2-4.2 9.8-12.1c2.7-8 3.4-19.5 1-31.6c-2.5-12.2-7.5-22.5-13-28.8c-4.8-5.6-9.2-7.6-12.5-7.6m82.6 106.8c-7.9.1-17.8 2.6-27.5 7.3c-11.1 5.5-19.8 13.1-24.5 20.1c-4.7 6.9-5.1 12.1-3.6 15.2c1.5 3 5.9 5.9 14.3 6.3c8.4.5 19.7-1.8 30.8-7.3c11.1-5.5 19.8-13 24.5-20c4.7-6.9 5.1-12.2 3.6-15.2c-1.5-3.1-5.9-5.9-14.3-6.3c-1.1-.1-2.1-.1-3.3-.1m-97.6 95.6c-4.7.1-9 .8-12.8 1.9c-8.5 2.5-13.4 7-15 12.3c-1.7 5.4 0 11.8 5.7 18.7c5.8 6.8 15.5 13.3 27.5 16.9c11.9 3.6 23.5 3.5 32.1.9c8.6-2.5 13.5-7 15.1-12.3c1.6-5.4 0-11.8-5.8-18.7c-5.7-6.8-15.4-13.3-27.4-16.9c-6.8-2-13.4-2.9-19.4-2.8"/></svg>
                    <div class="mb-5 text-[15px]  font-normal text-gray-500">
                            <div class="w-full h-auto flex flex-col items-center text-black font-semibold divid-black divide-y my-3">
                                <div class="w-[80%] flex justify-between h-8">
                                    <div>Nom du payeur</div>
                                    <div><?php echo e($client->nom); ?> <?php echo e($client->prenom); ?></div>
                                </div>
                                <div class="w-[80%] flex justify-between h-8">
                                    <div>Montant</div>
                                    <div id='montantConfirmationShow'></div>
                                </div>
                                <div class="w-[80%] flex justify-between h-8">
                                    <div>Date de réception</div>
                                    <div><?php echo e(date("Y-m-d")); ?></div>
                                </div>
                            </div>
                        Si tout est correct, veuillez appuyer sur le bouton "Confirmer" ci-dessous.  
                    </div>
                    <button id="PayementConfirmationButton" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Confirmer
                    </button>
                    <button id="PayementCancelButton" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  ">
                        Annuler
                    </button>
                </div>
    
            </div>
        </div>
    </div>
    
</div>
    <?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/confirmation/payementConfirmation.blade.php ENDPATH**/ ?>