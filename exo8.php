<h1>Exercice8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>
<p>Table de 8</p>
<p>1 x 8 = 8</p>
<p>2 x 8 = 16</p>
<p>3 x 8 = 24 ...</p>

<?php
// DECLARATION DE VARIABLES

$nombre = 8;
$prod = 1;

for($i =1 ; $i<=10; $i++){
    $prod = $nombre*$i;
    echo $i . ' x ' . $nombre . ' = ' . $prod . '<br>';
 
 }


















?>
