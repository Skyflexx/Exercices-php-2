<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non
</p>

<h2>

<?php
    
    $elements = array("Choix 1" => "checked", "Choix 2" => "unchecked", "Choix 3" => "checked", "Choix 4" => "checked");    

    // Création du tableau. la clé c'est le nom de la checkbox, et la valeur indique si la checkbox est cochée ou non. checked = coché, unchecked = non coché

    createCheckBox($elements);    
   

// FONCTION QUI VA CREER LES CHECKBOX 
    

    function createCheckBox ($array){   // le but est de créer les checkbox à partir d'un array.

        foreach($array as $name => $checked){ // Pour chaque ligne du tableau dont la clé est $name (le nom de la box) et la valeur $checked (si cochée ou non)       
        
        checkTheBox($name, $checked);  // Appel de la fonction checktheBox afin de savoir si une box doit être cochée ou non.

        };

    };


// FONCTION QUI VA VERIFIER SI UNE BOX DOIT ETRE COCHEE OU NON


   function checkTheBox($nameBox, $check){ // $nameBox c'est le nom de la checkbox. $check c'est coché (checked) ou pas coché (unchecked).

    switch ($check){ // Dans le cas où $check est checked, alors on créé une box cochée.

        case "checked" : echo "<input id='$nameBox' name='$nameBox' type ='checkbox' checked>"."<label for='$nameBox'>$nameBox</label><br>";
        break; 
        
        // Pour que la box soit cochée, ajout de "checked" dans la balise

        case "unchecked" : echo "<input id='$nameBox' name='$nameBox' type ='checkbox'>"."<label for='$nameBox'>$nameBox</label><br>";
        break;

        };
    };

?>

</h2>

