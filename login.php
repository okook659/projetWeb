<?php
    session_start();
    include_once 'connexion.php';
//si la méthode d'envoi du formulaire est égale à la méthode post on stocke les username et password pour les vérifications
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT Num_ut,Nom_ut,Mot_de_passe from utilisateur where Nom_ut = '$username'";
        $requete = $conn->prepare($sql);
        $requete->execute();
    //récupération du résultat dans une variable resultat
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if(password_verify($password, $resultat['Mot_de_passe'])){
            $_SESSION['user'] = true;
            $_SESSION['Num_ut'] = $resultat['Num_ut'];
            $_SESSION['Nom_ut'] = $resultat['Nom_ut'];
        }
        $sql2 = "SELECT COUNT(*) as nbr FROM candidat WHERE Num_ut=:Num_ut";
        $requete2 = $conn->prepare($sql2);
        $requete2->bindParam(":Num_ut",$_SESSION['Num_ut']);
        $requete2->execute();
        $resultat2 = $requete2->fetch(PDO::FETCH_ASSOC);
        if($resultat2['nbr'] == 0 ){
            $_SESSION["post"] = 1;
        }
        else if($resultat2['nbr'] > 0){
            $_SESSION["post"] = 0;
        }
        header('Location: PageAcc2.php');
    }
    
?>