<?php include('../Models/server.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/inscription.css"/>
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="vertical50">
            <div class="title">
                <h1 class="FontTitlePage">Inscription</h1>
            </div>
            <div class="content">
            <form method="post" action="inscription.php">
		<?php include('../Models/errors.php') ?>
                    <input class="inputUserInfo FontParagraphe" type="text" name="lastname" placeholder="Nom" value="<?php echo $lastname; ?>">
                    <input class="inputUserInfo FontParagraphe" type="text" name="firstname" placeholder="Prénom" value="<?php echo $firstname; ?>">
                    <input class="inputUserInfo FontParagraphe" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <input class="inputUserInfo FontParagraphe" type="password" placeholder="Mot de passe" name="password_1">
                    <input class="inputUserInfo FontParagraphe" type="password" placeholder="confirmer votre mot de passe" name="password_2">
                    <div class="conditions">
                    <input type="checkbox" id="conditions" name="conditions" checked>
                    <label for="conditions">J'accepte les conditions générales</label>
</div>
                    <input class="validate FontParagraphe" type="submit" name="reg_user" value="Inscription">
                </form>
            </div>
            <div class="center">
                <p class="FontParagraphe">Vous n'avez pas de compte ? <a href="connexion.php">Se connecter</a></p>
            </div>
        </div>
    </div>
</body>

</html>