<?php
include_once ('connexion.php');
$sql2 = "SELECT COUNT(*) as NombreInscrits, Nationalite FROM candidat Group by Nationalite";
$requete2 = $conn->prepare($sql2);
$requete2->execute();
$nombreEtudiantsParNationalite = $requete2->fetch(PDO::FETCH_ASSOC);

// $nombreEtudiantsParNationalite = [
//     'togolaise' =>2,
//     'beninois' =>3,
// ];

$largeurImage = 800;
$hauteurImage = 500;
$espaceEnBas = 20; // Espace en pixels entre l'axe des abscisses et la bordure en bas
$espaceEntreBandes = 20; // Espace en pixels entre les bandes
$im = imagecreate($largeurImage, $hauteurImage + $espaceEnBas);
$blanc = ImageColorAllocate($im, 255, 255, 255);
$noir = ImageColorAllocate($im, 0, 0, 0);
$bleu = ImageColorAllocate($im, 0, 255, 0);

// Dessiner l'axe des ordonnées
ImageLine($im, 80, 10, 80, $hauteurImage - $espaceEnBas, $noir);

// Dessiner l'axe des abscisses
ImageLine($im, 80, $hauteurImage - $espaceEnBas, $largeurImage - 10, $hauteurImage - $espaceEnBas, $noir);

// Dessiner les barres pour chaque nationalité
$positionX = 120;
$fontSize = 12; // Taille de la police
$fontPath = 'BALLW___.TTF'; // Remplacez par le chemin vers une police TrueType (TTF)
while($row = $requete2->fetch(PDO::FETCH_ASSOC)){
    $hauteurImageRectangle = round(($row['NombreInscrits'] * ($hauteurImage - 40)) / 10);
    ImageFilledRectangle($im, $positionX - 15, $hauteurImage - $hauteurImageRectangle, $positionX + 15, $hauteurImage - $espaceEnBas, $bleu);
    imagettftext($im, $fontSize, 0, $positionX - 15, $hauteurImage - $espaceEnBas + 15, $noir, $fontPath, $row['Nationalite']);
    imagettftext($im, $fontSize, 0, $positionX - 15, $hauteurImage - $hauteurImageRectangle - 25, $noir, $fontPath, $row['NombreInscrits']);

    $positionX += 55 + $espaceEntreBandes; // Augmenter la position X pour la prochaine nationalité avec espace entre bandes
}

// Affichage de l'image
header("Content-type: image/png");
ImagePng($im);
ImageDestroy($im);
?>
