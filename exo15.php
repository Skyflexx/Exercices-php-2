<h1>Exercice 15</h1>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.
</p>

<h2>

<?php

$courriel = "elan@@elan-formation.fr";   // Courriel rentré par l'utilisateur.

testMail($courriel);


function testMail ($mail){    

    $check = filter_var($mail, FILTER_VALIDATE_EMAIL);  // filter_var est intégré dans php pour vérifier un email.

    // var_dump ($check); Ca renvoie un booléen. True si ok, False si pas ok.
    
    if($check){ // Si $check est OK par défaut dans le if.

        echo "L'adresse $mail est une adresse e-mail valide !";

    } else {
    
        echo "L'adresse $mail est une adresse e-mail invalide !";

    };

};
    
?>

</h2>

