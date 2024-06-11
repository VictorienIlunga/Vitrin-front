<div class="w-full md:w-[98%]   text-black overflow-auto mb-2 ">

    <table class="w-[750px] md:w-full rounded-md ">
        <tr class='w-full h-10  bg-white   rounded-md'>
        <td class="w-[5%]  pl-2">No</td>
        <td class="w-[15%]    ">Moms</td>
        <td class="w-[10%] ">Matricule</td>
        <td class="w-[15%]    ">Montant</td>
        <td class="w-[15%]    ">Interet</td>
        <td class="w-[15%]    ">Total</td>
        <td class="w-[20%]    ">Compte à rebours</td>
        </tr>
        <?php $__currentLoopData = $showCredit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$credit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr onclick="confirmationPayement(<?php echo e($credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0]); ?>,<?php echo e($credit->id); ?>)" class='text-[14px] w-full h-10 cursor-pointer  bg-white even:bg-gray-100    rounded-md'>
            <td class="w-[5%]  pl-2 "><?php echo e($key+1); ?></td>
            <td class="w-[15%]    "> <?php echo e($credit->client->nom); ?> <?php echo e($credit->client->prenom); ?></td>
            <td class="w-[10%]   "> <?php echo e($credit->client->Matricule); ?></td>
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
            <td class="w-[20%]  h-full">
                <div id="compte_a_rebours" data="<?php echo e($credit->DateFin); ?>" class="w-[98%] h-full py-1 bg-[#8259fd] text-white flex justify-center items-center rounded-md"></div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        
    </table>
</div><?php /**PATH C:\xampp\htdocs\octogone finance\resources\views/home/partial/credit.blade.php ENDPATH**/ ?>