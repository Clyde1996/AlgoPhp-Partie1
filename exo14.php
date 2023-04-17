<h1>Exercice14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<p>Affichage si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985:Age de la personne: 33 ans 4 mois 4 jours </p>

<?php

/*//date in mm/dd/yyyy format; or it can be in other formats as well
$birthDate = "12/17/1983";
$date = "21/05/2018";
//explode the date to get month, day and year
$birthDate = explode("/", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));
echo "Age de la personne: " . $age;
*/

$date1 = new DateTime("21-05-2018"); //date 
$date2 = new DateTime("17-01-1985"); //birthdate/date d'aniversaire
$interval = $date1->diff($date2);  //  calcule le $date1 avec le $date2 et ca affiche l'age de la personne.

// AFFICHAGE
echo "Age de la personne: " . $interval->y . " années, " . $interval->m."  mois, ".$interval->d." jours. " ;  // y-years/années, m-months/mois, d-days/jours
?>