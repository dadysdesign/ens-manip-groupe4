<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion étudiant</title>
    </head>
    <body>
        <p>Veuillez entrer votre pseudo et votre mot de passe pour accéder à la page de proposition de sujet :</p>
        <form action="secret.php" method="post">
            <p>
            <input type="text" placeholder="Pseudo" name="pseudo_etudiant" required />
            <input type="password" placeholder="Mot de passe" name="mot_de_passe" required />
            <input type="submit" value="Valider" />
            </p>
        </form>
       
    </body>
</html>
