<!-- ========== { HEADER }==========  -->
<header class="fixed top-0 left-0 right-0 z-40">
    <nav class="main-nav">
       <div class="container xl:max-w-6xl mx-auto px-4">
         <div class="lg:flex lg:justify-between">
             <div class="flex justify-between">
               <div class="mx-w-10 text-4xl font-bold capitalize text-gray-900 flex items-center">LogoSite</div>
                 <!-- mobile nav -->
               <div class="flex flex-row items-center py-4 lg:py-0">
                 <div class="relative text-gray-900 hover:text-black block lg:hidden">
                   <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                     <span class="sr-only">Mobile menu</span>
                     <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                     </svg>

                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg h-8 w-8" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                     <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                   </svg>
                   </button>
                 </div>
               </div>
           </div>
           
           <div class=" flex flex-row">
             <!-- nav menu -->
             <ul class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
               <li class="relative hover:text-black">
                 <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="{{route('accueil')}}#hero">Accueil</a>
               </li>
               <li class="relative hover:text-black">
                 <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="{{route('accueil')}}#services">Services</a>
               </li>
               <li class="relative hover:text-black">
                 <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="{{route('accueil')}}#portfolio">Realisations</a>
               </li>
               <li class="relative hover:text-black">
                <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="{{route('apropos')}}">A propos</a>
              </li>
               <div class="lg:hidden flex items-center justify-center mb-3">
                <a class="ring-none transition-200 focus-visible:ring-none inline-flex space-x-2 items-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40 px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer" href="#contact">
                 <svg class="inline-block mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 20 20"><path fill="currentColor" d="M5.8 12.2V6H2C.9 6 0 6.9 0 8v6c0 1.1.9 2 2 2h1v3l3-3h5c1.1 0 2-.9 2-2v-1.82a.943.943 0 0 1-.2.021h-7zM18 1H9c-1.1 0-2 .9-2 2v8h7l3 3v-3h1c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2"></path></svg>
                    
                     Discutons
                </a>
 
            </div>
             </ul>
             
           </div>
           <div class="hidden lg:flex items-center justify-center ">
               <a class="ring-none transition-200 focus-visible:ring-none inline-flex space-x-2 items-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40 px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer" href="#contact">
                <svg class="inline-block mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 20 20"><path fill="currentColor" d="M5.8 12.2V6H2C.9 6 0 6.9 0 8v6c0 1.1.9 2 2 2h1v3l3-3h5c1.1 0 2-.9 2-2v-1.82a.943.943 0 0 1-.2.021h-7zM18 1H9c-1.1 0-2 .9-2 2v8h7l3 3v-3h1c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2"></path></svg>
                   
                    Discutons
               </a>

           </div>
         </div>
       </div>
    </nav>
 </header><!-- end header -->