<?php
session_start();
include_once("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Modification</title>
    <link rel="stylesheet" href="../css/formulaire.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<?php 
    //je vais mettre les requêtes de récupération de ce qu'il a déjà saisi
    $sql = "SELECT * FROM candidat WHERE Num_ut=:Num_ut";
    $requete = $conn->prepare($sql);
    $requete->bindParam(":Num_ut", $_SESSION["Num_ut"], PDO::PARAM_STR);
    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

    <a href="consultation.php">Revenir</a>
    <div class="all">
        <div class="image">
            <img src="../images/fafa.jpeg" alt="">
        </div>
        <div class="formulaire">
            <div class="titre">
                <h1>Formulaire de Modification</h1>
            </div>

            <div class="tout">
                <form action="formulaireEnvoi.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <fieldset>
                            <legend>Votre idendité</legend>
                            <table>
                                <tr>
                                    <td>
                                        <label for="nom">Nom : </label>
                                    </td>
                                    <td>
                                        <input type="text" name="nom" id="nom" <?php 
                                        if($resultat[0]['Nom'] != null){
                                            echo 'value="'.$resultat[0]["Nom"].'"'; }?> >
                                            
                                        <span id="ErreurNom"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="prenoms">Prénoms : </label>
                                    </td>
                                    <td>
                                        <input type="text" name="prenom" id="prenom" <?php 
                                        if($resultat[0]['Prenom'] != null){
                                            echo 'value="'.$resultat[0]["Prenom"].'"'; }?>>
                                        <span id="ErreurPrenom"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="dateNaissance">Date de naissance :</label>
                                    </td>
                                    <td>
                                        <input type="date" name="dateNaissance" id="dateNaissance" <?php 
                                        if($resultat[0]['DateNaissance'] != null){
                                            echo 'value="'.$resultat[0]["DateNaissance"].'"'; }?>>
                                        <span id="ErreurDateNaissance"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="sexe">Sexe : </label>
                                    </td>
                                    <td>
                                        <select name="sexe" id="sexe">
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                                        <span id="ErreurSexe"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="nationalite">Nationalité : </label>
                                    </td>
                                    <td>
                                        <select name="nationalite" id="nationalite" required>
                                            <option value="Togolaise">Togo</option>
                                            <option value="Senegalaise">Sénégal</option>
                                            <option value="Gabonaise">Gabon</option>
                                            <option value="Béninoise">Bénin</option>
                                            <option value="Burkiné">Burkina-Faso</option>
                                            <option value="Camerounaise">Cameroun</option>
                                            <option value="Centrafricaine">Centrafrique</option>
                                            <option value="Ivoirienne">Côte d'Ivoire</option>
                                            <option value="RDC">République de Congo</option>
                                            <option value="Congolaise">Congo Brazaville</option>
                                            <option value="Tchadienne">Tchad</option>
                                            <option value="Nigerienne">Niger</option>
                                            <span id="ErreurNationalite"></span>
                                    </td>
                                </tr>


                            </table>
                        </fieldset>
                    </div>
                    <br>
                    <div>
                        <fieldset>
                            <table>

                                <legend>Cursus scolaire</legend>
                                <tr></tr>
                                <tr>
                                    <td>
                                        <label for="serie">Série du BAC : </label>
                                    </td>
                                    <td>
                                        <select name="serie" id="serie">
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F1">F1</option>
                                            <option value="F2">F2</option>
                                        </select>
                                        <span id="ErreurSerie"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="anneeBac">Année d'obtention du BAC : </label>
                                    </td>
                                    <td>
                                        <input type="number" id="anneeBac" name="anneeBac" <?php 
                                        if($resultat[0]['anneeBac'] != null){
                                            echo 'value="'.$resultat[0]["anneeBac"].'"'; }?>>
                                        <span id="ErreurObtentionBac"></span>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <br>
                        <fieldset>
                            <table>
                                <legend>Pièces jointes</legend>
                                <tr>
                                    <td>
                                        <label for="photo">Photo :</label>
                                    </td>
                                    <td>
                                        <input type="file" name="photo" id="photo" accept="image/*" <?php 
                                        if($resultat[0]['Photo_ut'] != null){
                                            echo 'value="'.$resultat[0]["Photo_ut"].'"'; }?>>
                                        <span id="ErreurPhoto"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="acteNaissance">copie de l'acte de naissance </label>
                                    </td>
                                    <td>
                                        <input type="file" name="acteNaissance" id="acteNaissance"
                                            accept="application/pdf">
                                        <span id="ErreurActeNaissance"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="copieNationalite">Copie de la nationalité</label>
                                    </td>
                                    <td>
                                        <input type="file" name="copieNationalite" id="copieNationalite"
                                            accept="application/pdf">
                                        <span id="ErreurCopieNationalite"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="attestationBac">Copie de l'attestation du BAC II </label>
                                    </td>
                                    <td>
                                        <input type="file" name="attestationBac" id="attestationBac"
                                            accept="application/pdf">
                                        <span id="ErreurAttestationBac"></span>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <br><div class="envoi-btn">
                        <input id="btn" type="submit"></input>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="exercice1.js"></script>
</body>

</html>