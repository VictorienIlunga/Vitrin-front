<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <script src="<?php echo e(asset('jquery/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('chart/chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('glightbox/dist/js/glightbox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('@splidejs/splide/dist/js/splide.min.js')); ?>"></script>
        <script src="<?php echo e(asset('typed.js/lib/typed.min.js')); ?>"></script>
        <script src="<?php echo e(asset('wow.js/dist/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('smooth-scroll/dist/smooth-scroll.polyfills.min.js')); ?>"></script>
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicon/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon/favicon-16x16.png')); ?>">
        <title></title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js', 'resources/js/theme.js']); ?>
    </head>
    <body>
        <!-- preloader -->
        <div class="preloader loaded-success fixed inset-0 z-50 bg-gray-50">
            <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2">
                <div class="relative mx-auto my-12">
                    <div class="inline-block">
                    <svg class="animate-spin h-8 w-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('layouts.navigation-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    
    function showPorfiles(id,type){
    $('#wait').removeClass('hidden')
        $('#showResult').addClass('hidden')
        $('#body').addClass('overflow-hidden')
        
    $.ajax({
    method:'get',
    url:'<?php echo e(route("ShowClient")); ?>',
    data:{
        type:type,
        id:id
    },
    success:function(result){
        $('#wait').addClass('hidden')
        $('#body').removeClass('overflow-hidden')
        $('#showResult').removeClass('hidden')
        $('#showResult').html(result) 
        },
        // error:function(){
        // window.location='<?php echo e(route("login")); ?>'
        // }
       
    })
    }


</script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\vitrines\resources\views/layouts/app-site.blade.php ENDPATH**/ ?>