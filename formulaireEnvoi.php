<?php
    session_start();
        include_once ('connexion.php');

        //année du bac

        if(isset($_POST['anneeBac'])){
            $that_year = intval($_POST['anneeBac']);
            $current_year = date('Y');
            if($current_year-$that_year>2){
                $_SESSION['eligible'] = false;
                header('Location: nonAccepte.php');
            }
        }

        //localisons le user qui souhaite devenir candidat
        $username = $_SESSION['Nom_ut'];
        // Requête SQL pour récupérer le numéro d'utilisateur (ID) en fonction du nom d'utilisateur
        $sql0 = "SELECT Num_ut FROM utilisateur WHERE Nom_ut = :Nom_ut";
        $requete0=$conn->prepare($sql0);
        $requete0->execute(['Nom_ut'=>$username]);
        $resultat = $requete0->fetch(PDO::FETCH_ASSOC);
        //je récupère son num_ut
        $_SESSION['Num_ut'] = $resultat['Num_ut'];
        $sql2 = "INSERT INTO candidat(Num_ut) Values(:Num_ut)";
        $requete2 = $conn->prepare($sql2);
        $requete2->execute(['Num_ut'=>$_SESSION['Num_ut']]);

        //je commence l'insertion

        //j'insère le nom
        if(isset($_POST['nom'])){
            $nom = $_POST['nom'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Nom = :Nom WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Nom'=>$nom, 'Num_ut'=>$_SESSION['Num_ut']]);
        }

        //j'insère le prénom
        if(isset($_POST['prenom'])){
            $prenom = $_POST['prenom'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Prenom = :Prenom WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Prenom'=>$prenom, 'Num_ut'=>$_SESSION['Num_ut']]);
        }

        //j'insère la date de Naissance
        if(isset($_POST['dateNaissance'])){
            $dateNaissance = $_POST['dateNaissance'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET DateNaissance = :DateNaissance WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['DateNaissance'=>$dateNaissance, 'Num_ut'=>$_SESSION['Num_ut']]);
        }

        //traitons le cas de la photo
        if(isset($_FILES['photo'])){
            //je récupère la photo
            $tmpPhoto = $_FILES['photo']['tmp_name'];
            $namePhoto = $_SESSION['Num_ut']."-".$_SESSION['Nom_ut'].".jpeg";
            //je spécifie le chemin d'accès vers le fichier
            $pathPhoto = "../infosEtudiant/photo/";
            //je sauvegarde le fichier chez moi
            move_uploaded_file($tmpPhoto, $pathPhoto.$namePhoto);
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Photo_ut = :Photo_ut WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Photo_ut'=>$pathPhoto.$namePhoto, 'Num_ut'=>$_SESSION['Num_ut']]);
        }
        
        
        //récupérons la nationalité
        if(isset($_POST['nationalite'])){
            $nationalite = $_POST['nationalite'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Nationalite = :Nationalite WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Nationalite'=>$nationalite, 'Num_ut'=>$_SESSION['Num_ut']]);
        }
        
        //récupérons le sexe
        if(isset($_POST['sexe'])){
            $sexe = $_POST['sexe'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Sexe = :Sexe WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Sexe'=>$sexe, 'Num_ut'=>$_SESSION['Num_ut']]);
        }
        

        //série

        if(isset($_POST['serie'])){
            $serie = $_POST['serie'];
            //je mets dans la base de données
            $sql = "UPDATE candidat SET Serie= :Serie WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->execute(['Serie'=>$serie, 'Num_ut'=>$_SESSION['Num_ut']]);
        }
        

        //acte naissance
        if(isset($_FILES['acteNaissance'])){
            //je récupère
            $tmpNaiss = $_FILES['acteNaissance']['tmp_name'];
            $nameNaiss = $_SESSION['Num_ut']."-".$_SESSION['Nom_ut'].".pdf";
            //je spécifie le chemin d'accès vers le fichier
            $pathNaiss= "../infosEtudiant/acteNaissance/";
            $fullPathNaiss = $pathNaiss.$nameNaiss;
            //je sauvegarde le fichier chez moi
            move_uploaded_file($tmpNaiss, $pathNaiss.$nameNaiss);
            //je mets dans la base de données
            $sql = "UPDATE candidat SET ActeNaissance = :ActeNaissance WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->bindParam(":ActeNaissance", $fullPathNaiss);
            $requete->bindParam(":Num_ut", $_SESSION["Num_ut"]);
            $requete->execute();
        }
        //copie nationalité
        if(isset($_FILES['copieNationalite'])){
            //je récupère
            $tmpNatio = $_FILES['copieNationalite']['tmp_name'];
            $nameNatio = $_SESSION['Num_ut']."-".$_SESSION['Nom_ut'].".pdf";
            //je spécifie le chemin d'accès vers le fichier
            $pathNatio = "../infosEtudiant/nationalite/";
            $fullPathNatio = $pathNatio.$nameNatio;
            //je sauvegarde le fichier chez moi
            move_uploaded_file($tmpNatio, $pathNatio.$nameNatio);
            //je mets dans la base de données
            $sql = "UPDATE candidat SET copieNationalite = :copieNationalite WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->bindParam(":copieNationalite", $fullPathNatio);
            $requete->bindParam(":Num_ut", $_SESSION["Num_ut"]);
            $requete->execute();
        }

        //attestation bac
        if(isset($_FILES['attestationBac'])){
            //je récupère
            $tmpAtt = $_FILES['attestationBac']['tmp_name'];
            $nameAtt = $_SESSION['Num_ut']."-".$_SESSION['Nom_ut'].".pdf";
            //je spécifie le chemin d'accès vers le fichier
            $pathAtt = "../infosEtudiant/attestationBac/";
            $fullPathAtt = $pathAtt.$nameAtt;
            //je sauvegarde le fichier chez moi
            move_uploaded_file($tmpAtt, $pathAtt.$nameAtt);
            //je mets dans la base de données
            $sql = "UPDATE candidat SET attestationBac = :attestationBac WHERE Num_ut = :Num_ut";
            $requete = $conn->prepare($sql);
            $requete->bindParam(":attestationBac", $fullPathAtt);
            $requete->bindParam(":Num_ut", $_SESSION["Num_ut"]);
            $requete->execute();
        }
        $_SESSION["post"] = 0;
        // header("location: pageAcc2.php");
?>