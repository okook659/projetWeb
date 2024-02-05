<?php include_once ('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stats.css">
    <link rel="stylesheet" href="sidebar.css">
  </head>
<body> 
       <header>
       <div class="container">
    <?php  include_once ('nav.php'); ?>
    
            </div>
    </header>
        <main>
    <div id="side">
        <ul>
            <li><a href="#stat1" class="link">La liste des candidats inscrits au concours</a></li>
            <li><a href="#stat2" class="link">La liste des candidats inscrits au concours par sexe </a></li>
            <li><a href="#stat3" class="link">La liste des candidats par nationalité </a></li>
            <li><a href="#stat4" class="link">Liste des candidats inscrits doublement au concours</a></li>
            <li><a href="#stat5" class="link">Liste des candidats ayant omis d'uploader un document</a></li>
            <li><a href="#stat6" class="link">Le nombre total d'inscrit</a></li>
            <li><a href="#stat7" class="link">Le nombre de candidat par nationalité</a></li>
            <li><a href="#stat8" class="link">Le nombre de candidat par série</a></li>
            <li><a href="#stat9" class="link">Le nombre de candidat par sexe</a></li>
            <li><a href="#stat10" class="link">Histogramme</a></li>
        </ul>
    </div>

    <div id="main">
  <!-- les statistiques -->

      <?php
      echo '<div id="stat1">';
   echo '<h2>liste des candidats</h2>';
            $sql = "SELECT Nom,Prenom FROM candidat";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage
        ?>
        <table>
        <?php
        echo "<tr><th>Nom</th><th>Prénoms</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . $row["Nom"] . "</td><td>" . $row["Prenom"] . "</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat2">';
        echo' <h2>liste des candidats par sexe</h2>';
            $sql = "SELECT Nom,Prenom,Sexe FROM candidat Group by Sexe";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table>
        <?php
        echo "<tr><th>Nom</th><th>Prénoms</th><th>Sexe</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . strval($row["Nom"]) . "</td><td>" . $row["Prenom"] . "</td><td>" . $row['Sexe'] . "</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat3">';
          
        echo' <h2>Liste des candidats par nationalité</h2>';
            $sql = "SELECT Nom,Prenom,Nationalite FROM candidat Group by Nationalite";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table>
        <?php
        echo "<tr><th>Nom</th><th>Prénoms</th><th>Nationalite</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . strval($row["Nom"]) . "</td><td>" . $row["Prenom"] . "</td><td>" . $row['Nationalite'] . "</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat4">';
        echo' <h2>Liste des candidats inscrits doublement au concours</h2>';
            $sql = "SELECT DISTINCT Nom,Prenom FROM candidat WHERE (Nom IN (SELECT Nom FROM candidat GROUP BY Nom HAVING COUNT(*) > 1) and Prenom IN (SELECT Prenom FROM candidat GROUP BY Prenom HAVING COUNT(*) > 1))";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        echo "<table>";
        echo "<tr><th>Nom</th><th>Prénoms</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) { 
            echo "<tr><td>" . strval($row["Nom"]) . "</td><td>" . $row["Prenom"] ."</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat5">';
        echo' <h2>liste des candidats ayant omis d\'uploader un document</h2>';
    //liste des candidats ayant omis d'uploader un document
            $sql = "SELECT DISTINCT Nom,Prenom FROM candidat WHERE ((ActeNaissance is NULL) or (CopieNationalite is NULL) or (AttestationBac is NULL))";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table class="tableau">
        <?php
        echo "<tr><th>Nom</th><th>Prénoms</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . strval($row["Nom"]) . "</td><td>" . $row["Prenom"] . "</td></tr>";
        }
        echo "</table></div>";
        echo' <h2>Nombre total de candidats inscrits</h2>';
        echo '<div id="stat6">';
        
            $sql = "SELECT COUNT(*) as NombreInscrits FROM candidat";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        
        //affichage
          echo $resultat['NombreInscrits'];
        echo "</div>";
        echo '<div id="stat7">'; 
        echo' <h2>Nombre de candidats par nationalité</h2>';
            $sql = "SELECT COUNT(*) as NombreInscrits, Nationalite FROM candidat Group by Nationalite";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table class="tableau">
        <?php
        echo "<tr><th>Nationalité</th><th>Nombre de candidats inscrits</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            if($row['Nationalite']==""){
                echo "<tr><td>Non-déclaré</td><td>" . $row['NombreInscrits'] . "</td></tr>";
            }
            else{
                echo "<tr><td>" . $row['Nationalite'] . "</td><td>" . $row['NombreInscrits'] . "</td></tr>";
            }
        }
        echo "</table></div>";
        echo '<div id="stat8">'; 
        echo' <h2>Nombre de candidats par série</h2>';
            $sql = "SELECT COUNT(*) as NombreInscrits, Serie FROM candidat Group by Serie";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table class="tableau">
        <?php
        echo "<tr><th>Série</th><th>Nombre de candidats inscrits</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . $row['Serie'] . "</td><td>" . $row['NombreInscrits'] . "</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat9">';  
        echo' <h2>Le nombre de candidats par sexe</h2>';
            $sql = "SELECT COUNT(*) as NombreInscrits, Sexe FROM candidat Group by Sexe";
            $requete = $conn->prepare($sql);
            $requete->execute();

            // Fetch all rows
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        
        //affichage

        ?>
        <table class="tableau">
        <?php
        echo "<tr><th>Sexe</th><th>Nombre de candidats inscrits</th></tr>";

        // Affichage des résultats dans un tableau
        foreach ($resultat as $row) {
            echo "<tr><td>" . $row['Sexe'] . "</td><td>" . $row['NombreInscrits'] . "</td></tr>";
        }
        echo "</table></div>";
        echo '<div id="stat10">';
        ?> 
        <img src="histo.php" alt="">
    </div>
<a href="#side"><i class='bx bxs-up-arrow'></i></a>
 </div>
 </main>
</body>
</html>
