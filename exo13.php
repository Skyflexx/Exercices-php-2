<h1>Exercice 13</h1>

<p>
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
    véhicule.
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
    suivants :
</p>

<h2>

<?php

class Voiture { // Déclaration de la marque, du modele, du nb de portes, de la vitesse actuelle du véhicule et de son état démarré ou non

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitesse;
    private bool $etatVehicule; // isDemarré à rajouter.
    
// CONSTRUCT 

    public function __construct($marque, $modele, $nbPortes){

        $this->vitesse = 0;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->etatVehicule = false;       

    }

// ------------ Methodes ------------------

// Différents Getters pour recupérer la marque, le modele, le nb de portes et la vitesse actuelle.

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getNbPortes(){
        echo "Le véhicule possède ".$this->nbPortes." portes. <br>";
        // return $this->nbPortes; A modifier
    }

    public function getVitesse(){
        echo "La vitesse du véhicule ".$this->marque." ".$this->modele." est de : ".$this->vitesse." km/h. <br>";
        // return $this->modele; A modifier
    }

// Setter pour la vitesse. 

    // public function setVitesse($vitesseChoisie){ // L'utilisateur rentre une vitesse avec la méthode setVitesse

    //     $this->vitesse = $vitesseChoisie;     // Pas de return car on souhaite juste changer la vitesse.   

    // }

// Demarrer, stopper, accélerer

    public function demarrer(){

        if ($this->etatVehicule){ // Si le véhicule = true c'est qu'il est démarré. 

            return "Le véhicule ".$this->marque." ".$this->modele."  est déjà démarré ! <br>";

        } else {

            $this->etatVehicule = true;

            return "Le véhicule ".$this->marque." ".$this->modele." démarre. <br>";
        }        
        
    }

    public function stopper(){

        if ($this->etatVehicule){ // Si le véhicule = true c'est qu'il est démarré. 

            $this->etatVehicule = false;

            $this->vitesse = 0; // Remise à zero de la vitesse car le véhicule est stoppé.

            return "Le véhicule ".$this->marque." ".$this->modele." est stoppé. <br>";

        } else {            

            return "Le véhicule ".$this->marque." ".$this->modele." est déjà stoppé. <br>";

        }
    }


    public function accelerer($vitAcc){  
        
        if ($this->etatVehicule) { // Si le véhicule = true c'est qu'il est démarré. 

            $this->vitesse += $vitAcc; // On additionne son accélération à la vitesse actuelle

            return "le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de ".$vitAcc." km/h. <br>";

        } else {
            return "Le véhicule veut accélerer de $vitAcc"." km/h."." <br> Pour accélerer, il faut démarrer le véhicule ".$this->marque." ! <br>";
        }        

    }   


    public function decelerer($vitDecc){  
        
        if ($this->etatVehicule) { // Si le véhicule = true c'est qu'il est démarré. 
            
            if($this->vitesse - $vitDecc <0 ){ // Si le VL décellere de 50kmh alors qu'il roule qu'à 30kmh, alors il ne deccelere que de 30kmh.

                return "le véhicule ".$this->getMarque()." ".$this->getModele()." deccélère de ".$this->vitesse." km/h et s'arrête car sa vitesse est nulle. <br>";

                $this->vitesse = 0; // Passage de la vitesse à 0 car il a totalement decceléré.      

            } else{

                $this->vitesse = $this->vitesse - $vitDecc; // Sinon, il deccelere de la vitesse indiquée et la vitesse de decceleration se soustrait à la vitesse initiale.

                return "le véhicule ".$this->getMarque()." ".$this->getModele()." deccélère de ".$vitDecc." km/h. <br>";  
            }           

        } else {
            return "Pour deccélérer, il faut que le véhicule ".$this->marque." roule ! <br>"; // S'il n'est pas démarré on indique l'erreur.
        }        

    }   


    // -------- Récupération des infos du véhicule -------------


    public function getInfoVehicule(){       

        if($this->etatVehicule){

            return "Infos du véhicule ".get_class()." <br>***********************<br>".
                    "Nom et modèle du véhicule : ".$this->marque." ".$this->modele."<br>".
                    "Nombre de portes : ".$this->nbPortes."<br>".
                    "Le véhicule ".$this->marque." est démarré. <br>".
                    "Sa vitesse actuelle est de ".$this->vitesse." Km/h. <br> ************* <br><br>";

        } else {

            return "Infos du véhicule ".get_class()." <br>***********************<br>".
                    "Nom et modèle du véhicule : ".$this->marque." ".$this->modele."<br>".
                    "Nombre de portes : ".$this->nbPortes."<br>".
                    "Le véhicule ".$this->marque." est à l'arrêt. <br> ".            
                    "Sa vitesse actuelle est de ".$this->vitesse." Km/h. <br>************* <br><br> ";

        }
    }
    
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesse();
echo $v2->getVitesse();
echo "<br>";
echo $v1->getInfoVehicule();
echo $v2->getInfoVehicule();





// echo $v1->demarrer();
// echo $v1->demarrer();
// echo $v1->stopper();
// echo $v1->stopper();
// echo $v1->getNbPortes();
// echo $v1->demarrer();
// echo $v1->getVitesse();
// echo $v1->setVitesse(50);

//  echo $v1->accelerer(30);
//  echo $v1->decelerer(20);
//  echo $v1->getVitesse();
// echo $v1->getVitesse();
// echo $v1->getInfoVehicule();
// echo $v1->stopper();
// echo $v1->getInfoVehicule();



// echo $v2->demarrer();
// echo $v2->getVitesse();
// echo $v1->stopper();
// echo $v1->demarrer();
// echo $v1->demarrer();
// echo $v2->getVitesse();
// echo $v2->setVitesse(50);
// echo $v2->getVitesse();
// echo $v2->accelerer(30);
// echo $v2->getVitesse();
// echo "********************* <br>"; // Pour bien séparer et constater le changement avec la methode getinfovehicule


// echo $v2->demarrer();
// echo $v2->stopper();
// echo $v2->getVitesse();
// echo "********************* <br>"; // Pour bien séparer et constater le changement avec la methode getinfovehicule

    
    
?>

</h2>

