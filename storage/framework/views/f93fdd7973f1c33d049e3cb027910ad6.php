<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <script src="<?php echo e(asset('jquery/jquery.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center  sm:pt-0 bg-white md:bg-gray-100">
            
                <?php echo e($slot); ?>

           
        </div>

        <script>
            $('#add-img').click(function(){
                $('#photo').click()
            })
             $('#photo').on('change',(function(e) {
            for (let a = 0; a < this.files.length; a++) {
                var file = this.files[a];
                var reader=new FileReader();
                reader.onload=function(event){
                    $('#photo-img').show()
                    $('#svg-img').hide()
                    $('#photo-img').attr('src',event.target.result)
                    
                }
                
                reader.readAsDataURL(file);
            }
            }))
            $('#registerForm').on('submit',function(e){
                if($('#photo').val()==0){
                    e.preventDefault()
                    $('#add-img').children().eq(0).addClass('border-red-500')
                    $('#add-img').children().eq(0).addClass('error-div')
                    setTimeout(() => {
                        $('#add-img').children().eq(0).removeClass('border-red-500')
                        $('#add-img').children().eq(0).removeClass('error-div')
                    }, 400); 
                        }
            })
        </script> 

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/layouts/guest.blade.php ENDPATH**/ ?>