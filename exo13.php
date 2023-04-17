<h1>Exercice13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>
<p>Les notes obtenues par l’élève sont: (10 12 8 19 3 16 11 13 9)</p>

<?php 

 $sum = 10 + 12 + 8 + 19 + 3 + 16 + 11 + 13 + 9; //Nombers
 $frequency = 9; //quantite de nombres

 $average = $sum/$frequency; // nombres/quantite

 $format_number = number_format($average, 2); // afficher le numero avec 2 décimales.

 echo "Sa moyenne générale est donc de: ". $format_number; //affichage  

?>