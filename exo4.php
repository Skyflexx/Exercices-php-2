<h1>Exercice 4</h1>

<p>

    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");  

</p>
    


<h2>

<?php
   
    $capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome", "Espagne" => "Madrid");

    // print_r($capitales); Permet d'afficher le tableau et vérifier que ça fonctionne


    afficherTableHTML($capitales); // Appel de la Fonction

    function afficherTableHTML($capitales){        

        echo "<table border='1'>"; // Création du tableau HTML. <tr> = ligne <td> = cellule

        ksort($capitales); // Classement alphabétique par clé car ce sont les pays qui nous intéressent et ce sont les clés.
                
        echo "<th> <strong> Pays </strong> </th> <th><strong> Capitale </strong> </th> <th><strong> Lien wiki </strong> </th>"; 
        
        // TH c'est Tableau Header
            
        foreach ($capitales as $pays => $capitale){            

            $pays = strtoupper($pays); // Mise en majuscule de la chaine

            $lien = "<a href='https://fr.wikipedia.org/wiki/$capitale' target ='_blank'>Lien</a>" ;

            // stockage du lien dans une variable, le lien sera différent au fur et à mesure de la lecture du tableau par la fcn Foreach.
                    
            echo "<tr> <td> $pays </td> <td> $capitale </td> <td> $lien </td> </tr>";
            
        }     
            
        echo "</table>";
            
    }

?>

</h2>