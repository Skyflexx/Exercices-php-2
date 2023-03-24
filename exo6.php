<h1>Exercice 6</h1>

<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs.
    Exemple :
    $elements = array("Monsieur","Madame","Mademoiselle");
    alimenterListeDeroulante($elements);     
</p>

<h2>

<?php

    $elements = array("Monsieur", "Madame", "Mademoiselle");  // Note perso 0 => "Monsieur", 1 => "Madame", 2 => "Mademoiselle". "key" => "Value"

    rollingList($elements); // Appel de notre fonction

    // Fonction permettant de créer une liste déroulante à partir des items d'un tableau

    function rollingList ($array){

        echo "<select>"; // Balise html qui créé le menu déroulant. Les options seront rajoutées par la boucle foreach qui va parcourir les élts du tableau

        foreach($array as $value){

            echo "<option value='$value'>$value</option>";

            //<option> créé un élément déroulant dont la value sera affichée via notre variable $value        

        };

        echo "</select>";

    };    

?>

</h2>

