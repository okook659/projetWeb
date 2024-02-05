<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAI-TOGO Administration</title>
    <link rel="stylesheet" href="../css/admin_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="header">
  <header>
    <?php
      include_once 'header.php';
    ?>
    <h1>IAI-TOGO Administration</h1>
    <p>Veuillez vous connecter pour accéder au volet de l'administration</p>
    </header>
</div>
    <section>
    <form action="admin_process.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required placeholder="entrez votre nom">

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required placeholder="entrez le mot de passe">

      <button type="submit">Connexion</button>
    </form>
    </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <footer>
  <?php include_once("footer.php");  ?>
  </footer>
</body>
</html>