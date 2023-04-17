<h1>Exercice5</h1>
<p>Montant en francs: 100 francs = 15.24 €</p>

<?php

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "Montant en francs";
$francs = 100;
$euro = 0.1524;

// FONCTIONS CHAINES DE CARACTERES
$chaineDeCaracteres = "Montant en francs : "; //txt
$multiplication = $francs * $euro;            // multiplication
$multiplicationRound = round($multiplication, 2); // multiplication arrondit
$ensembleDeText = $chaineDeCaracteres . $francs . " francs = " . $multiplicationRound . " €"; // Ensmble Du Text

// AFFICHAGE
echo  $ensembleDeText."<br/>";

?>