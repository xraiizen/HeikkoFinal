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
    <title>Ajouter un vetement</title>
</head>

<body>
 <?php
session_start();
 require_once("assets/widgets/widget.php");
 require_once("models/allFunctions.php");

 if ( isset($_FILES['fic']) )
      {
          transfert();

        //   ajoutVetement();
      }
 echo renderHeader(array('fa-solid fa-bell'));?>
    <main>
        <section class="ajoutVetement">
        <form enctype="multipart/form-data"  action="#" method="post">
        <div class="fileadd">
            <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
            <label for="imgadd" class="label-file"><p>+ Ajouter photo</p></label>
                <input id="imgadd" type="file" name="fic" size=50 />
            </div>

            <!-- Categorie -->
            <div class="containerInputAddVetement">
                <a href="categorieVetement">
                    <p>Catégorie</p>
                    <p style="margin-left:50px;"><?php if(isset($_GET['categorie'])){$_SESSION['categorie']=$_GET['categorie'];echo $_GET['categorie'];}else if(isset($_SESSION['categorie'])){echo $_SESSION['categorie'];} ?></p>
                    <img src="assets/img/icons/Back_icon.png">
                </a>
            </div>
            <!-- Marque -->
            <div class="containerInputAddVetement">
                <a href="marqueVetement">
                    <p>Marque</p>
                    <p style="margin-left:50px;"><?php if(isset($_GET['marque'])){$_SESSION['marque']=$_GET['marque'];echo $_GET['marque'];}else if(isset($_SESSION['marque'])){echo $_SESSION['marque'];} ?></p>
                    <img src="assets/img/icons/Back_icon.png">
                </a>
            </div>
            <!-- Saison -->
            <div class="containerInputAddVetement">
                <a href="saisonVetement">
                    <p>Saison</p>
                    <p style="margin-left:50px;"><?php if(isset($_GET['saison'])){$_SESSION['saison']=$_GET['saison'];echo $_GET['saison'];}else if(isset($_SESSION['saison'])){echo $_SESSION['saison'];} ?></p>
                    <img src="assets/img/icons/Back_icon.png">
                </a>
            </div>
            <!-- Couleur -->
            <div class="containerInputAddVetement">
                <a href="couleurVetement">
                    <p>Couleur</p>
                    <p style="margin-left:50px;"><?php if(isset($_GET['couleur'])){$_SESSION['couleur']=$_GET['couleur'];echo $_GET['couleur'];}else if(isset($_SESSION['couleur'])){echo $_SESSION['couleur'];} ?></p>
                    <img src="assets/img/icons/Back_icon.png">
                </a>
            </div>

            <input type="hidden" name="categorie" value="<?php if(isset($_SESSION['categorie'])){echo $_SESSION['categorie'];} ?>" />
            <input type="hidden" name="marque" value="<?php if(isset($_SESSION['marque'])){echo $_SESSION['marque'];} ?>" />
            <input type="hidden" name="saison" value="<?php if(isset($_SESSION['saison'])){echo $_SESSION['saison'];} ?>" />
            <input type="hidden" name="couleur" value="<?php if(isset($_SESSION['couleur'])){echo $_SESSION['couleur'];} ?>" />
            <input class="inputAdd" type="submit" value="Ajouter" />
        </form>
    </section>
    </main>
    <div class="space"></div>
    <?php echo renderMenu("index","dressing","AjouterUnVetement","Calendrier","Profil"); ?>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('#verborgen_file').hide();
        $('#uploadButton').on('click', function () {
              $('#verborgen_file').click();
        });

        $('#imgadd').change(function () {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onloadend = function () {
               $('.fileadd').css('background-image', 'url("' + reader.result + '")');
            }
            if (file) {
                reader.readAsDataURL(file);
                $('label[for=imgadd], input#imgadd').hide();
            } else {
            }
        });
</script>