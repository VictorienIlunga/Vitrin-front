
<?php $__env->startSection('content'); ?>
    <!-- hero start -->
    <div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50/80">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap flex-row -mx-4 justify-center">

                <!-- text -->
                <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                    <div class="text-center  mt-6 lg:mt-0">
                        <div class="mb-12">
                            <h1 class="text-4xl leading-normal text-black font-bold mb-4">Contactez-nous!</h1>
                            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Bien plus qu'un simple prestataire technique, nous mettons un point d'honneur à offrir à nos clients un accompagnement complet et entièrement personnalisé.
                            </p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end Hero -->
<!-- contact start -->

<section id="contact">
    <div class="mx-auto mt-4 grid w-full max-w-4xl grid-cols-1 overflow-hidden rounded-xl bg-white shadow-full shadow-md md:grid-cols-7">
        <div class="col-span-4 p-8 wow fadeInUp" data-wow-duration="1s">
            <p class="text-xl font-mediul">Nous Confier un projet</p>
            <div class="my-4 text-slate-900">
                <p>Parlez-nous de votre projet et recevez une première réponse sous 24 heures!</p>
            </div>
            <form onsubmit="socket.emit('notification','CONTACT');" action="https://octogone-digi.com/ContactSite" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="TdqNcLDLYDMsUfpLLX3AMiVOExTArrQg2T83yDuL">            <fieldset class="space-y-3">
                    <div class="flex flex-col gap-y-3 sm:flex-row sm:gap-x-3">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Prénom *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Prénom *" type="text" required="" name="prenom">
                        </div>
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Nom *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Nom *" type="text" required="" name="nom">
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 sm:flex-row sm:gap-x-3">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Prénom *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Email *" type="email" required="" name="email">
                        </div>
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Téléphone *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Téléphone *" type="text" required="" name="telephone">
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 ">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Entreprise *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Entreprise *" type="text" required="" name="entreprise">
                        </div>
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Message *</label>
                            <textarea class="flex  w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Message *" type="text" required="" name="message" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="files" class="block text-sm font-medium">Déposez ou importez vos fichiers ici</label>
                        <div class="flex">
                            <input type="file" name="fichier[]" id="fichier" multiple="" accept=".pdf, .docx, .doc, .xls, .png, .jpg, .jpeg" class="w-full px-8 py-12 border-2 border-dashed rounded-md ">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-x-2">
                            
                            <input aria-hidden="true" tabindex="-1" type="checkbox" value="on" checked="" required="" class="flex  rounded-md border border-slate-200 bg-white  text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 ">
                            <p class="text-slate-500 dark:text-slate-400 block text-xs">En cochant cette case, vous acceptez que vos données personnelles soient utilisées pour vous recontacter dans le cadre de votre demande. Aucun autre traitement ne sera effectué avec ces informations.</p>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="w-full ring-none transition-200 focus-visible:ring-none space-x-2 text-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40 px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                            Envoyer
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-span-3 bg-gray-800 p-8 wow fadeInUp" data-wow-duration="1s">
            <p class="text-xl font-mediul text-white">Parler à un expert</p>
            <div class="my-4 text-white">
                <p>Consultez gratuitement l'avis d'un expert digital et obtenez les réponses a toutes vos questions !</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-32 w-32 rounded-full overflow-hidden ring-8 ring-black/10">
                        <img src="https://octogone-digi.com/storage/profil/1717674322.webp" class="w-full h-full object-cover" alt="photo de samuel kabongo">
                    </div>
                    <div class="text-center ">
                        <p class="text-lg text-white font-semibold leadi">samuel kabongo</p>
                        <p class="text-sm text-white/60 uppercase">DIRECTEUR TECHNIQUE</p>
                    </div>
                </div>
                <div class="w-full mt-4 space-y-4 flex flex-col">
                    
                        <a onclick="prendreRdv('open')" class="w-full ring-none transition-200 focus-visible:ring-none space-x-2 text-center bg-white hover:opacity-90 shadow-light hover:shadow-neutral-900/40  px-5  py-2.5 font-semibold md:text-sm text-xs text-black hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                            Prendre rendez-vous
                        </a>
                    
                        <a href="mailto:kabongosamuel303@gmail.com" class="w-full ring-none transition-200 border border-white focus-visible:ring-none space-x-2 text-center  hover:opacity-90 shadow-light hover:shadow-md  px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                                Contacter par email
                        </a>

                </div>
            </div>
        </div>
    </div>
    <div class="mt-8 w-full flex justify-center items-center">
        <div onclick="share(1)" class="ring-none transition-200 focus-visible:ring-none inline-flex space-x-2 items-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40 px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"></path></svg>
            <span class="">Partager cette page</span>
        </div>
    </div>
    

</section>
<?php echo $__env->make('avis.avis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('FAQ.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- End contact -->
<?php echo $__env->make('contact.share', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vitrines\resources\views/contact/contact.blade.php ENDPATH**/ ?>