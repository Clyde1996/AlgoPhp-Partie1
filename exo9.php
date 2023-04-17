<h1>Exercice9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</p>

<p>Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable.</p>

<p> (sinon ce n’est pas le cas, «non imposable»).</p>

<p>Age: 32</p>
<p>Sexe: F</p>
<p>La personne est imposable.</p>

<?php


// DECLARATION DE VARIABLES
// Femme entre 18 et 35 ans imposable
// Homme plus de 20 ans impossable

$age = 18;
$sexe = "H";

if ($sexe == "H" && $age > 20 || $sexe == "F" && $age > 18 && $age < 35 ) {
    echo "La personne est imposable." . "<br/>";
}

else {
    echo "La personne est non imposable" . "<br/>";
}


?>