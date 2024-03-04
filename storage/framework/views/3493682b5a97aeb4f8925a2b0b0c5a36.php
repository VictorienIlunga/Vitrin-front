

    <div class="w-full  bg-white  pb-4 flex flex-col md:flex-row justify-center">
        <div class="w-full md:w-1/2 h-[50vh] space-y-3 hidden md:flex flex-col justify-center items-center">
            <div class="w-60 h-60 rounded-full bg-gray-300">
                <img id="photo-img" src="" class="hidden w-full h-full rounded-full object-cover">
                <img id="svg-img" src="<?php echo e(asset('storage/profil/'.Auth::user()->image)); ?>" alt="photo de <?php echo e(Auth::user()->name); ?>" class="w-full h-full rounded-full object-cover">
            </div>
                <div id="add-img" class="w-11/12  h-10 bg-sky-600 cursor-pointer text-white rounded-md flex justify-center items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 256 256"><path fill="currentColor" d="m225.9 74.78l-44.69-44.69a14 14 0 0 0-19.8 0L38.1 153.41a13.94 13.94 0 0 0-4.1 9.9V208a14 14 0 0 0 14 14h44.69a13.94 13.94 0 0 0 9.9-4.1L225.9 94.58a14 14 0 0 0 0-19.8ZM48.49 160L136 72.48L155.51 92L68 179.51ZM46 208v-33.52L81.51 210H48a2 2 0 0 1-2-2Zm50-.49L76.49 188L164 100.48L183.51 120ZM217.41 86.1L192 111.51L144.49 64l25.41-25.42a2 2 0 0 1 2.83 0l44.68 44.69a2 2 0 0 1 0 2.83Z"/></svg>
                  Modifier le profil
              </div>
        </div>
        <div class="w-full h-auto md:w-1/2 border-l flex flex-wrap space-y-4  justify-center md:justify-between">

           
            <div class="w-full p-4 sm:p-8 bg-white rounded  sm:rounded-lg">
                <div class="w-full">
                    <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="w-full p-4 sm:p-8 bg-white rounded  sm:rounded-lg">
                <div class="w-full">
                    <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

           

            <form class="w-full flex justify-center" method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="w-11/12  h-8 bg-red-600 text-white rounded-md flex justify-center items-center gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                  </svg>
                    Déconnexion
                </button>
              </form> 

       
     </div>
    </div>
    <script>
       

        $('div#add-img').click(function(){
        $('#photo').click()
        })
        $('#photo').on('change',(function(e) {
        for (let a = 0; a < this.files.length; a++) {
            var file = this.files[a];
            var reader=new FileReader();
            reader.onload=function(event){
            
                $('img#svg-img').each(function() {
                    $(this).hide()
                })

                $('img#photo-img').each(function() {
                    $(this).show()
                })

                $('img#photo-img').each(function(){
                    $(this).attr('src',event.target.result)
                })
                
            }
        
            reader.readAsDataURL(file);
        }
        }))

    </script> 
<?php /**PATH C:\xampp\htdocs\myAdmin\resources\views/profile/edit.blade.php ENDPATH**/ ?>