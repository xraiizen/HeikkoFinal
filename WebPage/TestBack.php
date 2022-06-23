<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require("models/allFunctions.php");

    if ( isset($_FILES['fic']) )
         {
             transfert();
         }
?>
    <h3>Envoi d'une image</h3>
    <form enctype="multipart/form-data" action="#" method="post">
       <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
       <input type="file" name="fic" size=50 />
       <input type="submit" value="Envoyer" />
    </form>
    <p><a href="ListeImg.php">Liste</a></p>
<?php
    // Lister le premier utilisateur
     $users = execute_req_tableau("SELECT * FROM users;");
    //  var_dump($users);
        echo "<p>",$users['id_user'],"</p>";
        echo "<p>",$users['firstname_user'],"</p>";
        echo "<p>",$users['lastname_user'],"</p>";
        echo "<p>",$users['email_user'],"</p>";
        echo "<p>",$users['password_user'],"</p>";
        echo "<p>",$users['etat_user'],"</p>";
    // Lister tous les utilisateur
   $ListUsers = recupere_liste_Users($conn);
   foreach($ListUsers as $ListU){

       echo "<p>",$ListU['id_user'],"</p>";
       echo "<p>",$ListU['firstname_user'],"</p>";
       echo "<p>",$ListU['lastname_user'],"</p>";
       echo "<p>",$ListU['email_user'],"</p>";
       echo "<p>",$ListU['password_user'],"</p>";
       echo "<p>",$ListU['etat_user'],"</p>";
    }
    // Lister les infos d'un utilisateur grave avec son id
$UserById = recupere_UserById(2);
foreach($UserById as $info){
echo "<p>",$info['id_user'],"</p>";
echo "<p>",$info['firstname_user'],"</p>";
echo "<p>",$info['lastname_user'],"</p>";
echo "<p>",$info['email_user'],"</p>";
echo "<p>",$info['password_user'],"</p>";
echo "<p>",$info['etat_user'],"</p>";
}
    // Lister les vetement de chaque utilisateur
    $VetementsUser = recupere_Vetement_par_idUser(1);
    var_dump($VetementsUser);
    foreach($VetementsUser as $Vetement){
        echo "<p>",$Vetement['id_vetement'],"</p>";
        echo "<p>",$Vetement['id_user'],"</p>";
        echo "<p>",$Vetement['name_vetement'],"</p>";
        echo "<p>",$Vetement['hrefImg_vetement'],"</p>";
        echo "<p>",$Vetement['categorie_vetement'],"</p>";
        echo "<p>",$Vetement['marque_vetement'],"</p>";
        echo "<p>",$Vetement['saison_vetement'],"</p>";
        echo "<p>",$Vetement['couleur_vetement'],"</p>";
        }

        // Lister les vetement de chaque utilisateur
        $id = 1;
        $date = '2022-04-11';
    $VetementsEnregistrerUser = recupere_TenuesProgrammer_par_idUser($id,$date);
    foreach($VetementsEnregistrerUser as $VetementEnregistrer){
        echo "<p>",$VetementEnregistrer['id_tenue'],"</p>";
        echo "<p>",$VetementEnregistrer['id_outfit'],"</p>";
        echo "<p>",$VetementEnregistrer['date_tenue'],"</p>";
        echo "<p>",$VetementEnregistrer['heureDebut_tenue'],"</p>";
        echo "<p>",$VetementEnregistrer['heureFin_tenue'],"</p>";

        }
        ?>

</body>
</html>