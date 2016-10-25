<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès à l'interface</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "archinfo") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici le lien  :</h1>
        <p><strong> https://localhost/Manipwww/gestion-memoire-archinfo/cible_form_sujet_memoire_eleve.php</strong></p>   
        
     
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>
