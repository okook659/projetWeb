<?php
    include_once ('connexion.php');
    $Date_depot = $_POST['Date_depot'];
    $Date_concours = $_POST['Date_concours'];
    $sql = "INSERT INTO concours(Date_depot,Date_concours) Values(:Date_depot, :Date_concours)";
    $requete = $conn->prepare($sql);
    $requete->execute([':Date_depot'=>$Date_depot,':Date_concours'=>$Date_concours]);
?>