<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contrat de Prêt sur Gage</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background:white;

    margin: 20px;
    font-size: 14px;
    line-height: 1.5; 
    
}

.container {
    width: 600px;
    height: auto;
    padding: 20px;
   
}

.titre{
    width: 100%;
    height: auto;
    border: 1px solid black;
    padding: 8px;
}
.enfant{
    width: 100%;
    padding-left: 5%;
    padding-right: 5%;
}
.signature{
    width: 100%;
    display: inline;
    justify-content:space-between;
}
.signature div{
    width: 49%;
    height:200px;
    
}
.d11 {
  padding-bottom: 200px;
}


</style>
</head>
<body>
<div class="container">
    <div class="titre">
        <center><strong>Contrat de Prêt sur Gage</strong></center>
    </div>

    <p>ENTRE LES SOUSSIGNES :</p>
    <p>Monsieur {{Auth::user()->name}}</p>
    en son nom.
    <p>{{Auth::user()->Adresse}}</p>
    <p>{{Auth::user()->number}}</p>

    <p>
        Ci-après dénommé, « Le PRETEUR », D’une part,
    </p>
    <p>
        Et : <strong>{{$credit->client->nom}} {{$credit->client->prenom}}</strong>, résidant à {{$credit->client->adresse}},
        Dûment habilité(e) aux fins des présentes,
    </p>
    <p>
        Ci-après dénommé(e), « L’EMPRUNTEUR », D’autre part.
    </p>

    <p>Ensemble « Les PARTIES » et pris individuellement « La PARTIE ».</p>

    <p><strong>PREAMBULE :</strong><br/><br/>
        Le PRETEUR est une personne morale.
        L’EMPRUNTEUR est une personne morale({{$credit->client->type}})
      
        Par le présent contrat le PRETEUR met à disposition de l’EMPRUNTEUR une somme
        de <strong>{{number_format($credit->montant, 2, '.', ' ')}}Fbu</strong>,
        Ce dernier ayant préalablement signé un contrat de prêt avec le Bénéficiaire Final.<br/><br/>
        EN CONSEQUENCE IL A ETE AGREE ET CONVENU CE QUI SUIT : 
    </p>

    <p>
        <strong>ARTICLE 1 : MONTANT ET DUREE DU PRET</strong><br/><br/>
        Le PRETEUR accorde et consent à l’EMPRUNTEUR un prêt d’un montant de : <strong>{{number_format($credit->montant, 2, '.', ' ')}}Fbu</strong> Ledit prêt est d’une durée de {{App\Http\Controllers\CreditController::interet($credit->id)[2]}} jours</strong>.
    </p>

    
    <p>
        <strong>ARTICLE 2 : DATE DE DEBUT DU PRET ET DEBOURSEMENT DES FONDS</strong><br/><br/>
        La date de début du prêt est le {{$credit->created_at->format('d/m/Y')}}.
        La mise à disposition effective des fonds auprès de l’EMPRUNTEUR est immédiate.
        Par convention entre le PRETEUR et l’EMPRUNTEUR la date susmentionnée est la
        date de début du prêt.
    </p>

    <p>
        <strong>ARTICLE 3 : REMBOURSEMENT DU PRET</strong><br/><br/>
        <strong>
            3.1- Echéances de remboursement
        </strong><br/>
        L’EMPRUNTEUR remboursera le montant total du prêt, avec les intérêts y afférents ;<br/> soit <strong>{{number_format($credit->montant+App\Http\Controllers\CreditController::interet($credit->id)[0], 2, '.', ' ')}}Fbu</strong>,
        en une échéance au terme prévu du prêt le {{$credit->DateFin}}.
        Le présent prêt devra être remboursé même dans l’hypothèse où le Bénéficiaire Final
        serait défaillant pour rembourser son prêt. Signalons que le contrat est non renouvelable.
    </p>

    <p>
        <strong>3.2- Taux d’intérêt</strong><br/><br/>
        
        Le prêteur percevra une rémunération quotidienne sur le capital restant dû,
         équivalant à 1,5 % du montant emprunté. 
         Les intérêts sont calculés quotidiennement sur la base du capital restant dû à la fin de chaque journée,
          en considérant que chaque jour a une durée égale.
           Les intérêts accumulés seront versés en une seule fois à l'échéance du prêt,
            lors du remboursement du capital emprunté. Sur une période de {{App\Http\Controllers\CreditController::interet($credit->id)[2]}} jours, 
            le taux d’intérêt total serait calculé en multipliant le montant emprunté par le taux quotidien,
            puis en multipliant le résultat par le nombre de jours,ce qui correspond à <strong>{{App\Http\Controllers\CreditController::interet($credit->id)[1]}}%</strong>
    </p>

    <p>
        <strong>3.3- Frais relatifs à la mise en relation</strong><br/><br/>
        Aucun frais n’est dû à l'intermédiaire en Financement Participatif par le PRETEUR pour
        cette opération. 
    </p>

    <p>
        <strong>ARTICLE 4 : DECLARATIONS ET ENGAGEMENTS DE L’EMPRUNTEUR</strong><br/><br/>
        L’EMPRUNTEUR déclare, reconnaît et garantit que :<br/>
        - Il a été conseillé et informé des conséquences et des incidences de sa demande
        de financement et mis en garde sur son obligation de remboursement et sur
        l’impact que ce remboursement aura sur sa charge financière y compris celle de sa
        famille s’il est chef de ladite famille et subvient de ce fait à la majeure partie des
        besoins de celle-ci ;<br/>
        - Il a conclu un contrat de prêt productif d’intérêts avec le Bénéficiaire Final ;<br/>
        - Il n’existe pas de fait susceptible de constituer un cas d’exigibilité anticipée au sens
        du Contrat. Rembourser l’intégralité du prêt au terme prévu et selon le règlement
        des échéances fixé ci-dessus ;<br/>
        - Informer le PRETEUR de tous faits ou évènements qui seraient susceptibles de
        modifier le Contrat.<br/>
        - Ne pas céder, transmettre ou transférer à un tiers ses obligations issues du Contrat
        sans en avoir informé préalablement le PRETEUR et assurer ce dernier que ses
        obligations, et particulièrement le remboursement intégral du prêt et le paiement
        des intérêts, seraient entièrement honorées et respectées.
    </p>

    <p>
        <strong>ARTICLE 5: DECLARATIONS ET ENGAGEMENTS DU PRETEUR</strong><br/><br/>
        Le PRETEUR déclare, reconnaît et garantit que :<br/>
        - Il est majeur pour conclure le Contrat ;<br/>
        - Il a compris les termes du présent Contrat et a mesuré les conséquences de
        l’engagement attaché ;<br/>
        - Rien ne s’oppose à ce qu’il s’engage au présent Contrat ni ne l’en empêche ;<br/>
        - Il a connaissance que tout prêt comporte un risque de non remboursement.
    </p>

    <p>
        <strong>ARTICLE 6 : GARANTIES</strong><br/><br/>
        L’EMPRUNTEUR laisse comme gage <strong>{{$credit->gage}}</strong>

    Celui-ci sera rendu une fois le prêt remboursé avec les intérêts y afférents. En cas
    d’endommagement du gage le PRETEUR se chargera de la réparation ; et en cas de vol
    les PARTIES s’arrangeront pour trouver une solution raisonnable.

    </p>
    <p>
        N.B : Si le prêt n’est pas remboursé dans le délais requis, un taux d’intérêt de 2% du
        capital sera considéré par jour.
        Une fois l’EMPRUNTEUR se retrouve incapable de rembourser sa dette, le PRETEUR
        sera obligé de récupérer le montant dû au travers du gage.
    </p>

    <p>
        Fait  à bujumbura, le {{$credit->created_at->format('d/m/Y')}}  
    </p>

    <div class="d11">
        <p>
            L’EMPRUNTEUR: 
        </p>   
        <p><strong>{{$credit->client->nom}} {{$credit->client->prenom}}</strong></p>
        <p>Signature précédée de la Mention manuscrite : <br/>   
            « Lu et Approuvé, Bon pour Commande » 
        </p>
        <p>
            Signature : 
        </p> 
    </div>



</div>

</body>
</html>
