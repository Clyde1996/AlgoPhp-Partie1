<h1>Exercice6</h1>

<p>Prix unitaire de l’article: 9.99 €
    Quantité: 5
    Taux de TVA: 0.2
    Le montant de la facture à régler est de : 59.94 €</p>

<?php
// DECLARATION DE VARIABLES
$Pu = 9.99;

$Quantite = 5;

$tauxTva = 0.2;

$totalHt = $Pu * $Quantite;

$tva = $totalHt + $Pu;

// AFFICHAGE
echo "Prix Unitaire " . " : " . $Pu . "€ <br/>";

echo "Quantité" . " : ". $Quantite . "<br/>";

echo "Taux de TVA" . " : ". $tauxTva . "<br/>";

echo "Le montant de la facture à régler est de" ." : ". $tva . "€<br/>";

?>                                   