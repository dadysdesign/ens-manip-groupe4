<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Avis membre du bureau sur un sujet</title>
        <link rel=stylesheet type="text/css" href="style_gestion_memoire.css">
    </head>
    <body>

        <h1>Récapitulatif de proposition de sujet de mémoire</h1>

        <?php


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


              // Récupération du numéro dans l'URL
              $id_proposition_sujet = $_GET['id_proposition_sujet'] ;
              // fin

               require_once("connexion.php") ;

               // Etablissement de la connexion
               $connexion = faitConnexionPDO("localhost", "memoires", "root", donneMDPRoot()) ;



               // MODIFICATION : la requête à changer et à tester
               // $requete = "SELECT * FROM haikuAuteurId ORDER BY RAND() LIMIT 10" ;
               $requete = "SELECT * FROM proposition_sujet WHERE id='$id_proposition_sujet'";
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


               // Récupération de l'environnement transmis par le formulaire en mode POST
               // $id = $_POST['idHaiku'] ;
               $eleve_nom = $_POST['eleve_nom']; ;
               $eleve_memoire_sujet_num_version = $_POST['eleve_memoire_sujet_num_version']; ;
               $eleve_session = $_POST['eleve_session'] ;
               $eleve_memoire_sujet_titre = $_POST['eleve_memoire_sujet_titre'] ;
               $encadrant_prenom_nom = $_POST['encadrant_prenom_nom'] ;
               $eleve_memoire_sujet_problematique = $_POST['eleve_memoire_sujet_problematique'] ;
               $eleve_memoire_sujet_deroulement_prevu = $_POST['eleve_memoire_sujet_deroulement_prevu'] ;
               $eleve_memoire_sujet_contribution_ai = $_POST['eleve_memoire_sujet_contribution_ai'] ;


               // $requete = "INSERT INTO proposition_sujet (idHaiku, initiales, commentaire) VALUES ('$eleve_memoire_sujet_num_version', '$eleve_session', '$eleve_memoire_sujet_titre', '$encadrant_proposition', '$eleve_problematique', '$eleve_deroulement', '$eleve_contribution_ai')" ;
               // $requete = "SELECT * FROM proposition_sujet WHERE id='$id_proposition_sujet'" ;
               // $resultat = $connexion->query($requete) ;

               // Récupération d'une ligne dans le tableau résultat comme un tableau associatif
               // avec les noms des colonnes de la table comme clés du tableau associatif
               // $ligne = $resultat->fetch() ;

               // Utilisation de ce tableau associatif pour engendrer un article comprenant
               // des paragraphes aux classes correspondant aux règles CSS
              //  echo "<article><p class='l1'>" . utf8_encode($ligne['l1']) . "</p><p class='l2'>" . utf8_encode($ligne['l2']) . "</p><p class='l3'>" . utf8_encode($ligne['l3']) . "</p><p class='auteur'>" . utf8_encode($ligne['auteur']) . "</p></article>" ;



        ?>

<form action="cible_sujet_memoire_eleve.php" method="post">
    <!--    // put your code here
        // identification starts here -->

        <div class="eleve_prenom">
          PRENOM ELEVE :
        <?php echo $_POST['eleve_prenom']; ?>
        </div>

        <div class="eleve_nom">
          NOM ELEVE :

        <?php echo $_POST['eleve_nom']; ?>
        </div>



        <div class="eleve_session">
          SESSION MEMOIRE :
        <?php echo $_POST['eleve_session']; ?>
        <span>avis enseignant</span>

                 <textarea name="avis_membre_bureau_session" rows="10" cols="45">
Remarques de l'enseignant
            </textarea> </div>

      <!--  // intervention starts here -->

       <div class="eleve_memoire_sujet_titre">
         TITRE SUJET MEMOIRE
      <?php echo $_POST['eleve_memoire_sujet_titre']; ?>
      <span>Statut global donné par le membre du bureau</span>

        <!-- Radio buttons -->
        <input type="radio" name="eleve_memoire_sujet_titre_valide" value="oui_eleve_memoire_sujet_titre" id="oui_eleve_memoire_sujet_titre" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_memoire_sujet_titre_refuse" value="non_eleve_memoire_sujet_titre" id="non_eleve_memoire_sujet_titre" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_memoire_sujet_titre_a_reformuler" value="non_eleve_memoire_sujet_titre" id="non_eleve_memoire_sujet_titre" /> <label for="reform">À reformuler</label>
        <span>avis enseignant sur le sujet</span>
              <textarea name="avis_membre_bureau_memoire_sujet_titre" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="encadrant_proposition">
          ENCADRANT PROPOSE
        <?php echo $_POST['encadrant_proposition']; ?>
        <span>avis enseignant</span>

                  <textarea name="avis_membre_bureau_encadrant" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="eleve_problematique">
          PROBLEMATIQUE :
        <?php echo $_POST['eleve_problematique']; ?>

        <span>avis enseignant</span>
  <textarea name="avis_membre_bureau_problematique" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="eleve_deroulement">
          DEROULEMENT :
        <?php echo $_POST['eleve_deroulement']; ?>
<span>avis enseignant</span>
                  <textarea name="avis_membre_bureau_deroulement" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

       <div class="eleve_contribution_ai">
         ARGUMENTAIRE CONTRIBUTION à l'AI
       <?php echo $_POST['eleve_contribution_ai']; ?>
       <span>avis enseignant</span>
<textarea name="avis_membre_bureau_contribution_ai" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>
        </form>
    </body>
</html>
