<?php
session_start();
$_SESSION['Nom_ut'] = $_POST['username'];
$_SESSION['pswd'] = $_POST['password'];
include_once 'connexion.php';

if(isset($_POST['username'])){
    //on vérifie s'il n'y a pas le même nom d'utilisateur dans la base de données
    $sql1 = "SELECT COUNT(*) FROM utilisateur where Nom_ut = :Nom_ut";
    $requete1 = $conn->prepare($sql1);
    $requete1->execute(['Nom_ut'=>$_POST['username']]);
    $resultat1 = $requete1->fetch(PDO::FETCH_ASSOC);
    if ($resultat1 > 0) {
        header('Location : rechoisir.php');
        // echo "Le nom d'utilisateur ".$_POST['username']." existe déjà. Veuillez en choisir un autre.";
    }
    //lorsque le username est unique
    else{
        //je donne à la variable globale session la valeur du username unique
        $_SESSION['Nom_ut'] = $_POST['username'];
        // Récupérer les données du formulaire
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Insérer les données dans la base de données
        $sql = "INSERT INTO utilisateur (Nom_ut, Mot_de_passe) VALUES ('$username', '$password')";

        if ($conn->query($sql) == TRUE) {
            $_SESSION['user'] = true;
            $_SESSION['Num_ut'] = $resultat['Num_ut'];
            $_SESSION['Nom_ut'] = $resultat['Nom_ut'];
            header('Location: registerConfirm.php');
            exit();}
        // } else {
        //     echo "Erreur lors de l'inscription : " . $conn->error;
        // }

    }
}
//je sais même pas ce que je fous







// Fermer la connexion à la base de données
// $conn->close();
?>