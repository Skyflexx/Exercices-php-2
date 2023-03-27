<h1>Exercice 9</h1>

<p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>

<?php

$radios = array("Monsieur", "Madame", "Mademoiselle");

displayRadio($radios); // Appel de notre fonction qui va afficher les boutons radio


// FONCTION AFFICHAGE DE LA RADIO

function displayRadio($array){  
    
    echo "<form>";
   
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
    
?>

</h2>

