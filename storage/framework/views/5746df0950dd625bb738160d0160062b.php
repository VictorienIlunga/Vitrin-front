<?php if($users->count()!=0): ?>

<div class="w-[98%] flex items-center justify-between my-4">
    <div class="text-[20px] text-black ">Résultat : <?php echo e($users->count()); ?></div>


    <div onclick="addUser()" class="w-[20%] h-10 cursor-pointer bg-[#8259fd] text-white rounded-md flex justify-center items-center font-semibold space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21 13h-8v8h-2v-8H3v-2h8V3h2v8h8z"/></svg>
        Ajouter
    </div>

</div>


<div class="w-full md:w-[98%]   text-black overflow-auto ">

    <table class="w-[750px] md:w-full rounded-md overflow-hidden">
        <tr class='w-full h-10  bg-white   rounded-md'>
        <td class="w-[10%]  pl-4">No</td>
        <td class="w-[15%]     ">Nom</td>
        <td class="w-[15%]     ">Prénom</td>
        <td class="w-[10%]    ">Sexe</td>
        <td class="w-[10%]    ">Matricule</td>
        <td class="w-[15%]    ">Numéro</td>
        <td class="w-[10%]    ">Type</td>
        <td class="w-[15%]    ">Date </td>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="IdUserTable" data="<?php echo e($user->id); ?>" class='text-[14px] w-full h-10 cursor-pointer  bg-white even:bg-gray-100    rounded-md'>
            <td class="w-[10%]  pl-4 "><?php echo e($key+1); ?></td>
            <td class="w-[15%]  "><?php echo e($user->nom); ?></td>
            <td class="w-[15%]  "><?php echo e($user->prenom); ?></td>
            <td class="w-[10%]  "><?php echo e($user->sexe); ?></td>
            <td class="w-[10%]  "><?php echo e($user->Matricule); ?></td>
            <td class="w-[15%]  ">+257 <?php echo e($user->telephone); ?></td>
            <td class="w-[10%]  "><?php echo e($user->type); ?></td>
            <td class="w-[15%]  "><?php echo e($user->created_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        
    </table>
</div>
</div>
<?php else: ?>
<div  class="w-full h-[50vh] flex justify-center items-center text-[20px] ">
    Aucun Résultat
</div>   
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/client/partial/client.blade.php ENDPATH**/ ?>