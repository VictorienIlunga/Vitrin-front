<div class="w-full flex flex-col items-center">
<div class="w-full flex flex-col md:flex-row items-center md:justify-evenly">

    <div class="md:w-52 lg:w-[25%] w-80 m-2   h-32 bg-white shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)]  rounded-md flex justify-center items-center">
        <div class="w-[90%] h-24 flex ">
       <div class="w-[70%] flex flex-col   text-black ">
          <div class="text-gray-500">CLIENT</div>
          <div class="font-bold"><?php echo e($client); ?></div>
          <div class="text-[13px]">
            <?php echo e(App\Http\Controllers\statiController::pourcentageclient()); ?>

             par rapport au mois derniers</div>
           
         </div>

        <div class="w-[30%] flex justify-center ">
          <div class="w-10 h-10 rounded-full flex justify-center items-center text-white bg-gradient-to-tl from-blue-500 to-violet-500">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
           </svg>            
          </div>
        </div>
      </div>
     </div>

     <div class="md:w-52 lg:w-[25%] w-80 m-2   h-32 bg-white shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)]  rounded-md flex justify-center items-center">
       <div class="w-[90%] h-24 flex ">
      <div class="w-[70%] flex flex-col   text-black ">
         <div class="text-gray-500">CREDIT</div>
         <div class="font-bold"><?php echo e($credit); ?></div>
         <div class="text-[13px]">
        <?php echo e(App\Http\Controllers\statiController::pourcentagcredit()); ?>

            par rapport au mois derniers</div>
          
        </div>

       <div class="w-[30%] flex justify-center ">
         <div class="w-10 h-10 rounded-full flex justify-center items-center text-white bg-gradient-to-tl from-red-600 to-orange-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M6.75 9a3.25 3.25 0 1 0 0-6.5a3.25 3.25 0 0 0 0 6.5M9 12.5a2.5 2.5 0 0 1 1.707-2.371A1.994 1.994 0 0 0 10 10H3.5a2 2 0 0 0-2 2s0 4 5.25 4c.897 0 1.64-.117 2.257-.31A2.534 2.534 0 0 1 9 15.5zm8-6a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m-7 6a1.5 1.5 0 0 1 1.5-1.5h6a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5zm1 0v1a1.5 1.5 0 0 0 1.5-1.5h-1a.5.5 0 0 1-.5.5m7 1v-1a.5.5 0 0 1-.5-.5h-1a1.5 1.5 0 0 0 1.5 1.5M16.5 16h1a.5.5 0 0 1 .5-.5v-1a1.5 1.5 0 0 0-1.5 1.5M11 14.5v1a.5.5 0 0 1 .5.5h1a1.5 1.5 0 0 0-1.5-1.5m3.5 1a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3"/></svg>
          
         </div>
       </div>
     </div>
    </div>

    <div class="md:w-52 lg:w-[25%] w-80 m-2   h-32 bg-white shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)]  rounded-md flex justify-center items-center">
     <div class="w-[90%] h-24 flex ">
    <div class="w-[70%] flex flex-col   text-black ">
       <div class="text-gray-500">INTERET</div>
       <div class="font-bold"><?php echo e(number_format($interet, 2, '.', ' ')); ?>Fbu</div>
       <div class="text-[13px]">
        <?php echo e(App\Http\Controllers\statiController::pourcentageinteret()); ?>

          par rapport au mois derniers</div>
        
      </div>

     <div class="w-[30%] flex justify-center ">
       <div class="w-10 h-10 rounded-full flex justify-center items-center text-white bg-gradient-to-tl from-emerald-500 to-teal-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 10V8a2 2 0 0 1 2-2h2m-4 4c1.333 0 4-.8 4-4m-4 4v4m18-4V8a2 2 0 0 0-2-2h-2m4 4c-1.333 0-4-.8-4-4m4 4v2M7 6h10M3 14v2a2 2 0 0 0 2 2h2m-4-4c1.333 0 4 .8 4 4m0 0h4"/><circle cx="12" cy="12" r="2"/><path d="M18 15v3m0 3v-3m0 0h-3m3 0h3"/></g></svg>
       </div>
     </div>
   </div>
  </div>

  <div class="md:w-52 lg:w-[25%] w-80 m-2   h-32 bg-white shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)]  rounded-md flex justify-center items-center">
   <div class="w-[90%] h-24 flex ">
  <div class="w-[70%] flex flex-col   text-black ">
     <div class="text-gray-500">CAPITAL</div>
     <div class="font-bold"><?php echo e(number_format($capital, 2, '.', ' ')); ?>Fbu</div>
     <div class="text-[13px]">
      <?php echo e(App\Http\Controllers\statiController::pourcentageCapital()); ?>

        par rapport au mois derniers</div>
      
    </div>

   <div class="w-[30%] flex justify-center ">
     <div class="w-10 h-10 rounded-full flex justify-center items-center text-white bg-gradient-to-tl from-orange-600 to-yellow-600">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
         <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
       </svg>        
     </div>
   </div>
 </div>
</div>

    

     
    </div>

<?php if($showCredit->count()>0): ?>
  <div class="w-[98%] h-auto flex flex-col bg-white justify-center items-center rounded-md my-2  pt-2">
    <div class="w-[98%] my-2 text-black font-semibold">
        Crédit
    </div>
    <?php echo $__env->make('home.partial.credit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div> 
<?php else: ?>
  <div class="w-[98%] flex flex-col-reverse md:flex-row justify-between my-2 ">
    <div class="w-full  h-auto  bg-white rounded-md flex flex-col items-center pb-4  ">
        <div class="w-full h-60 md:h-[43vh] flex flex-col items-center justify-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 24 24"><path fill="gray" d="M12 2a10.017 10.017 0 0 0-7 2.877V3a1 1 0 0 0-2 0v4.5a1 1 0 0 0 1 1h4.5a1 1 0 0 0 0-2H6.218A7.992 7.992 0 1 1 12 20a1 1 0 0 0 0 2a10 10 0 0 0 0-20Z"/><path fill="gray" d="M14 13h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2Z"/><path fill="gray" d="M12 4a8.008 8.008 0 0 0-5.782 2.5H8.5a1 1 0 0 1 0 2H4a.989.989 0 0 1-.976-.88A9.977 9.977 0 0 0 12 22a1 1 0 0 1 0-2a8 8 0 0 0 0-16Zm2 9h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2Z" opacity=".5"/></svg>
            </div>
            <div class="text-[13px] md:text-[18px] text-gray-500 mt-4">
                Aucun crédit a été octroyer 
            </div>
        </div> 

    </div>
  </div>
<?php endif; ?>
     
    

    
      <div class="w-[98%] h-auto max-h-80 bg-white  rounded-md shadow-[1px_1px_1px_1px_rgba(0,0,0,0.1)] flex justify-evenly items-center flex-col   ">
        <div class="w-[98%] my-2 text-black font-semibold">
          Evolution dans le temps
          
        </div>
        <div class=" w-full flex  justify-center  h-full ">
          
            <div class="w-[98%] flex flex-col">
      
              <div class="w-full h-10 flex  text-black   ">
                <div class="w-[10%] h-full flex  items-center justify-start">Periode </div>
                <div class="w-[15%] h-full flex  items-center justify-center ">Clients</div>
                <div class="w-[15%] h-full flex  items-center justify-center  ">crédits</div>
                <div class="w-[25%] h-full flex  items-center justify-center">interets</div>
                <div class="w-[25%] h-full flex  items-center justify-center">Capital</div>
                <div class="w-[10%] h-full flex  items-center justify-center">%</div>
              </div>
              <?php echo App\Http\Controllers\statiController::evolution();?>
        
          </div>
          </div>
    </div>
</div>


<script type="text/javascript">

function compte_a_rebours()

{

    var  divcompte_a_rebours= document.querySelectorAll("#compte_a_rebours");
    for (let a = 0; a < divcompte_a_rebours.length; a++) {
      const compte_a_rebours = divcompte_a_rebours[a];
      
    
    var date_brut=compte_a_rebours.getAttribute('data')

    var date_actuelle = new Date();

    var date_evenement = new Date(date_brut);

    var total_secondes = (date_evenement - date_actuelle) / 1000;


    var prefixe = "";



    if (total_secondes > 0)

    {

        var jours = Math.floor(total_secondes / (60 * 60 * 24));

        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));

        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);

        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));


        var et = "et";

        var mot_jour = "jours,";

        var mot_heure = "h,";

        var mot_minute = "min,";

        var mot_seconde = "sec";


        if (jours == 0){
            jours = '';
            mot_jour = '';
        }else if (jours == 1){
            mot_jour = "jours,";
        }

        if (heures == 0){
            heures = '';
            mot_heure = '';
          }else if (heures == 1){
            mot_heure = "h,";
          }


        if (minutes == 0){
            minutes = '';
            mot_minute = '';
        }else if (minutes == 1)
        {
            mot_minute = "min,";
        }


        if (secondes == 0){
            secondes = '';
            mot_seconde = '';
            et = '';
        }else if (secondes == 1){
            mot_seconde = "sec";
        }


        if (minutes == 0 && heures == 0 && jours == 0){
            et = "";
        }
        compte_a_rebours.innerHTML =  jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    }

    else
    {

        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
        compte_a_rebours.classList.add('bg-red-500')

    }
  }
    var actualisation = setTimeout("compte_a_rebours();", 1000);
}

compte_a_rebours();

</script>
<?php /**PATH C:\xampp\htdocs\Bussiness\resources\views/home/home.blade.php ENDPATH**/ ?>