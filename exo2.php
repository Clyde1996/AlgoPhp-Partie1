<h1>Exercice2</h1>
<p>La phrase «Notre formation DL commence aujourd’hui» contient 5 mots.</p>
<?php

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "Notre formation DL commence aujourd’hui";

// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);

// AFFICHAGE
echo "La phrase contient $nbMots mots<br>";


?>