<?php
session_start();
include_once("connexion.php");
$userNum = $_SESSION["Num_ut"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page d'accueil</title>
  <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
  <link rel="stylesheet" href="../css/pageAcc2.css">
</head>
<div class="un">
  <div class="sub-un">
    <header>
      <?php
      include_once("header.php"); ?>
    </header>

  </div>
</div>
<div class="tout">
  <?php include_once("compte.php") ?>
  <div class="accueil">
    <h2>Accueil</h2>
    <p>Bienvenue sur la plateforme en ligne de l'IAI-TOGO. Ici, vous pouvez vous inscrire au concours, consulter des informations sur nos programmes et découvrir comment rejoindre notre communauté d'étudiants talentueux.
      Qu'attendez-vous? </p>
    <?php
    // $sql = "SELECT DISTINCT Num_ut FROM candidat WHERE :Num_ut IN (SELECT Num_ut FROM candidat)";
    // $requete = $conn->prepare($sql);
    // $requete->bindParam(":Num_ut", $userNum, PDO::PARAM_STR);
    // $requete->execute();
    // $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    if ($_SESSION['post'] == 0) { ?>
      <a href="consultation.php">Consulter candidature</a>
    <?php } else { ?>
      <a href="formulaire.php">Postuler votre candidature</a>
    <?php } ?>
  </div>

  <div class="deux">
        <div class="image">
            <img src="../images/BackIAI.jpg" alt="">
        </div>
        <div class="content">
            <h1>À propos de l'IAI-TOGO</h1>
            <p>
            L'Institut Africain d'Informatique (IAI) est une école inter-États d'enseignement supérieur. L'IAI-TOGO, représentation du Togo, offre des formations dans le domaine de l'informatique, y compris le Cycle Ingénieur des Travaux Informatiques et la Licence Professionnelle. Notre mission est de fournir une éducation de qualité et de former des professionnels compétents dans le domaine de l'informatique.
            </p>
        </div>
    </div>

</div>

<footer>
  <?php include_once("footer.php") ?>
</footer>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

</body>

</html>