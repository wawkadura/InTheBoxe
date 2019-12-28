<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="../view/src/style/profilAdherent.css">
    <meta charset="utf-8">
    <title>Votre profil</title>
  </head>
  <body>

    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
          <li id="Planning"><a href="../controle/planning.ctrl.php">Planning</a></li>
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <?php if (isset($_SESSION['mail'])) {
            $nom = $_SESSION['prenom']; ?>
            <li id="Connexion"><a href="../controle/profil.ctrl.php"><?=$nom?></a></li>
            <li id="Connexion"><a href="../controle/accueil.ctrl.php?deco=1">Déconnexion</a></li>
          <?php }else { ?>
            <li id="Connexion"><a href="../controle/connexion.ctrl.php">Connexion</a></li>
          <?php } ?>

        </ul>
      </nav>
    </header>

  <div class="container d-flex justify-content-around">
    <div class="user-details">
            <div class="user-image text-center">
                <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Mon nom</h3>
                    <span class="help-block">Mon adresse mail</span>
                    <hr class="style1">
                </div>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Information de compte</h4>

                            <section>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </section>
                            <hr class="style1">
                        </div>
                        <div id="email" class="tab-pane active">
                            <h4>Envoyer un message</h4>
                            <hr class="style1">
                        </div>
                        <div id="settings" class="tab-pane active">
                          <h4>Réglages</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>


    <?php
    $mail= $profil->getMail();
    $adresse= $profil->getAdresse();
    $statut = $profil->getStatut();
    $nom= $profil->getNom();
    $prenom=$profil->getPrenom();
    $dateNaiss= $profil->getDateNaiss();
    $tel = $profil->getTel();
    $codePostal = $profil->getCodePostal();
    $ville = $profil->getVille();
    $cours = $dao->getCours($mail);
    var_dump($profil);
    var_dump($cours);
    //demande de competition
    //affichage des informations (info , stats , status , docs a fournir )
    //les cours a la quelle il ses inscrit

     ?>
     <form class="parametrage" action="../controle/parametrage.ctrl.php" method="post">
       <fieldset>
         <p>
           <!-- <label for="prenom"><h2>Prénom</h2></label> -->
           <input type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" value="<?=$prenom ?>" required/>
         </p>
         <p>
           <!-- <label for="nom"><h2>Nom</h2></label> -->
           <input type="text" name="nom" id="nom" required placeholder="Nom" value="<?=$nom ?>" required/>
         </p>

         <p>
           <!-- <label for="tel"><h2>Téléphone</h2></label> -->
           <input type="tel" name="tel" id="tel" placeholder="Téléphone" value="<?=$tel ?>"/>
         </p>

         <p>
           <!-- <label for="adresse"><h2>Adresse</h2></label> -->
           <input type="text" name="adresse" id="adresse" required placeholder="Adresse" value="<?=$adresse ?>" required/>
         </p>
         <p>
           <!-- <label for="ville"><h2>Ville</h2></label> -->
           <input type="text" name="ville" id="ville" required placeholder="Ville" value="<?=$ville ?>" required/>
         </p>
         <p>
           <!-- <label for="cp"><h2>Code postal</h2></label> -->
           <input type="number" name="codePostal" id="codePostal" required placeholder="Code postal" value="<?=$codePostal ?>" required/>
         </p>
         <input type="submit" value="validé">
         <?php global $erreur; ?>
         <p style='color:red'> <?= $erreur ?></p>
       </fieldset>
     </form>
  </body>
</html>
