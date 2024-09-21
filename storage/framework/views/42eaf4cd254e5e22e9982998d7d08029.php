
<?php $__env->startSection('content'); ?>
    <!-- hero start -->
    <div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50/80">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap flex-row -mx-4 justify-center">

                <!-- text -->
                <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                    <div class="text-center  mt-6 lg:mt-0">
                    <div class="mb-12">
                        <h1 class="text-4xl leading-normal text-black font-bold mb-4">Qui sommes-nous?</h1>
                        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We would direct you to limitless ideas and move your brand into a global landscape.</p>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end Hero -->
    <div class="mx-auto grid max-w-md gap-10 overflow-hidden md:px-10 lg:py-5 px-3 py-6 sm:max-w-7xl">
        <div class="flex flex-col cursor-pointer rounded-lg md:flex-row lg:h-auto wow fadeInUp" data-wow-duration="1s">
            <div class="order-1 flex flex-col justify-between  p-5 md:w-1/2 md:gap-10 md:px-10 md:py-14">
                <h1 class="mt-3 font-display text-2xl font-medium uppercase md:text-3xl lg:text-4xl ">Entreprise</h1>
                <div class=" mt-3 text-base mb-10 text-neutral-700 space-y-2">
                    Entréprise, l'agence des solutions logicielles qui révolutionne le monde de la technologie depuis 2022. Grâce à une équipe d'experts passionnés et innovants, Octogone offre des solutions informatiques sur mesure pour répondre à tous les besoins de ses clients. Que ce soit pour développer une application mobile, un logiciel de gestion ou un site web, Octogone saura relever tous les défis techniques avec brio. Faites confiance à Octogone pour transformer votre vision en réalité numérique.
                </div>
            
            </div>

            <div class="order-2 flex items-center justify-center md:p-10 md:w-1/2 ">
                <img src="https://octogone-digi.com/images/octogone_about.svg" alt="illustration about">
            </div>
            
        </div>
    </div>
    <section>
        <div class="mx-auto grid max-w-md gap-10 overflow-hidden md:px-10 lg:py-5 px-3 py-6 sm:max-w-7xl">
            <div class="flex flex-col cursor-pointer rounded-lg md:flex-row lg:h-auto wow fadeInUp" data-wow-duration="1s">
                <div class="order-2 md:order-1 flex items-center justify-center md:p-10 md:w-1/2 ">
                    <img src="https://octogone-digi.com/images/octogone_user_test.svg" alt="illustration sur l'experience utilisateur">
                </div>
                
                <div class="order-1 md:order-2 flex flex-col justify-between  p-5 md:w-1/2 md:gap-10 md:px-10 md:py-14">
                    <h1 class="mt-3 font-display text-2xl font-medium  md:text-3xl lg:text-4xl ">Notre approche centrée sur l'utilisateur</h1>
                    <div class=" mt-3 text-base mb-10 text-neutral-700 space-y-2">
                        Chez nous, l'utilisateur est au cœur de notre processus de création. Nous accordons une attention particulière à l'expérience utilisateur afin de concevoir des interfaces intuitives, esthétiques et faciles à utiliser. Nous croyons que la clé du succès réside dans la compréhension des besoins et des attentes des utilisateurs, c'est pourquoi nous mettons un point d'honneur à les impliquer dès le début du projet.
                        Nous sommes fiers de notre éthique de travail basée sur l'intégrité, la rigueur et le professionnalisme. Nous mettons un point d'honneur à respecter les délais et les engagements pris envers nos clients.
                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
    <?php echo $__env->make('avis.avis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('FAQ.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vitrines\resources\views/apropos/apropos.blade.php ENDPATH**/ ?>