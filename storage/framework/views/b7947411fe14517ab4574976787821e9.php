<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <script src="<?php echo e(asset('jquery/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('chart/chart.min.js')); ?>"></script>
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body id="body" class="font-sans antialiased">
          

        <div class="w-full h-auto  flex flex-col  md:flex-row ">
            <div class="w-full flex md:hidden  justify-between px-3 py-2 fixed top-0 bg-sky-600">
                <div class="flex">
                    <img src="<?php echo e(asset('storage/logo/GONEY1.webp')); ?>" alt="logo goney" class="w-auto h-9 ">
                </div>
        
                <div id="menu" class="w-8 rounded-full flex justify-center items-center -space-x-2 cursor-pointer">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" viewBox="0 0 24 24"><g id="evaMenuOutline0"><g id="evaMenuOutline1"><g id="evaMenuOutline2" fill="currentColor"><rect width="18" height="2" x="3" y="11" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="16" rx=".95" ry=".95"/><rect width="18" height="2" x="3" y="6" rx=".95" ry=".95"/></g></g></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white hidden" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72a.75.75 0 0 0-1.06-1.06L8 6.94L4.28 3.22Z" clip-rule="evenodd"/></svg>
                </div>
            </div>

            <div id="sectionMenu" class="w-10/12 z-20  md:w-[20%] md:py-2   h-screen fixed md:sticky top-12 md:top-0 hidden md:flex justify-center items-center bg-[#03071E] pt-2 md:pt-0">
                <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="w-full md:w-[80%] min-h-screen flex flex-col mt-12 md:mt-0 bg-gray-200  ">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
<script>
function onglet(id){
  $('#wait').removeClass('hidden')
  $('#showResult').addClass('hidden')
  $('#body').addClass('overflow-hidden')
 
    $.ajax({
      method:'get',
      url:'<?php echo e(route("onglet")); ?>',
      data:{
        type:id
      },
      success:function(result){
        $('#wait').addClass('hidden')
        $('#body').removeClass('overflow-hidden')
            $('#showResult').removeClass('hidden')
            $('#showResult').html(result) 
        }
       
    })

    }
    



</script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\myAdmin\resources\views/layouts/app.blade.php ENDPATH**/ ?>