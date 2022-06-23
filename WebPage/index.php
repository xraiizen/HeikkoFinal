<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/widget.css">
    <link rel="stylesheet" href="assets/css/meteo.css">
    <title>Document</title>
</head>

<body>
    <?php require("assets/widgets/widget.php"); 
    session_start();
    unset($_SESSION['categorie']);
    unset($_SESSION['marque']);
    unset($_SESSION['couleur']);
    unset($_SESSION['saison']);
    echo renderHeader(array('fa-solid fa-bell'));
    ?>
    <main>
        <div class="container">
            <section id="TenuDuJour">
                <?php
    echo renderTitleSection(array('Mon outfit du jour'));
    echo renderOutfitday("assets/img/contenu/img.jpg","Tenue Professionnelle pattes d'oie","Vert","Professionel","Pattes d'oie");
   ?> </section><?php
    echo renderMeteo();
    ?>
            <section id="TenuProgrammer">
                <?php
    echo renderTitleSection(array('Mes tenues programmées pour cette semaine'));
    echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
    echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
    echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
    echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
    ?>
            </section>
            <?php
     echo renderTitleSection(array('Mes outfits favorites'));
     echo renderOutfitday("assets/img/contenu/img.jpg","Tenue Professionnelle pattes d'oie","Vert","Professionel","Pattes d'oie");
    echo renderMenu("index","dressing","AjouterUnVetement","Calendrier","Profil");
   ?>
            </div>
    </main>
    <div class="space"></div>
</body>

</html>