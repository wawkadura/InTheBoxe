<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id="Actualités"><a href="#Evènement">Actualités</a></li>
          <li id="Planning"><a href="../controle/entrainement.ctrl.php">Planning</a></li>
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <?php
            if (isset($_SESSION['mail'])) {
              $nom = $_SESSION['mail'];
              echo "<li id=\"Connexion\"><a href=\"../controle/profil.ctrl.php\">$nom</a></li>";
              echo "<li id=\"Connexion\"><a href=\"../controle/accueil.ctrl.php?deco=1\">Déconnexion</a></li>";
            }else {
              echo "<li id=\"Connexion\"><a href=\"../controle/connexion.ctrl.php\">Connexion</a></li>";
            }
           ?>
        </ul>
      </nav>
    </header>
  </body>
</html>
