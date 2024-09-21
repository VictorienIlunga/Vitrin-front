<div id="sectionRdv" class="hidden w-screen h-screen overflow-auto md:pt-1 flex justify-center items-center md:pb-0 bg-neutral-900/80 fixed top-0 left-0 z-50 backdrop-blur-sm">
    <div id="contentSectionRdv" class="w-[98%] md:w-[40%] pb-6 overflow-auto md:border   bg-white   rounded-md flex flex-col  items-center" >
        <div class="w-11/12  h-[10vh] flex justify-between items-center ">
            <div class="text-[18px] md:text-[25px] font-semibold">Prendre Rendez-vous</div>
            <div onclick="prendreRdv('close')" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8 cursor-pointer" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72a.75.75 0 0 0-1.06-1.06L8 6.94z" clip-rule="evenodd"></path></svg>
            </div>
        </div>
        

        <div id="addcategory" class=" w-11/12 mb-3 flex flex-col items-center">
             <form id="AvisForm" class="w-full" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="RLFO2T3v4i2iqvEUrbiNOfLSZWGTzk5oGPrWdqVn">                <input class="hidden" type="file" accept="image/*" name="photo" id="photo">
                <fieldset class="space-y-3">
                    <div class="flex  gap-y-3 flex-row gap-x-3">
                        <div id="imageUserAvis" class="w-[30%] h-auto flex  flex-col justify-center items-center cursor-pointer">
                            <div class="w-20 h-20  flex justify-center items-center rounded-full border border-gray-600 bg-white hover:bg-gray-50/80">
                                <img id="photo-img" src="" class="hidden w-full h-full rounded-full object-cover">
                                <svg id="svg-img" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 48 48"><path fill="gray" d="M16.8 9.186A4.25 4.25 0 0 1 20.515 7h6.97A4.25 4.25 0 0 1 31.2 9.186l1.286 2.314h3.764A5.75 5.75 0 0 1 42 17.25v6.794A12.94 12.94 0 0 0 35 22c-1.181 0-2.326.158-3.414.453a8 8 0 1 0-9.4 10.34a13.085 13.085 0 0 0 .81 7.207H11.75A5.75 5.75 0 0 1 6 34.25v-17a5.75 5.75 0 0 1 5.75-5.75h3.764L16.8 9.186ZM24 19.5a5.5 5.5 0 0 0-1.155 10.879a13.045 13.045 0 0 1 6.4-7.039A5.503 5.503 0 0 0 24 19.5ZM35 46c6.075 0 11-4.925 11-11s-4.925-11-11-11s-11 4.925-11 11s4.925 11 11 11Zm0-18a1 1 0 0 1 1 1v5h5a1 1 0 1 1 0 2h-5v5a1 1 0 1 1-2 0v-5h-5a1 1 0 1 1 0-2h5v-5a1 1 0 0 1 1-1Z"></path></svg>  
                            </div>
                        </div>

                        <div class="w-[70%]">
                            <div class="space-y-2 w-full">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Prénom *</label>
                                <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Prénom *" type="text" required="" name="prenom">
                            </div>
                            <div class="space-y-2 w-full">
                                <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Nom *</label>
                                <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Nom *" type="text" required="" name="nom">
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="flex  gap-y-3 flex-row gap-x-3">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Prénom *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Email *" type="email" required="" name="email">
                        </div>
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Télephone *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Téléphone *" type="text" required="" name="telephone">
                        </div>
                    </div>

                    <div class="flex  gap-y-3 flex-row gap-x-3">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Entreprise *</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Entreprise *" type="text" required="" name="entreprise">
                        </div>
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Poste*</label>
                            <input class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Poste *" type="text" required="" name="poste">
                        </div>
                    </div>


                    <div class="flex flex-col gap-y-3 ">
                        <div class="space-y-2 w-full">
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only" for=":r4:-form-item">Message *</label>
                            <textarea class="flex  w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Message *" type="text" required="" name="message" id="message" cols="30" rows="4" maxlength="253"></textarea>
                        </div>
                    </div>

                    
    
                    <div class="space-y-2">
                        <div class="flex gap-x-2">
                            
                            <input aria-hidden="true" tabindex="-1" type="checkbox" value="on" required="" checked="" class="flex  rounded-md border border-slate-200 bg-white  text-base ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-sm placeholder:text-slate-500 focus:border-octogone-600/50 focus-visible:outline-none focus-visible:ring-0 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50 ">
                            <p class="text-slate-500 dark:text-slate-400 block text-xs">En cochant cette case, vous acceptez que vos données personnelles soient utilisées pour vous recontacter dans le cadre de votre demande. Aucun autre traitement ne sera effectué avec ces informations.</p>
                        </div>
                    </div>
                    <div id="RdvSubmit" class="flex flex-col justify-end">
                        <button class="w-full flex justify-center items-center ring-none transition-200 focus-visible:ring-none space-x-2 text-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40  px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                            Prendre
                        </button>
                        <div class="hidden w-full flex justify-center items-center ring-none transition-200 focus-visible:ring-none space-x-2 text-center bg-gray-800 hover:opacity-90 shadow-light hover:shadow-neutral-900/40  px-5  py-2 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" viewBox="0 0 24 24"><circle cx="4" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale0" attributeName="r" begin="0;svgSpinners3DotsScale1.end-0.25s" dur="0.75s" values="3;.2;3"></animate></circle><circle cx="12" cy="12" r="3" fill="currentColor"><animate attributeName="r" begin="svgSpinners3DotsScale0.end-0.6s" dur="0.75s" values="3;.2;3"></animate></circle><circle cx="20" cy="12" r="3" fill="currentColor"><animate id="svgSpinners3DotsScale1" attributeName="r" begin="svgSpinners3DotsScale0.end-0.45s" dur="0.75s" values="3;.2;3"></animate></circle></svg>
                        </div>
                        <div class="hidden w-full flex justify-center items-center ring-none transition-200 focus-visible:ring-none space-x-2 text-center bg-green-500 hover:opacity-90 shadow-light hover:shadow-neutral-900/40  px-5  py-2.5 font-semibold md:text-sm text-xs text-white hover:-translate-y-0.5   transform will-change-transform cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 1200 1200"><path fill="currentColor" d="m1004.237 99.152l-611.44 611.441l-198.305-198.305L0 706.779l198.305 198.306l195.762 195.763L588.56 906.355L1200 294.916z"></path></svg>
                        </div>
                    </div>
                </fieldset>
            </form>
            </div>
        

    </div>
</div>
