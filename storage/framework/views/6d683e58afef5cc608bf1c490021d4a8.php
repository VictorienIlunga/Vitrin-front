<div class="w-full  md:w-[90%] h-[99%]  md:border-none flex flex-col  gap-2 ">
 
<div class="w-full h-full overflow-auto flex flex-col">
    <div class="w-full flex  pl-3 h-full flex-col text-[14px] md:text-[15px] md:space-y-1">

        <div class="text-white text-[25px]  my-2 hidden md:flex space-x-3 items-center">
            <img src="<?php echo e(asset('storage/logo/ICON.png')); ?>" alt="logo oactoone" class="w-12 h-12 ">
            
            <div class="text-[30px]  text-[#8259fd]">
                    FINANCE
            </div>
        </div>

    <div id="navigation" data="Dashboard"  class="w-[99%] pl-4  h-10  nowrapper bg-[#8259fd]  text-white  rounded-md md:rounded-md overflow-hidden md:my-1  font-bold cursor-pointer flex justify-start items-center p-1 space-x-2 ">
            <svg id="navsvg" data="Dashboard" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6   text-white">
                <path fill="currentColor" d="m21.743 12.331l-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"/>
              </svg>              
        <span  >Tableau de bord</span>
    </div>

    <div id="navigation" data="Client" class="w-[99%] pl-4  h-10 text-black    rounded-md md:rounded-md cursor-pointer flex justify-start items-center p-1 space-x-2  ">
            <svg id="navsvg" data="Client" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  text-black" >
                <path fill="currentColor" d="M4 22a8 8 0 1 1 16 0H4Zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6Z"/>
              </svg>                        
        <span  >Clients</span>
    </div>

    <div id="navigation" data="Capital" class="w-[99%] pl-4  h-10 text-black    rounded-md md:rounded-md cursor-pointer flex justify-start items-center p-1 space-x-2  ">   
            <svg id="navsvg" data="Capital" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6  text-black" viewBox="0 0 576 512">
                <path fill="currentColor" d="M64 64C28.7 64 0 92.7 0 128v256c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64zm64 320H64v-64c35.3 0 64 28.7 64 64M64 192v-64h64c0 35.3-28.7 64-64 64m384 192c0-35.3 28.7-64 64-64v64zm64-192c-35.3 0-64-28.7-64-64h64zm-224-32a96 96 0 1 1 0 192a96 96 0 1 1 0-192"/>
            </svg>                      
        <span  >Capital</span>
    </div>


    <div id="navigation" data="Profil"  class="w-[99%] pl-4  h-10 text-black    rounded-md md:rounded-md cursor-pointer flex justify-start items-center p-1 space-x-2  ">
            <svg id="navsvg" data="Profil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  text-black">
                <path fill="currentColor" d="M21.521 10.145a1.32 1.32 0 0 1-.97-.811l-.003-.009l-.609-1.482a1.297 1.297 0 0 1 .103-1.269l-.003.005l.988-1.318a.96.96 0 0 0-.049-1.164l.001.002l-1.082-1.085a.963.963 0 0 0-1.167-.043l.003-.002l-1.316.988a1.295 1.295 0 0 1-1.272.098l.008.003l-1.482-.609a1.308 1.308 0 0 1-.819-.963l-.001-.008l-.229-1.631a1.017 1.017 0 0 0-.841-.822l-.006-.001s-.26-.025-.776-.025s-.769.026-.769.026a1.017 1.017 0 0 0-.853.815l-.001.006l-.233 1.629a1.315 1.315 0 0 1-.811.968l-.009.003l-1.482.609a1.298 1.298 0 0 1-1.269-.104l.005.003l-1.318-.988a.963.963 0 0 0-1.165.046l.002-.001l-1.079 1.087a.958.958 0 0 0-.044 1.165l-.002-.003l.988 1.318a1.309 1.309 0 0 1 .099 1.272l.003-.008l-.611 1.482c-.162.419-.522.73-.963.819l-.008.001l-1.631.23a1.017 1.017 0 0 0-.817.849l-.001.006s-.029.256-.029.769s.027.77.027.77c.064.432.393.773.814.852l.006.001l1.629.232c.449.091.81.4.97.811l.003.009l.611 1.482a1.291 1.291 0 0 1-.105 1.269l.003-.005l-.988 1.318a.887.887 0 0 0-.13.999l-.002-.005c.175.217.677.752.678.754l.375.344c.204.188 1.042.449 1.372.203l1.317-.988a1.29 1.29 0 0 1 1.272-.097l-.008-.003l1.482.609c.42.161.731.522.819.963l.001.008l.229 1.626c.08.428.42.757.846.822l.006.001s.257.025.772.025s.77-.027.77-.027c.43-.067.768-.396.846-.816l.001-.006l.234-1.629c.09-.449.4-.81.811-.968l.009-.003l1.482-.611a1.291 1.291 0 0 1 1.269.105l-.005-.003l1.318.988a.962.962 0 0 0 1.166-.049l-.002.001l1.082-1.084a.966.966 0 0 0 .045-1.167l.002.003l-.988-1.318a1.29 1.29 0 0 1-.218-.722c0-.197.043-.383.121-.55l-.003.008l.609-1.482c.163-.42.524-.73.965-.819l.008-.001l1.627-.232c.428-.08.758-.42.822-.846l.001-.006s.027-.249.027-.765s-.027-.77-.027-.77a1.018 1.018 0 0 0-.818-.852l-.006-.001zM11.998 15a3 3 0 1 1 3.001-3.002v.001A3 3 0 0 1 11.998 15z"/>
              </svg>                              
        <span >Paramètres</span>
    </div>
</div>

</div>
</div>
<?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>