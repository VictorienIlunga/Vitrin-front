<div class="w-full flex flex-col items-center">
<div class="w-[98%] flex flex-row  justify-between mt-3  ">
    <div class="w-[60%] h-32 bg-white rounded-md flex justify-center  items-center mt-3 md:mt-0 ">
        <div class="w-[90%] h-28 flex  justify-between items-center">

            <div class="w-[60%]">
                <div class="mt-2 text-gray-500 font-semibold">
                    Balance Actuelle
                </div>
                
                <div id="ShowSolde" class="text-[20px] md:text-[32px] font-semibold flex items-center space-x-2">
                    <div >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 576 512"><path fill="currentColor" d="M64 64C28.7 64 0 92.7 0 128v256c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64zm64 320H64v-64c35.3 0 64 28.7 64 64M64 192v-64h64c0 35.3-28.7 64-64 64m384 192c0-35.3 28.7-64 64-64v64zm64-192c-35.3 0-64-28.7-64-64h64zm-224-32a96 96 0 1 1 0 192a96 96 0 1 1 0-192"/></svg>
                    </div>

                    <div>
                        <?php echo e(number_format($montant, 2, '.', ' ')); ?>

                    </div>
                    
                </div>

            </div>


            <div class="w-[40%] h-auto flex flex-col items-center md:items-start space-y-2 mt-2 md:mt-0">
                <div onclick="ShowAddCapital()" class="w-11/12 md:w-[80%] cursor-pointer  h-10 bg-white rounded-md border border-[#8259fd] text-[#8259fd] flex justify-start items-center space-x-1 pl-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " viewBox="0 0 16 16"><path fill="currentColor" d="m16 14l-3 2v-1H8.25l2-2H13v-1zM0 2l3-2v1h4.75l-2 2H3v1zm9.74-2L0 9.74L6.26 16L16 6.26zM1.39 9.74l8.35-8.35l4.87 4.87l-8.35 8.35z"/><path fill="currentColor" d="m4.17 9.74l-.7.7l2.09 2.09l.7-.7l.74.69l2.74-2.78a2.461 2.461 0 0 1-3.48-3.48L3.48 9z"/><path fill="currentColor" d="m12.52 5.57l-2.09-2.09l-.7.7l-.73-.7l-2.74 2.78a2.461 2.461 0 0 1 3.48 3.48L12.52 7l-.7-.7z"/></svg>
                    </div>
                    <div>
                        Opération
                    </div>
                </div>
    
                <a href="<?php echo e(route('register')); ?>"  class="w-11/12 md:w-[80%]  h-10  rounded-md border bg-[#8259fd] text-white flex justify-start items-center space-x-1 pl-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
                    </div>
                    <div>
                        Ajouter un membre
                    </div>
                </a>
    
            </div>


        </div>

       

    </div>


    <div class="w-[38%]  h-32 bg-white rounded-md flex flex-col items-center   mt-3 md:mt-0 ">
        <div class="w-[80%] mt-2 text-black font-semibold flex items-center justify-between">
            <div>Membre</div>
            <div class="text-[#8259fd] font-bold"><?php echo e($user->count()); ?></div>
        </div>
        <div class="w-[80%] h- divide divide-y">
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center justify-between h-10">
                <div><?php echo e($item->name); ?></div>
                <div><?php echo e(round(App\Http\Controllers\CapitalController::pourcent($item->capital,$montant),2)); ?>%</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    

    </div>

    <div class="w-[98%] flex flex-row  justify-between mt-3  ">
        <?php echo $__env->make('capital.partial.crud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php echo $__env->make('capital.partial.capital', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    function ShowAddCapital(){
       $('#sectionSend').toggleClass('hidden') 
       $("#body").toggleClass('overflow-hidden')
    }

    $('div#typeAction').click(function(){
        $('#numberAccountAnimation').children().eq(0).addClass('hidden') 
        $('#numberAccountAnimation').children().eq(1).addClass('hidden')
        $('#showProfilsender').children().eq(0).removeClass('hidden')
        $('#showProfilsender').children().eq(1).addClass('hidden')
        $('#numberAccount').val("")
        $('div#typeAction').each(function(){
            if ($(this).hasClass('bg-white')) {
                $(this).removeClass('bg-white')
            } 
        })
        if ($(this).hasClass('bg-white')) {
        return 
        } else {
            if ($(this).attr('data')=="Out") {
                $('#selectTypeCompte').parent().addClass('hidden')
                $('#layoutSectionSend').html("Retirer de l'argent")
                $('#labelCompte').html('Code agent')
                $('#numberAccount').attr('placeholder','Entrer le code agent')
                lengthNumberAccount=6
            } else if($(this).attr('data')=="In"){
                $('#selectTypeCompte').parent().removeClass('hidden')
                $('#layoutSectionSend').html($(this).attr('data')+" de l'argent")
                $('#labelCompte').html("Numéro de compte du bénéficiaire")
                $('#numberAccount').attr('placeholder','Entrer le numéro du compte bénéficiaire')
                lengthNumberAccount=8
            }
            $(this).addClass('bg-white')
            $('#typeOperation').val($(this).attr('data'))
        }
    })

    $('#senderFormSubmit').click(function(){
        $('#senderForm').submit()
    })
        
    

    var check=0
    $('#senderForm').on('submit',function(e){
        e.preventDefault()
        senderFormSubmitAnimation()
        var formData = new FormData(this);
        $.ajax({
            type:'post',
            url:'<?php echo e(route("OperationCapital")); ?>',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                senderFormSubmitAnimation()
                if(response.result=='add'){
                    onglet('Capital')
                }else if(response.result=='code'){
                    $('#password').parent().addClass('border')
                    $('#password').parent().addClass('border-red-500')
                    $('#password').parent().addClass('error-div')
                    setTimeout(() => {
                        $('#password').parent().removeClass('border')
                        $('#password').parent().removeClass('border-red-500')
                        $('#password').parent().removeClass('error-div')  
                    }, 300);
                    check++
                }
                if(check==3){
                    $('#logoutCheck').submit()
                }
            },

            })
            })
    

    function senderFormSubmitAnimation(){
        $('#senderFormSubmit').children().each(function(){
                $(this).toggleClass('hidden')
        })
    }
</script>

<?php /**PATH C:\xampp\htdocs\octogone finance\resources\views/capital/capital.blade.php ENDPATH**/ ?>