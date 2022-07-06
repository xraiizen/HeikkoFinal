<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/main.css"/> -->
    <!-- <link rel="stylesheet" href="../css/inscription.css"/> -->
    <title>Inscription</title>
</head>
<body>
<?php
    require('./models/connect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['firstname'])) {
        // removes backslashes
        $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
        $firstname = mysqli_real_escape_string($GLOBALS['conn'], $firstname);

        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($GLOBALS['conn'], $lastname);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($GLOBALS['conn'], $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($GLOBALS['conn'], $password);

        $query    = "INSERT into users (firstname_user, lastname_user, email_user, password_user, etat_user)
                     VALUES ('$firstname','$lastname','$email','" . md5($password) . "', 1)";
        $result   = mysqli_query($GLOBALS['conn'], $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="firstname" placeholder="firstname" required />
        <input type="text" class="login-input" name="lastname" placeholder="lastname" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
    <!-- <div class="container">
        <div class="vertical50">
            <div class="title">
                <h1 class="FontTitlePage">Inscription</h1>
            </div>
            <div class="content">
            <form method="post" action="inscription.php">
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
    </div> -->
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    textarea:focus, input:focus{
    outline: none;
}
    body{
        width: 100%;
        height: 100vh;
        display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    }
    .formFlexStart{
        display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    }
    .formCenter{
        display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    }
    .login-input{
        width: 544px;
        height: 77px;
        background: rgba(81, 147, 255, 0.1);
        border:none;
        border-radius: 10px;
        margin-bottom: 12px;
        margin-top: 12px;
        padding-left: 30px;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 17px;
color: #182C4D;

/* opacity: 0.5; */
    }
    .login-button{
        border:none;
        width: 544px;
height: 72px;
        background: #5193FF;
border-radius: 10px;
margin-top: 50px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 20px;

color: #FFFFFF;
    }
    p{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 17px;
color: #284A80;
    }
    a{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 17px;
color: #5193FF;
    }
    h1{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 42px;
line-height: 29px;
color: #101D33;
margin-bottom: 60px;
    }
</style>
