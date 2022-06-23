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
    <title>Calendrier</title>
</head>
<body>
<?php require("assets/widgets/widget.php");
 echo renderHeader(array('fa-solid fa-bell'));
?>
    <main>
        <?php
        echo renderTitleSectionWithLink('Mardi 15 février','Février','#');
        echo 'Toto Calendrier';
        ?> <section id="TenuProgrammer"> <?php
        echo renderTitleSectionWithLink("Aujourd'hui",'Ensoleillé 13°','#');
        echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
        echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
        echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
        echo renderTenuEnregistrer("assets/img/contenu/img.jpg","29 dec","09h20","11h20","Tenue Professionnelle pattes d'oie","Rendez-vous notaire");
        ?></section><?php
        echo renderMenu("index","dressing","AjouterUnVetement","Calendrier","Profil");
        ?>
         <?php //echo renderOneItemCategorieVetement('Categorie du vetement');?>
    
        </main>
        <div class="space"></div>
</body>
</html>