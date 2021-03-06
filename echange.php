<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemple échange avec le serveur de BDD </title>
<style>
</style>
    </head>
    <body>
        <h1>Exemple d'échange d'un serveur web</h1>
<?php
       // Regarder les endroits marqués VERIFICATION et MODIFICATION
       // Vérifiez et modifiez et essayez.
       
     /* Fonction qui affiche le résultat d'une requête SQL dans un tableau HTML.*/
     function resultatRequete2TableHTML($resultatRequete) {
       $numeroLigne = 1 ; 
       echo "<table>\n" ; 
       // Chaque ligne successive du résultat est récupérée comme un tableau clé/valeur
       // Clé = nom de colonne - valeur = contenu de colonne
       while ($tableauCleValeur = $resultatRequete->fetch(PDO::FETCH_ASSOC)) {
       	// Affichage des noms de colonnes pour la première ligne
     	if ($numeroLigne == 1) {
     	  echo "<thead><tr>" ; 
     	  foreach($tableauCleValeur as $cle => $valeur) {
     		  echo "<th>" . utf8_encode($cle) . "</th>" ; 
     	  }
     	  echo "</thead></tr>\n" ; 
     	}
     	$numeroLigne++ ; 
     	echo "<tr>" ; 
     	foreach($tableauCleValeur as $cle => $valeur) {
     		echo "<td>" . utf8_encode($valeur) . "</td>" ; 
     	}
     	echo "</tr>\n" ; 
       }
       echo "</table>\n" ; 
     }          
       
       // VERIFICATION : le fichier auxiliaire doit être accessible
       require_once("connexion.php") ;  
        
       // Etablissement de la connexion
       // MODIFICATION : fournir les bonnes valeurs pour les paramètres de la fonction
       $connexion = faitConnexionPDO("localhost", "haikus", "root", donneMDPRoot()) ; 
        
       
       <!// MODIFICATION : la requête à changer et à tester
       $requete = "SELECT * FROM haikuAuteurId ORDER BY RAND() LIMIT 10" ; 
       $resultat = $connexion->query($requete) ; 
       // On récupère les informations sur les erreurs éventuelles
       $infosErreur = $connexion->errorInfo();
       // Code de succès ou de succès avec avertissement
       if ($infosErreur[0] === '00000' || $infosErreur[0] === '01000') {
         // MODIFICATION : traitement du résultat 
         resultatRequete2TableHTML($resultat) ; 
         
         // Fermeture de ce qui permet d'utiliser ce résultat
         $resultat->closeCursor() ;
     
       }
       else {
       	die("Erreur MySQL : " . $infosErreur[2]) ;
       }
       // Fermeture de la connexion
       $connexion = null ; 
        
?>
    </body>
</html>
