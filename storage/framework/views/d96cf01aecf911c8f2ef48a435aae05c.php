<?php echo $__env->make('client.partial.addClient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="w-full h-auto flex flex-col items-center mt-4">
      
    <div class="  bg-white  rounded-md w-[98%] h-auto flex shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)] transition-all delay-200  ease-in-out flex-col mb-4 items-center">
        <form id="UserSearch" class="flex w-full h-10"  method="get">
            <input  class="bg-white   text-black w-[80%]  rounded-tl-md rounded-bl-md border-none" type="search" name="search" placeholder="Rechercher plus vite" id="InputSearchUser"  >
            <button  class="bg-[#8259fd]  text-white w-[20%] flex justify-center items-center rounded-tr-md rounded-br-md border-none " type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
            </button>
        </form>
        </div>
<div id="DefaultUserSearch" class="w-full flex flex-col items-center">
<div class="w-[98%] flex items-center justify-between my-4">
        <div class="text-[20px] text-black ">Clients : <?php echo e($users->total()); ?></div>


    <div onclick="addUser()" class="w-[20%] h-10 cursor-pointer bg-[#8259fd] text-white rounded-md flex justify-center items-center font-semibold space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21 13h-8v8h-2v-8H3v-2h8V3h2v8h8z"/></svg>
        Ajouter
    </div>

 </div>


 <div class="w-full md:w-[98%]   text-black overflow-auto mb-4">

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
<div id="ResultatUserSearch" class="w-full flex flex-col items-center">

</div>

<div id="waitSearchUser" class="w-full h-[50vh]    flex  justify-center items-center hidden" >
    <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32 text-[#8259fd]" viewBox="0 0 24 24"><circle cx="4" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale0" attributeName="r" begin="0;svgSpinners3DotsScale1.end-0.25s" dur="0.75s" values="3;.2;3"/></circle><circle cx="12" cy="12" r="3" fill="currentColor"><animate attributeName="r" begin="svgSpinners3DotsScale0.end-0.6s" dur="0.75s" values="3;.2;3"/></circle><circle cx="20" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale1" attributeName="r" begin="svgSpinners3DotsScale0.end-0.45s" dur="0.75s" values="3;.2;3"/></circle></svg>
</div>


</div>
</div>
 <script>
    $('#UserSearch').submit(function(e){
        e.preventDefault()
        if ($('#InputSearchUser').val()!=0) {
            $('#DefaultUserSearch').addClass('hidden')
            $('#waitSearchUser').removeClass('hidden')
            $('#ResultatUserSearch').addClass('hidden')
            $.ajax({
                method:'get',
                url:'<?php echo e(route("SearchClient")); ?>',
                data:{
                    'search':$('#InputSearchUser').val()
                },
                success:function(result){
                    $('#waitSearchUser').addClass('hidden')
                    $('#ResultatUserSearch').removeClass('hidden')
                    $('#ResultatUserSearch').html(result)
                }
            })
        }else{
            $('#DefaultUserSearch').removeClass('hidden')
            $('#ResultatUserSearch').addClass('hidden')
            $('#UserSearch').addClass('error-div')
            setTimeout(() => {
                $('#UserSearch').removeClass('error-div')
            }, 400); 
        }

    })

    $(document).on('click','#IdUserTable',function(){
        var id=$(this).attr('data')
        showPorfiles(id,'profile')
    }
    )

    function addUser(){
        $('#sectionAddUser').toggleClass('hidden')
        $("#body").toggleClass('overflow-hidden')
    }
    function reisterAnimationButton(){
        $('#register').children().each(function(){
            $(this).toggleClass('hidden')
        })
    }


    $('#registerForm').on('submit',function(e){
        e.preventDefault()
        var formData = new FormData(this);
        reisterAnimationButton()
        $('#StatutAddClient').children().each(function(params) {
            $(this).addClass('hidden')
        })
        $.ajax({
        type:'POST',
        url: "<?php echo e(route('SavedClient')); ?>",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success:function(data){
            if(data.response==true){
                $('#StatutAddClient').children().eq(0).removeClass('hidden')
                setTimeout(() => {
                    onglet('Client') 
                }, 1000);
            }else if(data.response=='numero'){
                $('#telephone').parent().addClass('border-red-500')
                $('#telephone').parent().addClass('error-div')
                setTimeout(() => {
                    $('#telephone').parent().removeClass('border-red-500')
                    $('#telephone').parent().removeClass('error-div')
                }, 500); 
                reisterAnimationButton()
            }
            else{
                $('#StatutAddClient').children().eq(1).removeClass('hidden')
                reisterAnimationButton()
            }
        },
      });
    })
</script> <?php /**PATH C:\xampp\htdocs\octogone finance\resources\views/client/client.blade.php ENDPATH**/ ?>