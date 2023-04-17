<h1>Exercice12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>


<?php

$prenom = array(
    "Mickael" => "FR",
    "Virgile" => "ES",
    "Marie-Claire" => "EN",
);

function sayhello($langue, $prenom) {
    switch($langue){ 
        case "Fr" : echo "Salut " .$prenom. "</br>" ; // if
        break;
        case "ES" : echo "Hola "  .$prenom. "</br>"; //elseif
        break;
        case "EN" : echo "Hello " .$prenom. "</br>"; //elseif
        break; 
        default : echo "Choisis une autre langue! "; //else
    }
}

foreach ($prenom as $key => $value) {
    sayhello("ES", $key);
}
?>