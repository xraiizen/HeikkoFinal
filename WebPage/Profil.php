<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/widget.css">
    <link rel="stylesheet" href="assets/css/clickAndDrag.css">
    <title>Profil</title>
</head>

<body>
    <?php require("assets/widgets/widget.php"); 
    echo renderHeader(array('fa-solid fa-bell'));
    ?>
    <main>
        <div class="container">
            <div class="profil_header">
            <a href="#"><img class="img_arround" src="assets/img/contenu/img.jpg" alt="picture"></a>
                <h1>Etienne</h1>
        </div>
        <?php
        echo renderTitleSection(array("Informations Personnelles"));?>

<div class="data_profil">
            <div class="info">
                <p>Date de naissance</p>
                <input type="date" value="03/07/2022">
                <img src="assets/img/icons/Back_icon.png" alt="backicon">
            </div>

            <div class="info">
                <p>Adresse mail</p>
                <input type="email" value="hello@heikko.fr">
                <img src="assets/img/icons/Back_icon.png" alt="backicon">
            </div>
            <div class="info">
                <p>Téléphone</p>
                <input type="text" value="0782288564">
                <img src="assets/img/icons/Back_icon.png" alt="backicon">
            </div>
            <div class="info">
                <p>Mot de passe</p>
                <input type="password" value="heikkopassword">
                <img src="assets/img/icons/Back_icon.png" alt="backicon">
            </div>
        </div>
        <?php


        echo renderMenu("index","dressing","AjouterUnVetement","Calendrier","Profil");
        ?>
        </div>
    </main>
</body>

</html>

<style>
    .profil_header{
        margin-top: 40px;
        
        width: 100%;
        display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}
    .img_arround{
        width: 133px;
height: 133px;
border-radius: 50%;
margin-bottom: 20px;
    }
    .info{
        display: flex;
        justify-content: space-between;
        align-items: center;
    width: 100%;
    height: 63px;
    border-bottom: 1px solid rgba(81, 147, 255, 0.1);
    }
    .info input{
        width: 42%;
        text-decoration: none;
        border: none;
    }
    .info input:focus{
        text-decoration: none;
        border: none;
        outline: none;
    }
</style>