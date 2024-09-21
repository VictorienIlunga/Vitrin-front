<div id="sectionshare" class="hidden w-screen h-[100vh] backdrop-blur-sm md:pt-1 flex justify-center items-center  bg-black/60 fixed top-0 left-0 z-[60]">
    <div id="contentSectionShare" class="w-[98%] mb-1 h-0 flex flex-col justify-center rounded-md shadow-md overflow-hidden md:w-96 relative bg-white  ">
        <div id="closeshare" class="cursor-pointer self-stretch flex p-2 items-center justify-between px-3 flex-shrink-0  bg-gray-100 ">
            <div class="text-[18px] text-black  font-semibold">
            Partager cette page
            </div>
            <div onclick="share(0)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-red-500 h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

         </div>


        <div class="w-full flex justify-center my-4">
        <div class="w-72 h-full overflow-auto flex flex-wrap justify-between items-center text-black gap-5  ">

            <div id="url_click" class="cursor-pointer w-32 h-32 bg-white border border-gray-800 flex  justify-center items-center text-center rounded-md    whitespace-nowrap">
                <div id="url_copy" class="flex flex-col justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 17H7q-2.075 0-3.538-1.463T2 12q0-2.075 1.463-3.538T7 7h4v2H7q-1.25 0-2.125.875T4 12q0 1.25.875 2.125T7 15h4v2Zm-3-4v-2h8v2H8Zm5 4v-2h4q1.25 0 2.125-.875T20 12q0-1.25-.875-2.125T17 9h-4V7h4q2.075 0 3.538 1.463T22 12q0 2.075-1.463 3.538T17 17h-4Z"></path></svg>  
                <div>Copier le lien </div>       

                </div> 

                <div id="confirm" class="hidden text-green-500 font-bold">
                <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-1 w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                </div>
                </div>
                <div id="urls" class="hidden">octogone-digi.com/site-internet</div>
            </div>

            <a class="w-32 h-32 bg-gray-50/80  border border-gray-800 rounded-md flex flex-col space-y-2 justify-center items-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=octogone-digi.com/site-internet">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path></svg>Facebook
            </a>

            <a class="w-32 h-32 bg-gray-50/80  border border-gray-800 rounded-md flex flex-col space-y-2 justify-center items-center " href="whatsapp://send?text=octogone-digi.com/site-internet"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z"></path></svg>
                Whatsapp
            </a>

            <a class="w-32 h-32 bg-gray-50/80 border border-gray-800 rounded-md flex flex-col space-y-2 justify-center items-center" href="https://twitter.com/intent/tweet?url=octogone-digi.com/site-internet">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"></path></svg>
                Twitter
            </a>

            <a class="w-72 h-32 bg-gray-50/80 border border-gray-800 rounded-md flex flex-col space-y-2  justify-center items-center ml-1 gap-1 whitespace-nowrap" href="mailto:?body=octogone-digi.com/site-internet">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z"></path></svg>
                E-mail
            </a>


        </div>

        </div>
    </div>
</div>
<script>
    //share
    var url_click=document.querySelector('#url_click')
        var url_copy=document.querySelector('#url_copy')
        var confirm=document.querySelector('#confirm')
        var url=document.querySelector('#urls').innerHTML
    
        url_click.addEventListener('click',function () {
        // url.select()
        var successfull=document.execCommand('copy')
        navigator.clipboard.writeText(url).then(function() {
        url_copy.classList.add('hidden')
        confirm.classList.remove('hidden')
        setInterval(() => {
            url_copy.classList.remove('hidden')
            confirm.classList.add('hidden')
        }, 2000);
        })
    
        }) 
        function share(id){
            if (id==1) {
            $('#sectionshare').removeClass('hidden')
            $("body").addClass('overflow-hidden')
            $('#contentSectionShare').animate({height: '500px'}, 600);
            } else {
            $('#contentSectionShare').animate({height: '0px'}, 600);
            setTimeout(() => {
                $('#sectionshare').addClass('hidden')
                $("body").removeClass('overflow-hidden')
            }, 600);
            }  
            }
    </script>        
    </div>