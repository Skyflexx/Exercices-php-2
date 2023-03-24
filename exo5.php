<h1>Exercice 5</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés.
    Exemple :
    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);    
</p>


<?php

    $formularInputs = array("Nom", "Prenom", "Ville"); // Ce seront les inputs des formulaires

    //print_r($formularInputs); Pour vérifier la bonne création du formulaire

    createForm($formularInputs); // Appel de la fonction permettant de créer les formulaires

    function createForm($arrayName){

        echo "<form>"; // Balise html indiquant la création de formulaires

        foreach($arrayName as $tableContent){ 
            
            // On parcourt le tableau concerné ($arrayName) et à chaque itération la valeur sera assignée à la variable $tableContent
            
            echo "<p> $tableContent : <br> <input type='text' id='$tableContent' name='$tableContent'></p>";

            // <input> créé le formulaire en HTML
            // Id et Name pourront être utilisés par la suite
        } 

        echo  "</form>";
        
    };

?>

