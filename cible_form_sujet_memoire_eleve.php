<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reception sujet mémoire</title>
    </head>
    <body>
        <h1>Récapitulatif de proposition de sujet de mémoire</h1>
        
        
        
        
        <input type="radio" name="valide" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="a reformuler" value="non" id="non" /> <label for="non">Non</label>
        <input type="radio" name="refusé" value="non" id="non" /> <label for="non">Non</label>
  
        <?php
        // put your code here
        // identification starts here 
        $_POST['eleve_prenom'];
        $_POST['eleve_nom'];
        $_POST['eleve_memoire_sujet_num_version'];
        $_POST['eleve_session'];

        // intervention starts here
        $_POST['eleve_memoire_sujet_titre'];
        $_POST['encadrant_proposition'];
        $_POST['eleve_problematique'];
        $_POST['eleve_deroulement'];
        $_POST['eleve_contribution_ai'];

        ?>
    </body>
</html>
