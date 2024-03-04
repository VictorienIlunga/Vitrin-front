<div id="sectionnotification" class="hidden w-full h-screen md:pt-1 flex justify-end items-center  md:pb-0 bg-neutral-900/80 fixed top-0 z-50">
    <div class="w-full lg:w-[35%] md:w-[45%] h-[100vh]  p-4 pb-20 overflow-auto md:border   bg-white   md:rounded-s-xl flex flex-col  items-center">
     
       

    <div class="w-[95%] md:w-full h-auto flex justify-between items-center ">
        <div class="w-[80%] h-auto text-[23px] font-semibold text-stone-900 ">Centre de notifications</div>
        <div class="w-[20%] h-auto flex justify-end items-center">
          <svg id="vider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="cursor-pointer text-black w-6 h-6">
            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
          </svg>
          
          <div id="closenotification"  class="  cursor-pointer text-black    text-md w-8 h-8   flex justify-center items-center ">
          <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg> 
          </div> 
          <div id="attentevider" class="hidden mr-2">
            <x-load/>
          </div>

        
        </div>
    </div>

    <div  class="w-[95%] md:w-full min-h-[50vh]   mt-3 mb-20">
      <div id="attente" class="w-full h-auto flex flex-col gap-4 items-center ">
        <div >
        <x-load/>
        </div>
    </div>
        <div id="shownotif" class="w-full h-auto flex flex-col gap-4 items-center divide-y">
              
          </div>
        <div id="notfoundNotification" class=" w-80 md:w-full h-[40vh] flex justify-center items-center">
          <div class="w-auto h-auto  text-[20px] text-stone-900 ">Aucune nouvelle notification</div>
       </div>

      </div>

    </div></div>


<script>
        
function notification(){
    $('#attente').show()
    $('#notfoundNotification').addClass('hidden')
    $('#centre').hide()
     $('#count').hide()
     $('#shownotif').hide()
    $.ajax({
    url: "{{url('/shownotif')}}",
    method:'GET',
    datatype:'json',
     success: function(response){
   if (response.notif=='notfound') {
         $('#centre').hide()
         $('#attente').hide()
         $('#shownotif').hide()
         $('#notfoundNotification').removeClass('hidden')
       } else {
       $('#shownotif').show()
       $('#attente').hide()
       $('#centre').show()
       $('#vider').show()
       $('#attentevider').hide()
       $('#shownotif').html(response.notif);
     }
 
 }
});}

$('#vider').click(function (e) {
    $('#vider').hide()
    $('#attentevider').show()

    $.ajax({
    url:"{{url('/vider')}}",
    method:'GET',
    datatype:'json',
    success:function (response) {
   if (response) {
     $('#shownotif').hide()
     $('#attentevider').hide()
     notification()
     $('#centre').hide()
     $('#notfoundNotification').removeClass('hidden')
   }
 }
})})
countnotif()
function countnotif(){
    $.ajax({
    url:"{{url('/countnotif')}}",
    method:'GET',
    datatype:'json',
    success:function (response) {
    if (response.countnotif==0){
        $('div#countnotif').each(function(){
          $(this).hide()
        })
    } else {
        $('div#countnotif').each(function(){
          console.log(response.countnotif)
          $(this).html(response.countnotif)
          $(this).show()
        })

    }
    }
}) 
}


</script>