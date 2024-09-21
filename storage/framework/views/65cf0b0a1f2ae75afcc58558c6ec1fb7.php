<section class="relative isolate mx-auto max-w-7xl px-6 md:px-10 py-12">
    <div class="relative mx-auto max-w-7xl overflow-hidden p-10 isolate rounded-xl bg-gray-800 wow fadeInUp shadow-full shadow-neutral-900/20  wow fadeInUp" data-wow-duration="1s">
        <h2 class="font-base font-base mx-auto mb-6 max-w-3xl text-center font-display text-2xl uppercase leading-normal tracking-tight text-white md:text-3xl md:leading-normal lg:text-3xl lg:leading-normal">
            Besoin d'une agence web pour créer votre design sur mesure ?</h2>
            <p class="mx-auto mb-10 max-w-2xl text-center text-base text-white sm:text-lg md:text-xl">Profitez d'une étude gratuite de votre projet et découvrez notre méthode pour accompagner nos clients vers la réussite.</p>
            <div id="openRdv"  class="flex w-full flex-wrap gap-6 justify-center md:justify-center">
                <div onclick="prendreRdv('open')" class="ring-none transition-200 focus-visible:ring-none inline-flex space-x-2 items-center bg-white hover:opacity-90 shadow-light hover:shadow-neutral-900/40 px-5  py-2.5 font-semibold md:text-sm text-xs  hover:-translate-y-0.5   transform will-change-transform cursor-pointer" href="#services">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512"><path d="M304,384V360c0-29,31.54-56.43,52-76,28.84-27.57,44-64.61,44-108,0-80-63.73-144-144-144A143.6,143.6,0,0,0,112,176c0,41.84,15.81,81.39,44,108,20.35,19.21,52,46.7,52,76v24" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="224" y1="480" x2="288" y2="480" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="208" y1="432" x2="304" y2="432" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="384" x2="256" y2="256" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M294,240s-21.51,16-38,16-38-16-38-16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                    Prendre Rendez-vous
                
                </div>
            </div>
            <svg class="absolute inset-x-0 top-0 -z-10 h-full w-full stroke-neutral-100/20 [mask-image:radial-gradient(50%_50%_at_center,white,transparent)]" aria-hidden="true"><defs><pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b85" width="50" height="50" x="50%" y="-1" patternUnits="userSpaceOnUse"><path d="M.5 50V.5H50" fill="none"></path></pattern></defs><svg x="50%" y="-1" class="overflow-visible fill-neutral-50/50"><path d="M-250 0h51v51h-51Z M200 0h51v51h-51Z" stroke-width="0"></path></svg><rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b85)"></rect></svg>
        </div>
</section>
<?php echo $__env->make('rdv.form-rdv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    function prendreRdv(data){
        if(data === 'open'){
            $('#sectionRdv').removeClass('hidden').addClass('modal-show').fadeIn()
            $('body').addClass('overflow-hidden')
            
        }else{
            $('#sectionRdv').fadeOut(function(){
                $(this).addClass('hidden').removeClass('modal-show')
            })
            $('body').removeClass('overflow-hidden')
        }
    }
</script><?php /**PATH C:\xampp\htdocs\vitrines\resources\views/rdv/rdv.blade.php ENDPATH**/ ?>