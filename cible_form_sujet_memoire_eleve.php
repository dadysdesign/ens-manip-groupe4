<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Réception sujet mémoire</title>
        <link rel=stylesheet type="text/css" href="style_gestion_memoire.css">
    </head>
    <body>

        <h1>Récapitulatif de proposition de sujet de mémoire</h1>

        <?php
               require_once("connexion.php") ;

               // Etablissement de la connexion
               $connexion = faitConnexionPDO("localhost", "memoires", "root", donneMDPRoot()) ;

               // Récupération de l'environnement transmis par le formulaire en mode POST
               // $id = $_POST['idHaiku'] ;
               $eleve_memoire_sujet_num_version = $_POST['eleve_memoire_sujet_num_version']; ;
               $eleve_session = $_POST['eleve_session'] ;
               $eleve_memoire_sujet_titre = $_POST['eleve_memoire_sujet_titre'] ;
               $encadrant_prenom_nom = $_POST['encadrant_prenom_nom'] ;
               // $eleve_problematique = $_POST['eleve_problematique'] ;
               // $eleve_deroulement = $_POST['eleve_deroulement'] ;
               $eleve_memoire_sujet_contribution_ai = $_POST['eleve_memoire_sujet_contribution_ai'] ;

               // $requete = "INSERT INTO proposition_sujet (idHaiku, initiales, commentaire) VALUES ('$eleve_memoire_sujet_num_version', '$eleve_session', '$eleve_memoire_sujet_titre', '$encadrant_proposition', '$eleve_problematique', '$eleve_deroulement', '$eleve_contribution_ai')" ;
               $requete = "INSERT INTO proposition_sujet (num_version, session, nom, encadrant, apport_ai) VALUES ('$eleve_memoire_sujet_num_version', '$eleve_session', '$eleve_memoire_sujet_titre', '$encadrant_prenom_nom', '$eleve_memoire_sujet_contribution_ai')" ;

               // Pour information
               echo "$requete<br />" ;
               // Exécution de la requête côté serveur de BD sans résultat important du côté PHP
               $connexion->exec($requete) ;
               // On récupère les informations sur les erreurs éventuelles
               $infosErreur = $connexion->errorInfo();
               // Code de succès ou de succès avec avertissement
               if ($infosErreur[0] === '00000' || $infosErreur[0] === '01000') {
               }
               else {
               	die("Erreur MySQL : " . $infosErreur[2]) ;
               }

               // Fermeture de la connexion
               $connexion = null ;
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

        <div class="eleve_memoire_sujet_num_version">
          VERSION MEMOIRE :
        <?php echo $_POST['eleve_memoire_sujet_num_version']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_memoire_sujet_num_version_valide" value="oui_eleve_memoire_sujet_num_version" id="oui_eleve_memoire_sujet_num_version" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_memoire_sujet_num_version_refuse" value="non_eleve_memoire_sujet_num_version" id="non_eleve_memoire_sujet_num_version" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_memoire_sujet_num_version_a_reformuler" value="non_eleve_memoire_sujet_num_version" id="non_eleve_memoire_sujet_num_version" /> <label for="reform">À reformuler</label>
            <textarea name="remarques_eleve_memoire_sujet_num_version" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="eleve_session">
          SESSION MEMOIRE :
        <?php echo $_POST['eleve_session']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_session_valide" value="oui_eleve_session" id="oui_eleve_session" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_session_refuse" value="non_eleve_session" id="non_eleve_session" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_session_a_reformuler" value="non_eleve_session" id="non_eleve_session" /> <label for="reform">À reformuler</label>
                 <textarea name="remarques_eleve_session" rows="10" cols="45">
Remarques de l'enseignant
            </textarea> </div>

      <!--  // intervention starts here -->

       <div class="eleve_memoire_sujet_titre">
         TITRE SUJET MEMOIRE
      <?php echo $_POST['eleve_memoire_sujet_titre']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_memoire_sujet_titre_valide" value="oui_eleve_memoire_sujet_titre" id="oui_eleve_memoire_sujet_titre" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_memoire_sujet_titre_refuse" value="non_eleve_memoire_sujet_titre" id="non_eleve_memoire_sujet_titre" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_memoire_sujet_titre_a_reformuler" value="non_eleve_memoire_sujet_titre" id="non_eleve_memoire_sujet_titre" /> <label for="reform">À reformuler</label>
              <textarea name="remarques_eleve_memoire_sujet_titre" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="encadrant_proposition">
          ENCADRANT PROPOSE
        <?php echo $_POST['encadrant_proposition']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="encadrant_proposition_valide" value="oui_encadrant_proposition" id="oui_encadrant_proposition" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="encadrant_proposition_refuse" value="non_encadrant_proposition" id="non_encadrant_proposition" /> <label for="non">Refusé</label>
        <input type="radio" name="encadrant_proposition_a_reformuler" value="non_encadrant_proposition" id="non_encadrant_proposition" /> <label for="reform">À reformuler</label>
            <textarea name="remarques_encadrant_proposition" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="eleve_problematique">
          PROBLEMATIQUE :
        <?php echo $_POST['eleve_problematique']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_problematique_valide" value="oui_eleve_problematique" id="oui_eleve_problematique" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_problematique_refuse" value="non_eleve_problematique" id="non_eleve_problematique" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_problematique_a_reformuler" value="non_eleve_problematique" id="non_eleve_problematique" /> <label for="reform">À reformuler</label>
              <textarea name="remarques_eleve_problematique" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

        <div class="eleve_deroulement">
          DEROULEMENT :
        <?php echo $_POST['eleve_deroulement']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_deroulement_valide" value="oui_eleve_deroulement" id="oui_eleve_deroulement" checked="checked" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_deroulement_refuse" value="non_eleve_deroulement" id="non-eleve_deroulement" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_deroulement_a_reformuler" value="non_eleve_deroulement" id="non_eleve_deroulement" /> <label for="reform">À reformuler</label>
            <textarea name="remarques_eleve_deroulement" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>

       <div class="eleve_contribution_ai">
         ARGUMENTAIRE CONTRIBUTION à l'AI
       <?php echo $_POST['eleve_contribution_ai']; ?>
        <!-- Radio buttons -->
        <input type="radio" name="eleve_contribution_ai_valide" value="oui_eleve_contribution_ai" id="oui_eleve_contribution_ai" checked="checked_" /> <label for="oui">Validé</label>
        <input type="radio" name="eleve_contribution_ai_refuse" value="non_eleve_contribution_ai" id="non_eleve_contribution_ai" /> <label for="non">Refusé</label>
        <input type="radio" name="eleve_contribution_ai_a_reformuler" value="non_eleve_contribution_ai" id="non_eleve_contribution_ai" /> <label for="reform">À reformuler</label>
         <textarea name="remarques_eleve_contribution_ai" rows="10" cols="45">
Remarques de l'enseignant
            </textarea>
    </div>
        </form>
    </body>
</html>
