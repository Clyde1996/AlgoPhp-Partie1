<h1>Exercice4</h1>
<p>La phrase «Engage le jeu que je le gagne» est palindrome</p>

<?php
// DECLARATION DE VARIABLES

  $chaineDeCaracteres = "Engage le jeu que je le gagne";


  // FONCTIONS CHAINES DE CARACTERES
  
 $chaineDeCaracteres = strtolower($chaineDeCaracteres); // texte miniscule
 $chaineDeCaracteres2 = strrev($chaineDeCaracteres); // texte anverse
 $chaineDeCaracteres3 = preg_replace("/\s+/","",$chaineDeCaracteres); // espace supprime
 $chaineDeCaracteres4 = str_replace($chaineDeCaracteres, $chaineDeCaracteres2, $chaineDeCaracteres3); // les functions sur texte
// AFFICHAGE

echo $chaineDeCaracteres4."<br>";

?>