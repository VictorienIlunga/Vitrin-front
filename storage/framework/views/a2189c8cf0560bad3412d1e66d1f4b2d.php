<div class="w-full md:w-[98%]   text-black overflow-auto mb-2 ">

    <table class="w-[750px] md:w-full rounded-md ">
        <tr class='w-full h-10  bg-white   rounded-md'>
        <td class="w-[5%]  pl-2">No</td>
        <td class="w-[15%]    ">Montant</td>
        <td class="w-[15%]    ">Interet</td>
        <td class="w-[15%]    ">Total</td>
        <td class="w-[20%]    ">Gage</td>
        <td class="w-[10%]    ">Debut</td>
        <td class="w-[10%]    ">Fin</td>
        <td class="w-[10%]    ">Statut</td>
        </tr>
        <?php $__currentLoopData = $client->credit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$credit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr onclick="confirmationPayement(<?php echo e($credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0]); ?>,<?php echo e($credit->id); ?>)" class='text-[14px] w-full h-10 cursor-pointer  bg-white even:bg-gray-100    rounded-md'>
            <td class="w-[5%]  pl-2 "><?php echo e($key+1); ?></td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2">
                    <div>
                        <?php echo e(number_format($credit->montant, 2, '.', ' ')); ?>

                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2">
                    <div>
                        <?php echo e(number_format(App\Http\Controllers\CreditController::interet($credit->id)[0], 2, '.', ' ')); ?>

                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2 font-bold">
                    <div>
                        <?php echo e(number_format($credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0], 2, '.', ' ')); ?>

                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[20%] text-[11px] "><?php echo e($credit->gage); ?></td>
            <td class="w-[10%]  "><?php echo e($credit->created_at->format('Y-m-d')); ?></td>
            <td class="w-[10%]  "><?php echo e($credit->DateFin); ?></td>
            <td class="w-[10%]  ">
                <?php if($credit->statut=='wait'): ?>
                    <div class="w-full h-full flex justify-start  ">
                        <div class="w-11/12 h-7 rounded-xl bg-orange-400/50 border border-orange-600 text-orange-600 flex justify-center items-center">
                            En attente
                        </div>
                    </div>
                <?php else: ?>
                <div class="w-full h-full flex justify-start  ">
                    <div class="w-11/12 h-7 rounded-xl bg-green-400/50 border border-green-600 text-green-600 flex justify-center items-center">
                        Payé
                    </div>
                </div>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        
    </table>
</div><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/profileUser/partial/recent.blade.php ENDPATH**/ ?>