<h1>Exercice7</h1>

<p>Poussin: entre 6 et 7 ans</p>
<p>Pupille: entre 8 et 9 ans</p>
<p>Minime: entre 10 et 11 ans</p>
<p>Cadet: à partir de 12 ans</p>
<p>Si la catégorie n’est pas gérée, merci de le préciser.</p>

    <?php
    // DECLARATION DE VARIABLES
$age = 10;


// STRUCTURES DE CONTROLE

// Conditions (IF = SI)
if ($age >= 12) {
echo "L’enfant qui a ". $age . " " . "ans appartient à la catégorie « Cadet »";
}

elseif ($age >= 10) {
echo "L’enfant qui a ". $age . " " . "ans appartient à la catégorie « Minime »";
}

elseif ($age >= 8) {
echo "L’enfant qui a ". $age . " " .  "ans appartient à la catégorie « Pupille »";
}

elseif ($age >= 6){
    echo "L’enfant qui a ". $age . " " . "ans appartient à la catégorie Poussin"; }

else {
    echo "L’enfant ne fait pas partie d'un  catégorie gerée"; }
?>