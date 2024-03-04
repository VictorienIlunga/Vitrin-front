<div class="w-full flex flex-col items-center mt-4 ">
    <div class="w-[98%] h-10 flex bg-white rounded-md text-[15px] ">
        <div onclick="onglet('Client')" class="cursor-pointer   flex items-center justify-center ml-2 space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#8259fd]" viewBox="0 0 24 24"><path fill="currentColor" d="M16.62 2.99a1.25 1.25 0 0 0-1.77 0L6.54 11.3a.996.996 0 0 0 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"/></svg>
            Retour
        </div>
        <div class="ml-8 flex items-center justify-center">
            Fiche de <span class="ml-2 font-semibold"><?php echo e($client->nom); ?> <?php echo e($client->prenom); ?></span>
        </div>
    </div>
    <div class="w-[98%] h-auto flex bg-white rounded-md mt-2">
        <div class="w-full flex flex-col md:flex-row py-4" >

        
        <div class="w-full md:w-[40%] h-auto  space-y-3 flex flex-col justify-center items-center p-4 md:p-0">
            <div class="w-40 h-40 md:w-60 md:h-60 rounded-full bg-gray-300 flex justify-center items-center">
                <?php if($client->sexe=="M"): ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 32 32"><g fill="none"><path fill="#000" d="m25.787 6.376l-.8-.397c-.6-.299-1.1-.597-1.5-1.095l-1.501-1.491c-1.2-1.094-2.901-1.492-4.402-.995c-1 .298-2.1.298-3.1 0c-1.401-.696-3.001-.398-4.102.597l-1.8 1.89c-.5.397-1 .795-1.5 1.094l-.801.397c-1.4.697-2.2 2.288-2 3.88l1.1 5.669c.1.596.6.994 1.2.994c5.919 0 12.419.1 18.906.1c.6 0 1-.398 1.1-.995l1.1-5.67c.3-1.69-.5-3.281-1.9-3.978"/><path fill="#4e3233" d="M25.622 15.065c-.075.924-.135 1.954-.135 1.954c.6 0 1-.398 1.1-.995l.098-.506a3 3 0 1 1-1.063-.453m-20.319.461l.078.398c.1.597.6.995 1.2.995c0 0-.059-.938-.132-1.869a3 3 0 1 1-1.146.475"/><path fill="#573739" d="M6.49 16.916c.03.002.06.003.091.003c0 0-.1-1.591-.2-2.685c0-.498.2-1.094.6-1.393l.3-.298c.5-.398.7-.995.7-1.591V9.36c0-.497.3-.895.8-.994c1.201-.299 3.702-.796 7.303-.796c3.6 0 6.102.497 7.302.796c.4.099.8.497.8.994v1.592c0 .596.3 1.193.7 1.59l.2.399c.4.397.6.895.6 1.392c-.1.995-.2 2.685-.2 2.685h.034l-.495 7.382c-.3 3.3-2.894 5.6-5.987 5.6H13.05c-3.193 0-5.688-2.3-5.987-5.6z"/><path fill="#3d2123" d="m15.287 17.527l-.99 3.17a1.005 1.005 0 0 0 .97 1.303h1.466c.688 0 1.173-.662.97-1.304l-.99-3.17c-.213-.701-1.203-.701-1.426 0"/><path fill="#290118" d="M16 23.895a5.603 5.603 0 0 1-2.583-.612c-.255-.13-.53.158-.369.39A3.53 3.53 0 0 0 16 25.25a3.53 3.53 0 0 0 2.952-1.577c.16-.241-.114-.52-.369-.39a5.574 5.574 0 0 1-2.583.612"/><path fill="#fff" d="M9.015 17.367a2.607 2.607 0 0 1 5.085.128a.428.428 0 0 1-.425.505H9.518a.512.512 0 0 1-.503-.633m13.97 0a2.617 2.617 0 0 0-2.527-1.967a2.6 2.6 0 0 0-2.557 2.096a.428.428 0 0 0 .424.504h4.157a.512.512 0 0 0 .503-.633"/><path fill="#7d4533" d="M10.259 17.557a1.664 1.664 0 1 1 3.268.443h-3.209a1.655 1.655 0 0 1-.06-.443m11.483 0c0-.926-.75-1.665-1.668-1.665a1.65 1.65 0 0 0-1.659 1.665c0 .157.02.305.06.443h3.208c.04-.148.06-.286.06-.443"/><path fill="#000" d="M11.927 16.611a.947.947 0 0 1 .84 1.389h-1.679a.947.947 0 0 1 .84-1.389m8.135 0a.947.947 0 0 0-.84 1.389h1.679a.947.947 0 0 0-.84-1.389"/><path fill="#fff" d="M11.65 16.92c0 .166-.132.3-.295.3a.298.298 0 0 1-.296-.3c0-.166.132-.3.296-.3c.163 0 .296.134.296.3m8.195 0c0 .166-.133.3-.297.3a.298.298 0 0 1-.296-.3c0-.166.133-.3.296-.3c.164 0 .297.134.297.3"/><path fill="#201a1a" d="M25.7 14.3L25 24.5c-.3 3.3-2.5 5.5-6 5.5h-6c-3.5 0-5.7-2.2-6-5.5l-.6-10.2l3 8.9c.1.5.7.6 1 .3l.8-.7c.7-.6 1.5-.8 2.3-.8h5c.9 0 1.7.2 2.3.8l.8.7c.3.3.9.1 1-.3zM13 26c0 .9.8 1.7 1.8 1.7c.2 0 .3-.2.3-.3v-.1c0-.5.4-.9.9-.9s.9.4.9.9v.1c0 .2.2.3.3.3c.9 0 1.8-.7 1.8-1.7v-1.5c0-.5-.346-.9-1-.9h-4c-.634 0-1 .4-1 .9z"/><path fill="#000" d="m8.963 12.987l.002-.002l.003-.002l.009-.007l.022-.018c.017-.014.04-.03.067-.05a4.804 4.804 0 0 1 1.005-.544a5.283 5.283 0 0 1 2.783-.295a.995.995 0 1 1-.31 1.967a3.293 3.293 0 0 0-1.742.18a2.828 2.828 0 0 0-.56.297l-.014.011a.995.995 0 0 1-1.266-1.536m13.973-.001l-.002-.002l-.003-.002l-.009-.007l-.022-.018a3.705 3.705 0 0 0-.289-.2a4.818 4.818 0 0 0-.783-.394a5.282 5.282 0 0 0-2.783-.295a.995.995 0 1 0 .31 1.967a3.294 3.294 0 0 1 1.742.18a2.836 2.836 0 0 1 .56.297l.014.011a.995.995 0 0 0 1.265-1.537"/></g></svg>
                <?php else: ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 32 32"><g fill="none"><path fill="#000" d="M30 17.868c0 .943-.207 1.849-.604 2.66a.96.96 0 0 0 0 .85c.378.792.604 1.679.604 2.622c0 3.32-2.68 6-6 6H8c-3.32 0-6-2.68-6-6c0-.943.226-1.83.604-2.623a.96.96 0 0 0 0-.849A6.253 6.253 0 0 1 2 17.868a6.16 6.16 0 0 1 1.014-3.39l.005-.006a6.04 6.04 0 0 0 .98-3.302v-.02A6.152 6.152 0 0 1 10.152 5c.34 0 .66-.17.849-.434A6.163 6.163 0 0 1 16 2a6.163 6.163 0 0 1 5 2.566c.189.283.51.434.85.434A6.152 6.152 0 0 1 28 11.15v.02c0 1.17.34 2.32.981 3.302l.004.005c.206.3.374.62.524.957h-.01c.322.745.501 1.563.501 2.434"/><path fill="#4e3233" d="M28 17.9a3 3 0 1 1-6 0a3 3 0 0 1 6 0m-17.7.1a3 3 0 1 1-6 0a3 3 0 0 1 6 0"/><path fill="#573739" d="M6.515 15.546h.023l-.019-.495l-.019-.57c.038-1.77 1.07-2.454 1.51-2.683c.03-.01.063-.023.096-.038a1.58 1.58 0 0 1 .096-.038a4.296 4.296 0 0 0 2.217-2.301l.153-.362a.492.492 0 0 1 .86-.095a7.201 7.201 0 0 0 5.947 3.12h6.003c.336 0 2.018.163 2.118 2.484l-.221 5.45c-.23 5.225-4.31 8.734-9.291 8.734c-4.98 0-9.061-3.509-9.291-8.734z"/><path fill="#3d2123" d="m15.287 17.527l-.99 3.17a1.005 1.005 0 0 0 .97 1.303h1.466c.688 0 1.173-.662.97-1.304l-.99-3.17c-.213-.701-1.203-.701-1.426 0"/><path fill="#290118" d="M16 23.395a5.603 5.603 0 0 1-2.583-.612c-.255-.13-.53.158-.369.39A3.53 3.53 0 0 0 16 24.75a3.53 3.53 0 0 0 2.952-1.577c.16-.241-.114-.52-.369-.39a5.574 5.574 0 0 1-2.583.612"/><path fill="#000" d="M11 15.4c1 0 2.025.8 2.525 1.6c-.599.184-1.155.326-1.698.465c-.637.162-1.255.32-1.902.535l-1-.7c-.4-.3-.5-.8.1-1.2c.6-.5 1.275-.7 1.975-.7m10.2 0c-1 0-2.025.8-2.525 1.6c.599.184 1.155.326 1.698.465c.636.162 1.255.32 1.902.535l1-.7c.4-.3.5-.8-.1-1.2c-.6-.5-1.275-.7-1.975-.7"/><path fill="#fff" d="M9.015 17.367a2.607 2.607 0 0 1 5.085.128a.428.428 0 0 1-.425.505H9.518a.512.512 0 0 1-.503-.633m13.97 0a2.617 2.617 0 0 0-2.527-1.967a2.6 2.6 0 0 0-2.557 2.096a.428.428 0 0 0 .424.504h4.157a.512.512 0 0 0 .503-.633"/><path fill="#7d4533" d="M10.259 17.557a1.664 1.664 0 1 1 3.268.443h-3.209a1.655 1.655 0 0 1-.06-.443m11.483 0c0-.926-.75-1.665-1.668-1.665a1.65 1.65 0 0 0-1.659 1.665c0 .157.02.305.06.443h3.208c.04-.148.06-.286.06-.443"/><path fill="#000" d="M11.927 16.611a.947.947 0 0 1 .84 1.389h-1.679a.947.947 0 0 1 .84-1.389m8.135 0a.947.947 0 0 0-.84 1.389h1.679a.947.947 0 0 0-.84-1.389"/><path fill="#fff" d="M11.65 16.92c0 .166-.132.3-.295.3a.298.298 0 0 1-.296-.3c0-.166.132-.3.296-.3c.163 0 .296.134.296.3m8.195 0c0 .166-.133.3-.297.3a.298.298 0 0 1-.296-.3c0-.166.133-.3.296-.3c.164 0 .297.134.297.3"/><path fill="#000" d="m9.665 14.585l-.008.005a.5.5 0 0 1-.514-.857l.001-.001l.002-.002l.006-.003l.017-.01a3.226 3.226 0 0 1 .277-.143c.184-.088.445-.2.765-.302c.633-.202 1.52-.372 2.476-.203a.5.5 0 1 1-.174.985c-.743-.132-1.457-.002-1.998.171a5.088 5.088 0 0 0-.85.36m13.192-.853l-.002-.002l-.005-.003l-.018-.01a4.822 4.822 0 0 0-.277-.143a6.11 6.11 0 0 0-.764-.302c-.634-.202-1.52-.372-2.477-.203a.5.5 0 0 0 .174.985c.743-.132 1.457-.002 1.999.171a5.089 5.089 0 0 1 .849.36l.008.005a.5.5 0 0 0 .514-.858"/></g></svg>
                <?php endif; ?>
            </div>
        </div>

        <div class="w-full md:w-[25%] h-auto flex flex-col items-center justify-center md:justify-start">
            <div class="w-11/12 md:w-full h-auto  space-y-1 flex flex-col items-center justify-center md:items-start">
                <div class="pl-2 flex  items-center">
                    <div class="w-[100px] font-semibold">Nom</div>
                    <div><?php echo e($client->nom); ?></div>
                </div>

                <div class="pl-2 flex items-center ">
                    <div class="w-[100px] font-semibold">Prénom</div>
                    <div><?php echo e($client->prenom); ?></div>
                </div>

                <div class="pl-2 flex items-center ">
                    <div class="w-[100px] font-semibold">Sexe</div>
                    <div><?php echo e($client->sexe); ?></div>
                </div>

                <div class="pl-2 flex items-center ">
                    <div class="w-[100px] font-semibold">Numéro</div>
                    <div><?php echo e($client->telephone); ?></div>
                </div>

                

                <div class="pl-2 flex items-center ">
                    <div class="w-[100px] font-semibold">Matricule</div>
                    <div><?php echo e($client->Matricule); ?></div>
                </div>

                <div class="pl-2 flex items-center ">
                    <div class="w-[100px] font-semibold">Type</div>
                    <div><?php echo e($client->type); ?></div>
                </div>

                <div class="pl-2 flex items-center <?php if($client->statut=='Anormal'): ?> bg-red-500 text-white <?php else: ?> bg-gray-200 text-black <?php endif; ?> w-[200px] h-8 rounded-md mt-4">
                    <div class="w-[100px] font-semibold">Etat</div>
                    <div><?php echo e($client->statut); ?></div>
                </div>

            </div>
        </div>


        <div class="w-full md:w-[35%] h-auto flex flex-col items-center md:items-start space-y-2 mt-2 md:mt-0">
            <div onclick="ShowAddCredit()" class="w-11/12 md:w-[80%] cursor-pointer xl:w-80 h-10 bg-white rounded-md border border-[#8259fd] text-[#8259fd] flex justify-center items-center space-x-1">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h4z"/></g></svg>
                </div>
                <div>
                    Créditer
                </div>
            </div>

            <div onclick="confirmation(<?php echo e($client->id); ?>)" class="w-11/12 md:w-[80%] xl:w-80 h-10 cursor-pointer rounded-md border bg-[#8259fd] text-white flex justify-center items-center space-x-1">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="-2 -3 24 24"><path fill="currentColor" d="m12.8 1.613l6.701 11.161c.963 1.603.49 3.712-1.057 4.71a3.213 3.213 0 0 1-1.743.516H3.298C1.477 18 0 16.47 0 14.581c0-.639.173-1.264.498-1.807L7.2 1.613C8.162.01 10.196-.481 11.743.517c.428.276.79.651 1.057 1.096M10 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2m0-9a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1"/></svg>
                </div>
                <div>
                    Signaler
                </div>
            </div>

        </div>


        </div>
    </div>

   <?php if($client->credit->count()>0): ?>
        <div class="w-[98%] h-auto flex flex-col bg-white justify-center items-center rounded-md my-2  pt-2">
            <div class="w-[98%] my-2 text-black font-semibold">
                Crédit
            </div>
            <?php echo $__env->make('profileUser.partial.recent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>    

        <div class="w-[98%] flex flex-col-reverse md:flex-row justify-between   mb-4">
            <div class="w-full  h-auto  bg-white rounded-md flex flex-col items-center pb-4  ">
                
                <div class="w-[98%] mt-2 text-black font-semibold">
                    Contrat d'engagement
                </div>

                <div class="w-[98%] h-auto md:h-60 py-4 md:py-0 flex  justify-between items-center">
                    <div  class="w-full font-semibold flex flex-wrap gap-2 justify-between md:justify-start items-center md:space-x-2">
                        <?php $__currentLoopData = $client->credit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="w-40 h-52 flex flex-col justify-between items-center rounded-md border py-2 ">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" viewBox="0 0 64 64"><g fill="#f4ae7f"><path d="M52.11 58.32c0 3.056-2.289 5.531-5.116 5.531H14.379c-2.824 0-5.114-2.476-5.114-5.531V8.447c0-3.059 2.291-5.534 5.114-5.534h32.615c2.827 0 5.116 2.475 5.116 5.534z"/><path d="M30.899 10.509c0 .581-1.158 1.051-2.58 1.051H11.848c-1.426 0-2.582-.47-2.582-1.051v-9.46C9.266.47 10.421 0 11.848 0h16.471c1.422 0 2.58.47 2.58 1.049z"/></g><path fill="#d0d2d3" d="M54.662 56c0 2.593-2.312 4.69-5.167 4.69H16.536c-2.851 0-5.167-2.098-5.167-4.69V13.73c0-2.591 2.316-4.69 5.167-4.69h32.959c2.855 0 5.167 2.1 5.167 4.69z"/><path fill="#fff" d="M54.662 52.694c0 2.593-2.312 4.69-5.167 4.69H16.536c-2.851 0-5.167-2.098-5.167-4.69v-42.27c0-2.591 2.316-4.688 5.167-4.688h32.959c2.855 0 5.167 2.098 5.167 4.688z"/><path fill="#d0d2d3" d="M43.1 8.28c0 .312-1.538.566-3.43.566h-21.9c-1.896 0-3.434-.254-3.434-.566V3.185c0-.315 1.538-.566 3.434-.566h21.9c1.892 0 3.43.251 3.43.566z"/><path fill="#35494d" d="M20.07 18.03h28.562c1.922 0 1.922-2.7 0-2.7H20.07c-1.915 0-1.915 2.7 0 2.7m0 5.485h28.562c1.922 0 1.922-2.698 0-2.698H20.07c-1.915 0-1.915 2.698 0 2.698m0 5.605h28.562c1.922 0 1.922-2.7 0-2.7H20.07c-1.915 0-1.915 2.7 0 2.7m0 5.48h28.562c1.922 0 1.922-2.698 0-2.698H20.07c-1.915 0-1.915 2.698 0 2.698m0 10.58h13.148c1.916 0 1.916-2.699 0-2.699H20.07c-1.915-.001-1.915 2.699 0 2.699"/></svg>
                                </div>
                                <div>
                                    <?php echo e($item->contrat->nom); ?>

                                </div>
                            
                                <a onclick="downloadContrat(this)" class="w-[90%] h-10 bg-blue-500 text-white rounded-md flex justify-center items-center cursor-pointer" href="<?php echo e(route("generatePDF",['id'=>$item->contrat->id])); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1M12 4.5v11m3.5-3.5L12 15.5L8.5 12"/></svg></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>

            </div>
        </div>
   
    <?php else: ?>
    <div class="w-[98%] flex flex-col-reverse md:flex-row justify-between mt-3 ">
        <div class="w-full  h-auto  bg-white rounded-md flex flex-col items-center pb-4  ">
            <div class="w-full h-60 md:h-[43vh] flex flex-col items-center justify-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 24 24"><path fill="gray" d="M12 2a10.017 10.017 0 0 0-7 2.877V3a1 1 0 0 0-2 0v4.5a1 1 0 0 0 1 1h4.5a1 1 0 0 0 0-2H6.218A7.992 7.992 0 1 1 12 20a1 1 0 0 0 0 2a10 10 0 0 0 0-20Z"/><path fill="gray" d="M14 13h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2Z"/><path fill="gray" d="M12 4a8.008 8.008 0 0 0-5.782 2.5H8.5a1 1 0 0 1 0 2H4a.989.989 0 0 1-.976-.88A9.977 9.977 0 0 0 12 22a1 1 0 0 1 0-2a8 8 0 0 0 0-16Zm2 9h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2Z" opacity=".5"/></svg>
                </div>
                <div class="text-[13px] md:text-[18px] text-gray-500 mt-4">
                    Aucun crédit a été octroyer 
                </div>
            </div> 

        </div>
    </div>
    <?php endif; ?>
   
</div>
<?php echo $__env->make('profileUser.partial.addCredit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('confirmation.payementConfirmation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('confirmation.confirmation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    function ShowAddCredit(){
       $('#sectionAddCredit').toggleClass('hidden') 
       $("#body").toggleClass('overflow-hidden')
    } 

    var submit=0
    var check=0

    $('#senderFormSubmit').on('click',function(){ 
        submit=0
        $('#senderForm input').each(function(){
            if($(this).attr('type')!='hidden' && $(this).attr('type')!='checkbox'){
                if($(this).val()==""){
                    $(this).addClass('border')
                    $(this).addClass('border-red-500')
                    $(this).addClass('error-div')
                    setTimeout(() => {
                        $(this).removeClass('error-div')  
                    }, 400);
                }else{
                    $(this).removeClass('border')
                    $(this).removeClass('border-red-500')
                    submit++
                }
                
            }
        })
        if ($('#Gage').val()!="") {
            $('#Gage').removeClass('border')
            $('#Gage').removeClass('border-red-500')
            submit++
        }else{
            $('#Gage').addClass('border')
            $('#Gage').addClass('border-red-500')
            $('#Gage').addClass('error-div')
            setTimeout(() => {
                $('#Gage').removeClass('error-div')  
            }, 400);
        }
        
       console.log(submit);

        if(submit==4){
            $('#senderForm').submit()
        }
    })

    $('#senderForm').on('submit',function(e){
        e.preventDefault()
        senderFormSubmitAnimation()
        var formData = new FormData(this);
        $.ajax({
            type:'post',
            url:'<?php echo e(route("OperationCredit")); ?>',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                senderFormSubmitAnimation()
                if(response.result=='add'){
                    showPorfiles('<?php echo e($client->id); ?>','profile')
                }else if(response.result=='Montant'){
                    $('#Montant').addClass('border')
                    $('#Montant').addClass('border-red-500')
                    $('#Montant').addClass('error-div')
                    setTimeout(() => {
                        $('#Montant').removeClass('border')
                        $('#Montant').removeClass('border-red-500')
                        $('#Montant').removeClass('error-div')  
                    }, 300);
                }else if(response.result=='code'){
                    $('#password').parent().addClass('border')
                    $('#password').parent().addClass('border-red-500')
                    $('#password').parent().addClass('error-div')
                    setTimeout(() => {
                        $('#password').parent().removeClass('border')
                        $('#password').parent().removeClass('border-red-500')
                        $('#password').parent().removeClass('error-div')  
                    }, 300);
                    check++
                }else if(response.result=='credit'){
                    $('#addcreditfooter').addClass('hidden')
                    $('#StatutAddCredit').removeClass('hidden')
                    setTimeout(() => {
                        $('#addcreditfooter').removeClass('hidden')
                        $('#StatutAddCredit').addClass('hidden') 
                    }, 1500);
                    check++
                }
                if(check==3){
                    $('#logoutCheck').submit()
                }
            },

            })
            })
    

    function senderFormSubmitAnimation(){
        $('#senderFormSubmit').children().each(function(){
                $(this).toggleClass('hidden')
        })
    }

    function confirmationPayement(montant,id){
    $("#sectionPayementConfirmation").removeClass('hidden')
    $("#body").addClass('overflow-hidden')
    $('#montantConfirmationShow').html(montant+'Fbu')
    $('#PayementConfirmationButton').off('click');
    $('#PayementConfirmationButton').click(function(){   
        $.ajax({
        method:'get',
        url:'<?php echo e(route("payementCredit")); ?>',
        data:{
            id:id,
            Montant:montant
        },
        success:function(result){
            showPorfiles('<?php echo e($client->id); ?>','profile')
            $("#sectionPayementConfirmation").addClass('hidden')
            $("#body").removeClass('overflow-hidden')
        }
        }) 
    })
    $('#PayementCancelButton').off('click');
    $('#PayementCancelButton').click(function(){
        $("#sectionPayementConfirmation").addClass('hidden')
        $("#body").removeClass('overflow-hidden')
    })  
    }

    function confirmation(id){
    $("#sectionConfirmation").removeClass('hidden')
    $("#body").addClass('overflow-hidden')
    $('#ConfirmationButton').off('click');
    $('#ConfirmationButton').click(function(){    
        $.ajax({
        method:'get',
        url:'<?php echo e(route("SignalerClient")); ?>',
        data:{
            id:id
        },
        success:function(result){
            showPorfiles('<?php echo e($client->id); ?>','profile')
            $("#sectionPayementConfirmation").addClass('hidden')
            $("#body").removeClass('overflow-hidden')
        }
        })      
    })
    $('button#CancelButton').off('click');
    $('button#CancelButton').click(function(){
        $("#sectionConfirmation").addClass('hidden')
        $("#body").removeClass('overflow-hidden')
    })  
    }

    function downloadContrat(){
        e.preventDefault()
        // $.ajax({
        // method:'get',

        // data:{
        //     id:id
        // },
        // success:function(result){
        //     showPorfiles('<?php echo e($client->id); ?>','profile')
        //     $("#sectionPayementConfirmation").addClass('hidden')
        //     $("#body").removeClass('overflow-hidden')
        // }
        //})   
    }
</script><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/profileUser/profile.blade.php ENDPATH**/ ?>