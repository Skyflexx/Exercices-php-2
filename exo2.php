<h1>Exercice 2</h1>

<p>

    Soit le tableau suivant :

    $capitales = array

    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.

    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);    
   

</p>
    


<h2>

<?php

    
$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");

// print_r($capitales); Permet d'afficher le tableau et vérifier que ça fonctionne

afficherTableHTML($capitales); // Appel de la Fonction

function afficherTableHTML($capitales){

    echo "<table border='1'>"; // Création du tableau HTML. <tr> = ligne <td> = cellule

    ksort($capitales); // Classement alphabétique par clé car ce sont les pays qui nous intéressent et ce sont les clés.
            
    echo "<th> <strong> Pays </strong> </th> <th><strong> Capitale </strong> </th>"; // TH c'est Tableau Header
        
     foreach ($capitales as $pays => $capitale){

         $pays = strtoupper($pays); // Mise en majuscule de la chaine
                
         echo "<tr> <td> $pays </td>    <td> $capitale </td> </tr>";
        
     }     
        
    echo "</table>";
        
}

?>



</h2>