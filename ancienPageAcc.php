<?php
    session_start();
?>    


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IAI-TOGO </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    header {
      background-image: url("iai1.jpeg");
      background-size: cover; 
      background-position: center; 
      padding: 150px 0; 
    }
    section {
      background-color: #ffffff;
      padding: 50px 0;
    }  
  </style>
</head>
<body class="bg-light bg-gradient" >

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <a class="navbar-brand" href="pageAcc.php"><img src="télécharger (1).jpeg" alt="logo" class="rounded-circle w-50" > </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
     
    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="pageAcc2.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Accueil">À propos de l'IAI-TOGO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#À propos de l'IAI-TOGO">À propos du concours</a>
                    </li>
                    <li  class="nav-item">
                       <a class="nav-link" href="admin_form.php">Administration</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                </ul>
    </div>
    
  </nav>

  <!-- Hero Section -->
  <header >
  
   
  </header>
  <section>
  <div class=" justify-content-start" >
      <p>L'utilisateur connecté est : <?php echo $_SESSION['nom']; 
    if (isset($_SESSION['nom']) and !empty($_SESSION['nom'])){
        echo '</button><div class="mt-3"><a href="logout.php" class="btn btn-outline-danger" >Déconnexion</a></div>';
          
    }
    ?> 
    </p>
      </div>
  </section>
  <!-- Accueil Section -->
  <section class="bg-light">
  <div class="container py-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 id="Accueil">Accueil</h2>
        <p>Bienvenue sur la plateforme en ligne de l'IAI-TOGO. Ici, vous pouvez vous inscrire au concours, consulter des informations sur nos programmes et découvrir comment rejoindre notre communauté d'étudiants talentueux.</p>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-6">
      <a href="consultation.php" class="btn btn-primary">Consulter candidature</a>
      <a href="formulaire.php" class="btn btn-success">Postuler au concours
      </a>
    </div>
    </div>
    </div>
  </div>
    </section>
   
  <!-- À propos de l'IAI-TOGO Section -->
<section class="bg-light">
  <div class="container py-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row gx-5">
      <div class="col-md-6"  >
        <h2 id="À propos de l'IAI-TOGO">À propos de l'IAI-TOGO</h2>
        <p>L'Institut Africain d'Informatique (IAI) est une école inter-États d'enseignement supérieur. L'IAI-TOGO, représentation du Togo, offre des formations dans le domaine de l'informatique, y compris le Cycle Ingénieur des Travaux Informatiques et la Licence Professionnelle. Notre mission est de fournir une éducation de qualité et de former des professionnels compétents dans le domaine de l'informatique.</p>
      </div>
      <div class="col-md-4 offset-md-2">
        <img src="télécharger.jpeg" alt="IAI-TOGO Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>

  <!-- Information Section -->
<section>
  <div class="container shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
      <div class="col-md-6  "  >
        <h2 id="À propos du concours" >À propos du concours</h2>
        <p>Le Ministre de la Planification du Développement et de la Coopération porte à la connaissance du public qu’il est ouvert en session unique un concours d’entrée en 1ère année du Cycle « Ingénieur des Travaux Informatiques et Licence Professionnelle » options de l’Institut Africain d’Informatique, Représentation du Togo (IAI-TOGO).</p>
        <!-- Autres détails sur le concours ici -->
      </div>
      <div class="col-md-4 offset-md-2">
        <img src="OIP (1).jpeg" alt="Concours Image" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
      <div class="col-md-4">
        <h2>Lieu du concours</h2>
        <p>Le concours se déroulera dans les centres d’écrit suivants : Centre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé, Lycée de Kara 1 (Kara) à Lama Kara (Préfecture de la Kozah).</p>
      </div>
      <div class="col-md-6 offset-md-2">
        <h2>Conditions à remplir</h2>
        <p>Pour participer au concours, les candidats doivent remplir les conditions suivantes :</p>
        <ul>
          <li>Seuls les étudiants dont le BAC est vieux d’au plus deux (02) ans sont acceptés pour ce concours.</li>
          <li>Les séries acceptées pour le concours sont : C, D, E, F1 ou F2.</li>
          <li>Confirmation des informations déclarées en uploadant les trois (3) documents en format .pdf :</li>
          <ul>
            <li>Une copie de l'acte de naissance</li>
            <li>Une copie de la nationalité</li>
            <li>Une copie de l'attestation du BAC II</li>
          </ul>
        </ul>
      </div>
    </div>
  </div>

  <!-- Épreuves Section -->
  <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
      <div class="col-md-12">
        <h2>Épreuves du concours</h2>
        <p>Les épreuves du concours comprendront des tests écrits et oraux portant sur les matières suivantes :</p>
        <div class="row">
        <div class="col-md-4">
        ANGLAIS
        </div>
        <div class="col-md-4">
        DURÉE: 2 HEURES
        </div>
        <div class="col-md-4">
        COEFFICIENT: 3
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        MATHEMATIQUES
        </div>
        <div class="col-md-4">
        DURÉE: 4 HEURES
        </div>
        <div class="col-md-4">
        COEFFICIENT: 6
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    TECHNIQUES D'EXPRESSION FRANÇAISE
        </div>
        <div class="col-md-4">
        DURÉE: 2 HEURES
        </div>
        <div class="col-md-4">
        COEFFICIENT: 2
        </div>
    </div>
    </div>
  </div>
</section>
<!-- Contact Section -->
<section>
  <div class="container py-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
      <div class="col-md-12"  >
        <h2 id="Contact" >Contact</h2>
        <p>Pour toute question ou information supplémentaire, veuillez nous contacter :</p>
        <ul>
          <li>Email: info@iai-togo.edu</li>
          <li>Téléphone: +228 1234 5678</li>
          <li>Adresse: Rue de l'IAI, Lomé, Togo</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center p-3">
    <div class="container">
      <p>© 2024 IAI-TOGO</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>