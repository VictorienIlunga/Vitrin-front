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
        @foreach ($showCredit as $key=>$credit)
        <tr onclick="confirmationPayement({{$credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0]}},{{$credit->id}})" class='text-[14px] w-full h-10 cursor-pointer  bg-white even:bg-gray-100    rounded-md'>
            <td class="w-[5%]  pl-2 ">{{$key+1}}</td>
            <td class="w-[15%]    "> {{$credit->client->nom}} {{$credit->client->prenom }}</td>
            <td class="w-[10%]   "> {{$credit->client->Matricule}}</td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2">
                    <div>
                        {{number_format($credit->montant, 2, '.', ' ')}}
                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2">
                    <div>
                        {{number_format(App\Http\Controllers\CreditController::interet($credit->id)[0], 2, '.', ' ')}}
                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[15%]  ">
                <div class="w-full flex items-center space-x-2 font-bold">
                    <div>
                        {{number_format($credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0], 2, '.', ' ')}}
                    </div>
                    <div>FBU</div>
                </div>
            </td>
            <td class="w-[20%]  h-full">
                <div id="compte_a_rebours" data="{{$credit->DateFin}}" class="w-[98%] h-full py-1 bg-[#8259fd] text-white flex justify-center items-center rounded-md"></div>
            </td>
        </tr>
        @endforeach
    
        
    </table>
</div>