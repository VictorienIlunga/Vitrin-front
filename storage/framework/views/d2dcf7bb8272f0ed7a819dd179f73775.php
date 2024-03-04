<?php if($capital->count()>0): ?>
<div class="w-full flex min-h-80 rounded-xl bg-white my-4 pt-6 flex flex-col justify-center items-center ">
    <div class="w-11/12 h-10 text-gray-500 font-semibold flex justify-between">
        <div>Transaction recente</div>
    </div>


    <div class="w-11/12   min-h-72 text-black overflow-auto mb-4 hidden md:flex">

        <table class="w-full rounded-md overflow-hidden divide-gray-100 divide-y-2">
        <tr class='w-full h-10  bg-white   rounded-md'>
            <td class="w-[15%] ">
                <div class="w-full flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><g fill="none"><rect width="18" height="15" x="3" y="6" stroke="currentColor" stroke-width="2" rx="2"/><path fill="currentColor" d="M3 10c0-1.886 0-2.828.586-3.414C4.172 6 5.114 6 7 6h10c1.886 0 2.828 0 3.414.586C21 7.172 21 8.114 21 10z"/><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M7 3v3m10-3v3"/><rect width="4" height="2" x="7" y="12" fill="currentColor" rx=".5"/><rect width="4" height="2" x="7" y="16" fill="currentColor" rx=".5"/><rect width="4" height="2" x="13" y="12" fill="currentColor" rx=".5"/><rect width="4" height="2" x="13" y="16" fill="currentColor" rx=".5"/></g></svg>
                    <div>Date</div>
                </div>
            </td>

            <td class="w-[35%] ">
                <div class="w-full flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                    <div>Membre</div>
                </div>
            </td>

            
            <td class="w-[25%] ">
                <div class="w-full flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 640 512"><path fill="currentColor" d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34c-30.89 0-61.76-3.92-92.65-13.72c-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35c30.89 0 61.76 3.92 92.65 13.72c3.47 1.1 6.95 1.62 10.35 1.62c17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47M48 132.22c20.12 5.04 41.12 7.57 62.72 8.93C104.84 170.54 79 192.69 48 192.69zm0 285v-47.78c34.37 0 62.18 27.27 63.71 61.4c-22.53-1.81-43.59-6.31-63.71-13.62M320 352c-44.19 0-80-42.99-80-96c0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96m272 27.78c-17.52-4.39-35.71-6.85-54.32-8.44c5.87-26.08 27.5-45.88 54.32-49.28zm0-236.11c-30.89-3.91-54.86-29.7-55.81-61.55c19.54 2.17 38.09 6.23 55.81 12.66z"/></svg>
                    <div>Montant</div>
                </div>
            </td>

            <td class="w-[25%] ">
                <div class="w-full flex justify-center items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M20 14a1.5 1.5 0 0 1 .144 2.993L20 17H7.621l1.44 1.44a1.5 1.5 0 0 1-2.008 2.224l-.114-.103l-3.829-3.83c-.974-.974-.34-2.617.991-2.725l.14-.006zM14.94 3.44a1.5 1.5 0 0 1 2.007-.104l.114.103l3.829 3.83c.974.974.34 2.617-.991 2.725l-.14.006H4a1.5 1.5 0 0 1-.144-2.993L4 7h12.379l-1.44-1.44a1.5 1.5 0 0 1 0-2.12"/></g></svg>
                    <div>Type</div>
                </div>
            </td>

        </tr>

        <?php $__currentLoopData = $capital; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr  class='text-[14px] w-full h-12    bg-white even:bg-gray-100   rounded-md'>
            <td class="w-[15%]  pl-1 "><?php echo e($item->created_at->format('d-m-Y')); ?></td>
            <td class="w-[35%]  "><?php echo e($item->user->email); ?></td>
            <td class="w-[25%]  ">
                <div class="w-full flex items-center space-x-2">
                    <div>
                        <?php echo e(number_format($item->montant, 2, '.', ' ')); ?>

                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <?php if($item->type=='In'): ?>
                <td class="w-[25%]  ">
                    <div class="w-full h-full flex justify-end  pr-2">
                        <div class="w-11/12 h-8 rounded-xl bg-green-400/50 border border-green-600 text-green-600 flex justify-center items-center">
                            Recharge
                        </div>
                    </div>
                </td>
            <?php elseif($item->type=='Cr'): ?>
            <td class="w-[25%]  ">
                <div class="w-full h-full flex justify-end  pr-2">
                    <div class="w-11/12 h-8 rounded-xl bg-orange-400/50 border border-orange-600 text-orange-600 flex justify-center items-center">
                        Crédit
                    </div>
                </div>
            </td>
            <?php elseif($item->type=='Pm'): ?>
            <td class="w-[25%]  ">
                <div class="w-full h-full flex justify-end  pr-2">
                    <div class="w-11/12 h-8 rounded-xl bg-blue-400/50 border border-blue-600 text-blue-600 flex justify-center items-center">
                        Payement
                    </div>
                </div>
            </td>
            <?php elseif($item->type=='Out'): ?>
                <td class="w-[25%]  ">
                    <div class="w-full h-full flex justify-end pr-2">
                        <div class="w-11/12 h-8 rounded-xl bg-red-400/50 border border-red-600 text-red-600 flex justify-center items-center">
                            Retrait
                        </div>
                    </div>
                </td>
            <?php endif; ?>
           
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    

    <div class="w-11/12  flex flex-col md:hidden min-h-72 text-black overflow-auto mt-2 mb-4 divide-gray-200 divide-y">
        <?php $__currentLoopData = $capital; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-full h-14 flex justify-between items-center py-2">
            <div class="w-[75%] flex">
                <div class="w-[20%]  flex items-center jusitify-center ">
                    <?php if($item->type=='In'): ?>
                        <div class="w-10 h-10 flex justify-center items-center rounded-xl  bg-green-400/50 border border-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg"class=" w-5 h-5 text-green-600" viewBox="0 0 16 16"><path fill="currentColor" d="M10.164 13.756c-.962 1.665-3.366 1.665-4.329 0L.918 5.251C-.045 3.584 1.158 1.5 3.083 1.5h9.834c1.925 0 3.128 2.084 2.164 3.751z"/></svg>
                        </div>
                    <?php elseif($item->type=='Out'): ?>
                        <div class="w-10 h-10 flex justify-center items-center rounded-xl  bg-red-400/50 border border-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-600" viewBox="-2 -4 24 24"><path fill="currentColor" d="m12.547 1.621l6.095 9.794A3 3 0 0 1 16.095 16H3.905a3 3 0 0 1-2.547-4.585L7.453 1.62a3 3 0 0 1 5.094 0z"/></svg>
                        </div>
                    <?php endif; ?>
                    
                  </div>
    
                  <div class="w-[80%]   text-[13px]">
                    <div class="font-bold"><?php echo e($item->user->email); ?></div>
                    <div><?php echo e($item->created_at->format('d-m-Y')); ?></div>
                  </div>
            </div>
            <div class="w-[25%] ">
                <div class="w-full flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24"><path fill="currentColor" d="M11.25 7.847c-.936.256-1.5.975-1.5 1.653s.564 1.397 1.5 1.652zm1.5 5.001v3.304c.936-.255 1.5-.974 1.5-1.652c0-.678-.564-1.397-1.5-1.652"/><path fill="currentColor" fill-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10M12 5.25a.75.75 0 0 1 .75.75v.317c1.63.292 3 1.517 3 3.183a.75.75 0 0 1-1.5 0c0-.678-.564-1.397-1.5-1.653v3.47c1.63.292 3 1.517 3 3.183s-1.37 2.891-3 3.183V18a.75.75 0 0 1-1.5 0v-.317c-1.63-.292-3-1.517-3-3.183a.75.75 0 0 1 1.5 0c0 .678.564 1.397 1.5 1.652v-3.469c-1.63-.292-3-1.517-3-3.183s1.37-2.891 3-3.183V6a.75.75 0 0 1 .75-.75" clip-rule="evenodd"/></svg>
                    <div>
                        <?php echo e($item->montant); ?>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php else: ?>
<div class="w-full flex h-[38vh] md:h-80 rounded-xl bg-white mt-4 pt-6  flex-col justify-center items-center ">
    <div class="w-11/12 h-10 text-gray-500 font-semibold flex justify-between">
        <div>Transaction recente</div>
    </div>
    <div class="w-11/12 h-[240px] md:h-[280px] ">
        <div class="font-semibold w-full h-full flex flex-col justify-center items-center">
            <div class="w-full h-[60%] flex flex-col justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-500" viewBox="0 0 24 24"><path fill="currentColor" d="M13 3a9 9 0 0 0-9 9H1l3.89 3.89l.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7s-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42A8.954 8.954 0 0 0 13 21a9 9 0 0 0 0-18m-1 5v5l4.25 2.52l.77-1.28l-3.52-2.09V8z"/></svg>
                <div class="text-gray-500" >
                    Aucune donnée pour le moment.
                </div>
            </div>
            
        </div>
    </div>
</div>  
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/capital/partial/crud.blade.php ENDPATH**/ ?>