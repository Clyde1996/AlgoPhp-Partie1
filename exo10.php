<h1>Exercice10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<?php

// DECLARATION DE VARIABLES

$montantDu = 152; //Montant à payer
$montantPaye = 200; //Montant versé
$reste =  $montantPaye - $montantDu ; //Reste à payer
$nb10  = 0;
$nb5 = 0;
$np2 = 0;
$np1 = 0;

// combien de billets de 10 je dois rendre 
// tant que je peux rendre un billet de 10 (cad que le reste est > à 10 ) alors j'enlève 10 à au reste à rendre et je rajoute 1 au nb de billet de 10 que je rends.

while($reste >= 10){

    $reste = $reste - 10 ; //donner t
    // $reste -= 10;
    $nb10++;
}
if($reste>=5 ){

    $reste -= 5 ;
    $nb5++;
}
while($reste >= 2){

    $reste = $reste - 2 ;
    // $reste -= 10;
    $np2++;
}



echo $nb10 . " : ". "Billet/s de 10€" . " || ";
echo $nb5 . " : " .  "Billet/s de 5€" . " || ";
echo $np2 . " : " .  "Piece/s de 2€" . " || ";

echo $reste . " : " .  "Piece/s de 1€" . " || ";



// $dix = intdiv($rP, 10); // Diviser le 1nr avec le 2 nr

// echo $dix . "<br/>"; // afichacge

// $rP = $rP - ($dix * 10); // Diviser le 1nr avec le 2 nr

// echo $rP . "<br/>"; // afichacge

// $rP = intdiv($rp, 5);

// echo $rP . "<br/>";







?>