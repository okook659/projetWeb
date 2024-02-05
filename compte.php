<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>compte</title>
  <link rel="stylesheet" href="../css/compte.css">
</head>
<body>
  <!-- pour le compte-->
<div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
      <div class="close-btn" onclick="togglePopup()">&times;</div>
      <h2>Informations sur votre compte</h2>
      <p>L'utilisateur connecté est : <?php echo $_SESSION['Nom_ut']; ?> <br><a href="pageAccAbsolute.php">Se déconnecter</a></p>
    </div>
  </div> 
  <!-- fin de compte -->
  <script src="../js/compte.js"></script>
</body>
</html>
