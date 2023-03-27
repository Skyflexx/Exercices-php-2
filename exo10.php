<h1>Exercice 10</h1>

<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
    mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
    de validation (submit).
</p>

<h2>

<?php



// CREATION CHAMPS DE TEXTE NOM PRENOM ETC ---------------



$formularInputs = array("Nom", "Prenom", "Adresse mail", "Ville"); // Ce seront les inputs des formulaires

//print_r($formularInputs); Pour vérifier la bonne création du formulaire

createForm($formularInputs); // Appel de la fonction permettant de créer les formulaires

function createForm($arrayName){

    echo "<form action='reponse.php'>"; // Balise html indiquant la création de formulaires

    foreach($arrayName as $tableContent){ 
        
        // On parcourt le tableau concerné ($arrayName) et à chaque itération la valeur sera assignée à la variable $tableContent
        
        echo "<p> $tableContent : <br> <input type='text' id='$tableContent' name='$tableContent'></p>";

        // <input> créé le formulaire en HTML
        // Id et Name pourront être utilisés par la suite
    } 

    echo  "</form>";
    
};



// ---------------- SELECTION DU SEXE -----------------



$radios = array("Masculin", "Féminin", "Autre");

displayRadio($radios); // Appel de notre fonction qui va afficher les boutons radio


// FONCTION AFFICHAGE DE LA RADIO

function displayRadio($array){  
    
    echo "<form action='reponse.php'>";
   
    foreach ($array as $value){

       $name = implode($array); // Je récupère le contenu du tableau en string pour obtenir un nom unique

        echo "<input type='radio' id='$value' name=$name>". // Le $name est important. Voir en dessous
        "<label for ='$value'>$value</label><br>";        

    };

    echo "</form>";

    /* Pour que les boutons fonctionnent normalement (un seul coché à la fois, il faut que le 
    "name" dans la balise <input> soit le même pour tous les boutons.

    J'ai donc utilisé implode() pour sortir un nom de tableau qui ne changera pas à chaque
    itération de la boucle Foreach. De ce fait la fct sera réutilisable dans un même site. */   


};


// ------------------ SELECTION INTITULE FORMATION ------------------------------

$elements = array("Développeur Logiciel", "Designer web", "Chef de projet");  // Note perso 0 => "Monsieur", 1 => "Madame", 2 => "Mademoiselle". "key" => "Value"

    rollingList($elements); // Appel de notre fonction

    // Fonction permettant de créer une liste déroulante à partir des items d'un tableau

    function rollingList ($array){

        echo "<form action='reponse.php'>";

        echo "<select>"; // Balise html qui créé le menu déroulant. Les options seront rajoutées par la boucle foreach qui va parcourir les élts du tableau

        foreach($array as $value){

            echo "<option value='$value'>$value</option>";

            //<option> créé un élément déroulant dont la value sera affichée via notre variable $value      
            
        };

        echo "</form>";

        echo "</select><br>";

    };    


// ---- BOUTON SUBMIT

echo "<form action='reponse.php'>";

echo "<p><input type ='submit' value ='Envoyer'></p>";

echo "</form>";


    
?>

</h2>

