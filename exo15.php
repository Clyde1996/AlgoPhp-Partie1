<h1>Exercice 15</h1>
<p>XV.Exercice 15Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<?php

class Personne {
    //déclaration des propriétés des objects de la classe personne

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;


    // déclaration de la méthode magic construct
    
    public function __construct(string $nom, string $prenom, string $dateNaissance){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime ($dateNaissance);
        

    }



    //getters

    public function getAge() :string {
        //calcule  la différence en annéés entre la date de naissance et la date d'aujourd'hui
        return $this->dateNaissance->diff(new DateTime())->format("%y ans");
    }
    
    public function getNom() :string {
        return $this->nom;
    }

    public function getPrenom() :string {
        return $this->prenom;
    }
    
    public function getDateNaissance() :string {
        return $this->dateNaissance->format("d-m-Y");
    }
   
}


$p1 = new Personne("DUPONT","Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");

//affichage
echo $p1->getPrenom()." ".$p1->getNom()." a ".$p1->getAge(). " . <br/>";
echo $p2->getPrenom()." ".$p2->getNom()." a ".$p2->getAge()." .";


?>