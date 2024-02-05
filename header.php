<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <script defer src="../js/header.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="brand-title"><img src="../images/logo-2.png" alt=""></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="pageAcc2.php">Accueil</a></li>
                <li><a href="#">À propos du concours</a></li>
                <li><a href="admin_form.php">Administration</a></li>
                <li><a href="#">Qui sommes-nous</a></li>
                <li><a href="#" onclick="togglePopup()"><?php echo $_SESSION['Nom_ut']; ?></a></li>
            </ul>
        </div>
    </nav>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>