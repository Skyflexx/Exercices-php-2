<h1>Exercice 11</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.
    Exemple :
    formaterDateFr("2018-02-23");
</p>

<h2>



    <?php 

        // Depuis une MAJ de PHP, il est devenu difficile de convertir une date anglaise en FR. Il sera plus simple d'utiliser des array FR.
        
        $input = "08-02-2023"; // Date rentrée par l'utilisateur

        echo writeDate($input); 


        // ----------------- FONCTION CONVERSION DATE ENG TO FR --------------------

        
        function writeDate($inputDate) { 

            $semaine = ["0","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]; 

            $mois = ["0", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]; 

            $dayOfWeek = $semaine[date('w', strtotime($inputDate))]; 

            // strtotime de l'inpudate donne le timestamp. et la valeur 'w' ressortira le numero du jour de la semaine)

            // Donc $dayofweek prend la valeur de l'array dont la clé est le numero du jour. 3 Pour mercredi.

            // var_dump ($dayOfWeek); Ressort Mercredi

            // echo strtotime($inputDate); Ressort le timestamp

            // echo date('w', strtotime($inputDate)); Ressort le numero du jour de la semaine, ici le 3.

            $month = $mois[date('n', strtotime($inputDate))]; $year = date('Y', strtotime($inputDate)); 

            // Ressort par rapport au timestamp le numero du mois puis ressort le mois numéro 02 du tableau $mois.

            $output = $dayOfWeek . " " . date('j', strtotime($inputDate)) . " " . $month . " " . date('Y', strtotime($inputDate)); 

            // "Mercredi", "numero du jour du mois par rapport à $inputDate", "Fevrier", "Année par rapport à $inputDate"
            
            return $output;
        
        } ;
            
        
        
    ?>


<?php

    // AUTRE PRINCIPE DE SOLUTION ----------------


    // $date = "2018-02-23"; echo formaterDateFr($date); 
    
    // // Définition de la fonction function 
    
    // formaterDateFr($date){
        
    //     // Utilisation intldateformatter
        
    //     $dateFr = new DateTime($date); 
        
    //     $fonctionDateFormat = new IntlDateFormatter( "fr_FR", IntlDateFormatter::FULL,
        
    //     //ajoute le jour de la semaine
        
    //     IntlDateFormatter::NONE,
        
    //     //supprime les heure après 'Europe/Paris', 
        
    //     IntlDateFormatter::GREGORIAN ); 
        
    //     //Mise en forme de la date
        
    //     $fonctionDateFormat->setPattern('EEEE dd MMMM YYYY'); 
        
    //     //ce pattern crée le format (jours date mois année)
        
    //     return $fonctionDateFormat->format($dateFr); };

    //    ?>



</h2>

