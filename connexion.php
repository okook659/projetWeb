<?php 
    try { $conn = new PDO("mysql:host=localhost;dbname=inscriptions", "root", ""); }
    catch (PDOException $e) { echo "Erreur : ". $e->getMessage(); }
?>