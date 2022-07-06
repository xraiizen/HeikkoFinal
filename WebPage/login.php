<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('./models/connect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($GLOBALS['conn'], $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($GLOBALS['conn'], $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE email_user='$username'
                     AND password_user='" . md5($password) . "'";
        $result = mysqli_query($GLOBALS['conn'], $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <div class="formFlexStart">
        <h1 class="login-title">Connexion</h1>
        <input type="email" class="login-input" name="username" placeholder="adresse mail" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Mot de passe"/>
        </div>
        <div class="formCenter">
        <input type="submit" value="Connexion" name="submit" class="login-button"/>
        <p class="link">Vous n’avez pas de compte?<a href="inscription.php">S'inscrire</a></p>
        </div>
  </form>
<?php
    }
?>
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