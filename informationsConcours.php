<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informations Concours</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajoutez votre style personnalisé ici */
        .container {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            margin-top: 20px;
        }

        table {
            width: 100%;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <header>
    <div class="container">
    <?php  include_once ('nav.php'); ?>
            </div>
       
    </header>
    <main>
    
        

        <div class="container mt-5">
            <div class="container"><h1>Informations relatives au concours</h1></div>
        <div class="container">
        <form action="informationsConcoursTraitement.php" method="POST">
            <div>
            <table>
                <tr>
                    <td>
                        <label for="Date_depot">Date limite de dépôt des dossiers </label>
                    </td>
                    <td>
                        <input type="date" name="Date_depot" id="Date_depot">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_concours">Date du concours</label>
                    </td>
                    <td>
                        <input type="date" name="Date_concours" id="date_concours">
                    </td>
                </tr>
               
            </table>
        <!-- </fieldset> -->
        </div>
        <br>
        <a href="pageAcc2.php"><input type="submit"></input></a>
        
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    </main>
</body>
</html>