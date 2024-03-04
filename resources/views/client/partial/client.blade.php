@if ($users->count()!=0)

<div class="w-[98%] flex items-center justify-between my-4">
    <div class="text-[20px] text-black ">Résultat : {{$users->count()}}</div>


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
        @foreach ($users as $key=>$user)
        <tr id="IdUserTable" data="{{$user->id}}" class='text-[14px] w-full h-10 cursor-pointer  bg-white even:bg-gray-100    rounded-md'>
            <td class="w-[10%]  pl-4 ">{{$key+1}}</td>
            <td class="w-[15%]  ">{{$user->nom}}</td>
            <td class="w-[15%]  ">{{$user->prenom}}</td>
            <td class="w-[10%]  ">{{$user->sexe}}</td>
            <td class="w-[10%]  ">{{$user->Matricule}}</td>
            <td class="w-[15%]  ">+257 {{$user->telephone}}</td>
            <td class="w-[10%]  ">{{$user->type}}</td>
            <td class="w-[15%]  ">{{$user->created_at}}</td>
        </tr>
        @endforeach
    
        
    </table>
</div>
</div>
@else
<div  class="w-full h-[50vh] flex justify-center items-center text-[20px] ">
    Aucun Résultat
</div>   
@endif