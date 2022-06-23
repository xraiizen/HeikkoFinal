<?php include('../Models/server.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
    <link rel="stylesheet" href="assets/css/connexion.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="vertical50">
            <div class="title">
                <h1 class="FontTitlePage">Connexion</h1>
            </div>
            <div class="content">
            <form method="post" action="Accueil.php">
            <?php include('../Models/errors.php') ?>
            <input class="inputUserInfo FontParagraphe" type="email" placeholder="Email" name="email">
            <input class="inputUserInfo FontParagraphe" type="password" placeholder="Mot de passe" name="password">
                    <a class="flright FontParagraphe" href="#">Mot de passe oublié</a>
                    <input class="validate FontParagraphe" type="submit" name="login_user" value="Connexion">
                </form>
            </div>
            <div class="center">
                <p class="FontParagraphe">Vous n'avez pas de compte ? <a href="inscription.php">S'inscrire</a></p>
            </div>
        </div>
    </div>
</body>

</html>