<?php include_once('connexion.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de consultation</title>
    <link rel="stylesheet" href="../css/consultation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <header>
            <?php include_once("header.php") ?>
        </header>
    </div>
    <?php include_once("compte.php") ?>
    <section>

        <?php
        $sql = "SELECT * FROM candidat WHERE Num_ut = :Num_ut";
        $requete = $conn->prepare($sql);
        $requete->bindParam(":Num_ut", $_SESSION['Num_ut'], PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        ?>
        <table class="table table-hover table-danger">
            <tr class="table-warning">
                <th>Titre</th>
                <th>Libelle</th>
            </tr>
            <!-- le nom-->
            <tr>
                <td>Nom du candidat</td>
                <td>
                    <?php 
                    if($resultat['Nom'] != null) {
                    echo $resultat['Nom'];}
                    else{
                        echo ' ';
                    } ?>
                </td>
            </tr>
            <!-- le prénom-->
            <tr>
                <td>Prénoms du candidat</td>
                <td>
                    <?php if($resultat['Prenom'] != null) {
                    echo $resultat['Prenom'];}
                    else{
                        echo ' ';
                    } ?>
                </td>
            </tr>
            <!-- la photo-->
            <tr>
                <td>Photo du candidat</td>
                <td>
                    <?php echo ' <img src="' . $resultat["Photo_ut"] . '" width="50vh">'; ?>
                </td>
            </tr>
            <!-- la date de naissance-->
            <tr>
                <td>Date de naissance du candidat</td>
                <td>
                    <?php if($resultat['DateNaissance'] != null) {
                    echo $resultat['DateNaissance'];}
                    else{
                        echo ' ';
                    }; ?>
                </td>
            </tr>
            <!-- le sexe-->
            <tr>
                <td>Genre du candidat</td>
                <td>
                    <?php if($resultat["Sexe"]!=null){
                     if ($resultat["Sexe"] == "M") {
                        echo "Masculin";
                    } else {
                        echo "Féminin";
                    }}
                    else{
                        echo "";
                    }
                    ?>
                </td>
            </tr>
            <!-- la série-->
            <tr>
                <td>Série d'obtention du BAC du candidat</td>
                <td>
                    <?php if($resultat['Serie'] != null) {
                    echo $resultat['Serie'];}
                    else{
                        echo ' ';
                    }; ?>
                </td>
            </tr>
            <!-- l'année du bac-->
            <tr>
                <td>Année d'obtention du BAC du candidat</td>
                <td>
                    <?php if($resultat['anneeBac'] != null) {
                    echo $resultat['anneeBac'];}
                    else{
                        echo ' ';
                    };; ?>
                </td>
            </tr>
            <!-- la nationalite-->
            <tr>
                <td>Nationalité BAC du candidat</td>
                <td>
                    <?php if($resultat['Nationalite'] != null) {
                    echo $resultat['Nationalite'];}
                    else{
                        echo ' ';
                    }; ?>
                </td>
            </tr>
            <!-- acte de naissance-->
            <tr>
                <td>Copie d'acte de naissance du candidat</td>
                <td>
                    <?php echo $resultat['ActeNaissance']; ?>
                </td>
            </tr>
            <!-- copie de la nationalite-->
            <tr>
                <td>Copie de la nationalité du candidat</td>
                <td>
                    <?php echo $resultat['CopieNationalite']; ?>
                </td>
            </tr>
            <!-- copie de l'attestation du bac-->
            <tr>
                <td>Copie de l'attestation du candidat</td>
                <td>
                    <?php echo $resultat['AttestationBac']; ?>
                </td>
            </tr>
        </table>
    </section>
    <div>


    </div>
    <!-- le pop up pour la confirmation de suppression-->

    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="ThirdtogglePopup()">&times;</div>
            <h2>Suppression de candidature</h2>
            <p>Etes-vous sûr de supprimer votre candidature? Cette action est irréversible</p>
            <a href="suppression.php">Supprimer</a>
        </div>
    </div>

    <a href="modification.php">Modifier votre candidature</a>
    <button onclick="ThirdtogglePopup()">Supprimer votre candidature</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/pageAccSecond.js"></script>
    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>