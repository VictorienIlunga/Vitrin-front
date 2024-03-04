<?php $__env->startSection('content'); ?>
        
        <div id="showResult" class="w-[99%] min-h-[67vh] md:min-h-[60vh] h-auto  rounded-md flex  justify-center">
           <?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

       <div id="wait" class="w-full h-screen  bg-gray-200 rounded-md flex  justify-center items-center hidden" >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32 text-[#8259fd]" viewBox="0 0 24 24"><circle cx="4" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale0" attributeName="r" begin="0;svgSpinners3DotsScale1.end-0.25s" dur="0.75s" values="3;.2;3"/></circle><circle cx="12" cy="12" r="3" fill="currentColor"><animate attributeName="r" begin="svgSpinners3DotsScale0.end-0.6s" dur="0.75s" values="3;.2;3"/></circle><circle cx="20" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale1" attributeName="r" begin="svgSpinners3DotsScale0.end-0.45s" dur="0.75s" values="3;.2;3"/></circle></svg>
       </div>
       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/dashboard.blade.php ENDPATH**/ ?>