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
    <title>Marque</title>
</head>
<body>
<?php require("assets/widgets/widget.php");
session_start();
    echo renderHeader(array('fa-solid fa-bell'));
    ?>
    <main>
        <div class="container">
        <?php
        $elements= ["Kiabi","Zara","H&M","Orchestra","Nike","Shein","Adidas","Pimkie","Bershka","Pull & Bear","Lacoste","Tommy Hilfiger","Jules"];
        foreach($elements as $element)
        {
            echo renderInputAddVetement('AjouterUnVetement.php?marque='.$element,$element,'');
        }
        
        ?>
        </div>
    </main>
</body>
</html>