<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/pageAcc.css">
</head>

<body>
    <div id="un">
        <div class="sub-un">
            <h1>Bienvenue sur le site d'IAI-TOGO</h1>
            <div id="boutons">
                <button onclick="togglePopup()" class="btn1" id="inscription">S'inscrire</button>
                <button onclick="SecondtogglePopup()" class="btn2">Se connecter</button>
            </div>

            <!-- Le pop up pour s'inscrire-->

            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close-btn" onclick="togglePopup()">&times;</div>
                    <h2>S'inscrire</h2>
                    <form action="register_process.php" method="post">
                        <input type="text" placeholder="Nom" name="username">
                        <span id="usernameErreur"></span>
                        <input type="password" placeholder="Mot de passe" name="password">
                        <span id="passwordErreur"></span>
                        <input type="submit" class="submit1">
                    </form>
                    <p>Vous avez déjà un compte? <a id="connexion-btn" onclick="SecondtogglePopup()">Se connecter</a></p>
                </div>
            </div>

            <!-- Le pop up pour se connecter-->

            <div class="popup" id="popup-2">
                <div class="overlay"></div>
                <div class="content-2">
                    <div class="close-btn" onclick="SecondtogglePopup()">&times;</div>
                    <h2>Se connecter</h2>
                    <form action="login.php" method="post">
                        <input type="text" placeholder="Nom" name="username">
                        <span id="usernameErreur2"></span>
                        <input type="password" placeholder="Mot de passe" name="password">
                        <span id="passwordErreur2"></span>
                        <input type="submit" class="submit2">
                    </form>
                    <p>Vous n'avez pas de compte? <a id="inscription-btn" onclick="togglePopup()">S'inscrire</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="deux">
        <div class="image">
            <img src="../images/BackIAI3.jpg" alt="">
        </div>
        <div class="content">
            <h1>Historique</h1>
            <p>
                En application de la décision du Conseil d’Administration de délocaliser l’IAI, la Représentation du
                TOGO (IAI-TOGO) a ouvert ses portes le 24 octobre 2002. L’accord d’établissement entre la République
                Togolaise et l’Institut Africain d’Informatique a été signée le 12 mai 2006. L’IAI-TOGO propose
                actuellement le cycle de formation des ingénieurs de travaux informatiques (Licence professionnelle en
                informatique). Au terme des trois années de formation, les diplômés peuvent poursuivre leurs études
                supérieures au siège au GABON ou dans les universités occidentales ou asiatiques (UTBM en FRANCE,
                Université-Laval du Québec au CANADA, etc ...)
            </p>
        </div>
    </div>

    <div class="deux">
        <div class="image">
            <img src="../images/BackIAI.jpg" alt="">
        </div>
        <div class="content">
            <h1>L'IAI-SIEGE et ses représentations</h1>
            <p>
                Au lendemain des indépendances, la formation de cadres techniques de haut niveau, adaptés aux besoins socio-économiques des pays apparaissait comme l’une des priorités pour soutenir les actions d’un plan de développement national harmonieux.


C’est ainsi que les chefs d’Etat de l’Organisation Commune Africaine, Malgache et Mauricienne (OCAM), considérant le développement continu et accéléré de l’informatique dans le monde et la nécéssité de disposer d’un personnel qualifié en nombre suffisant pour faire face à ce développement de l’informatique, ont convenu dans le cadre de leur politique de renforcement de la solidarité africaine de créer une école dénommée Institut Africain d’Informatique (IAI) en vue de former le personnel informatique dont ils ont besoin.


L’institut Africain d’Informatique est une école supérieure en informatique. La convention portant création de l’institut et les statuts y afférent ont été signés le 29 janvier 1971 à Fort Lamy (actuel Ndjaména) en république du TCHAD. L’accord de siège entre l’IAI et le GABON a été signé en janvier 1975. Il est par conséquent un établissement inter-Etats.

Dans l’optique d’approcher l’institut des pays membres et pour des soucis de performance toujours plus accrue, le conseil d’administration de l’IAI a autorisé la délocalisation du premier cycle de l’institut dans les pays membres. C’est ainsi que l’IAI-Cameroun a été créé en 1999, l’IAI-Niger en 2001, et l’IAI-Togo en 2002.
            </p>
        </div>
    </div>
    <?php include_once('footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="../js/PageAcc.js"></script>
    <script src="../js/PageAccSecond.js"></script>
    <script src="../js/verif.js"></script>
</body>

</html>