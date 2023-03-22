<h1>Exercice 1</h1>

<p>

    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
   

</p>
    


<h2>

<?php


$texte = "Mon texte en paramètre";

$couleur = "red";

convertirMajRouge($texte, $couleur);
 
 function convertirMajRouge($text, $color){

    $text = strtoupper($text); // Mise en majuscule de la chaine

    echo "<p style='color : $color;'>$text</p>";

 }

 // $a n'existe que dans la fonction. On précise qu'on attend 1 argument qui est $a.
 // Dans notre cas $a sera remplacé automatiquement par $texte.
  

?>

</h2>