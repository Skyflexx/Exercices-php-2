<h1>Exercice 8</h1>

<p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<h2>

<?php

$lien = "http://my.mobirise.com/data/userpic/764.jpg";

repeatImg($lien, 5); // Appel de la fonction voulue


// CREATION DE LA FONCTION 

function repeatImg($url, $nbRep){ // Argument 1 c'est le lien à afficher, l'argument 2 c'est le nbr de fois où l'image sera répétée

     for($i=1; $i <= $nbRep; $i++ ){ // Si $i est inférieur où égal au nbr de reps, alors on lance la fct. si $i est supérieur alors la fct s'arrête.

            echo "<img src='$url'>"; // Simple ajout d'une balise img avec l'url de la video.

        };    

    };    
    
?>

</h2>

