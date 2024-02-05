<?php
    session_start();
    $_SESSION['Nom_admin'] = $_POST['username'];
    include_once 'connexion.php';
//si la méthode d'envoi du formulaire est égale à la méthode post on stocke les username et password pour les vérifications
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT Nom_admin,Mot_de_passe from administrateur where Nom_admin = '$username'";
        $requete = $conn->prepare($sql);
        $requete->execute();
    //récupération du résultat dans une variable resultat
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if(($password == $resultat['Mot_de_passe']) && ($username == $resultat['Nom_admin'])){
            $_SESSION['admin'] = true;
            header('Location: stats.php');
            exit();
        }
        else{
            echo 'Nom d\'utilisateur ou mot de passe incorrect.';
        }
    }

    

    

?>