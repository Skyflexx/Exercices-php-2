<h1>Exercice 14</h1>

<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
    qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
    suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    <!-- echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>"; -->
</p>

<h2>

<?php

class Voiture { // Creation d'une classe voiture avec 2 propriétés

    private string $marque;
    private string $modele;
    
    public function __construct($marque, $modele){ // Initialisation des propriétés attendues
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModel(){
        return $this->modele;
    }

    public function getInfos(){
        return "C'est une ".$this->getMarque()." ".$this->getModel()." !<br>" ;
    }
}

class VoitureElec extends Voiture{ // Creation d'une classe héritée de Voiture.

    private int $autonomie;

    public function __construct($marque, $modele, $autonomie){  // Réécriture du construct. L'initialisation des valeurs du Parent seront récupérées via la ligne parent:: __ construct...
       
        parent::__construct($marque, $modele); // ligne obligatoire pour récupérer l'initialisation des propriétés du parent 

        $this->autonomie = $autonomie; // Initialisation de la propriété qu'on souhaite ajouter.
    }

    public function getAutonomie(){
        return $this->autonomie;
    }

    public function getInfos(){
        return "C'est une ".$this->getMarque()." ".$this->getModel()." et avec ".$this->getAutonomie()." Km d'autonomie ! <br>" ;
    }

}

$bmw = new Voiture ("Bmw", "Série 1");
$tesla = new VoitureElec ("Tesla", "Model 4", 150);

echo $bmw->getInfos();
echo $tesla->getInfos();


    
?>

</h2>

