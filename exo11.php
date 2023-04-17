<h1>Exercice11</h1>

<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes", "Kia"]; // marques de voitures
$nbMarques = count($marques);                                // lire  le marques

echo "<h2>Il y a $nbMarques marques de voitures dans le tableau : </h2>";
for ($i = 0; $i < $nbMarques; $i++) 
    echo $marques[$i]."<br>";
?>