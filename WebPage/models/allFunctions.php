<?php 
// session_start()
// Un nom d’utilisateur : $_SESSION['USER']['nom'] = 'Bazin';
// Une liste : $_SESSION['PANIER']['liste'] = 'banane,pomme,fraise';
// Un statut de connexion : $_SESSION['AUTH']['statut'] = 'Connecté';
// session_destroy()
include_once 'connect.php';

function execute_req($req)
        {
            if(mysqli_query($GLOBALS['conn'],$req))
            {
                return true;
            }
            else
            {
                return mysqli_error($GLOBALS['conn']);
            }
        }
        
        function execute_req_tableau($req)
        {
            if(mysqli_query($GLOBALS['conn'],$req))
            {
                return mysqli_fetch_array(mysqli_query($GLOBALS['conn'],$req));
            }
            else
            {
                return mysqli_error($GLOBALS['conn']);
            }
        }
        function transfert(){
            $ret        = false;
            $img_blob   = '';
            $img_taille = 0;
            $img_type   = '';
            $img_nom    = '';
            $taille_max = 1280000;
            $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);

            $idUserTEST="";
            $categorie="";
            $marque="";
            $saison="";
            $couleur="";
            $img_blob="";
            
            if (!$ret) {
                echo "<script>alert(\"Problème de transfert\")</script>";
                return false;
            } else {
                // Le fichier a bien été reçu
                $img_taille = $_FILES['fic']['size'];
                if ($img_taille > $taille_max) {
                    echo "<script>alert(\"Trop gros !\")</script>";
                    return false;
                }
               
                $img_type = $_FILES['fic']['type'];
                // $img_nom  = $_FILES['fic']['name'];
                $img_nom  = $_POST['categorie'];
                $idUserTEST = "1";
                $categorie = $_POST['categorie'];
                $marque = $_POST['marque'];
                $saison = $_POST['saison'];
                $couleur = $_POST['couleur'];
                $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
                $req = "INSERT INTO vetements(id_user,name_vetement,categorie_vetement,marque_vetement,saison_vetement,couleur_vetement,img_nom,img_taille,img_type,img_blob) 
                VALUE ('".$idUserTEST."','".$img_nom."','".$categorie."','".$marque."','".$saison."','".$couleur."','".$img_nom."','".$img_taille."','".$img_type."','".addslashes($img_blob)."')";
        $ret = mysqli_query($GLOBALS['conn'],$req) or die (mysqli_error($GLOBALS['conn']));
        header('Location: index.php');
        echo "<script>alert(\"transfert effectuer avec succes !\")</script>";
        return true;
    }
}
        function recupere_liste_Users()
        {
            $sql = "select * from users";

            $result = $GLOBALS['conn']->query($sql);
            $i = 0;
            while($row = $result->fetch_assoc()) {

                $Users[$i] = $row;
                $i++;
            }
            return $Users;
        }
        function recupere_UserById($id_user)
        {
            $sql = "SELECT * FROM users WHERE id_user LIKE '$id_user'";

            $result = $GLOBALS['conn']->query($sql);
            $i = 0;
            while($row = $result->fetch_assoc()) {

                $Users[$i] = $row;
                $i++;
            }
            return $Users;
        }
        function recupere_Vetement_par_idUser($id_user){
            $sql = "SELECT * FROM vetements WHERE id_user LIKE '$id_user';";

            $result = $GLOBALS['conn']->query($sql);
            $i = 0;
            while($row = $result->fetch_assoc()) {

                $Users[$i] = $row;
                $i++;
            }
            return $Users;
        }

        function recupere_Outfit_par_idUser($id_user){
            $sql = "SELECT * FROM outfits WHERE id_user LIKE '$id_user';";

            $result = $GLOBALS['conn']->query($sql);
            $i = 0;
            while($row = $result->fetch_assoc()) {

                $Users[$i] = $row;
                $i++;
            }
        
            if($result->num_rows !== 0)
            {
                return $Users;
            }
            else
            {
                return false;
            }
        }

        

        function recupere_TenuesProgrammer_par_idUser($id_user,$date){
            $sql = "SELECT t.id_tenue,t.id_outfit,t.date_tenue,t.heureDebut_tenue,t.heureFin_tenue 
                    FROM tenuesprogrammer as t , outfits as o 
                    WHERE o.id_user LIKE '$id_user' AND t.date_tenue LIKE '$date'";

            $result = $GLOBALS['conn']->query($sql);
            $i = 0;
            while($row = $result->fetch_assoc()) {

                $Users[$i] = $row;
                $i++;
            }
            if($result->num_rows !== 0)
            {
                return $Users;
            }
            else
            {
                return false;
            }
        }

function AddDressing($id_user,$name){
    $req = "INSERT INTO dressings VALUES ('$name', '$id_user')";
    mysqli_query($GLOBALS['conn'],$req) or die (mysqli_error($GLOBALS['conn']));
}

function dressingbyID($id_user){
    $sql = "SELECT * FROM dressings as d, vetements as v,outfits as o WHERE d.id_user = v.'$id_user' AND d.id_user = o.'$id_user'";

$result = $GLOBALS['conn']->query($sql);
$i = 0;
while($row = $result->fetch_assoc()) {

$Users[$i] = $row;
$i++;
}
if($result->num_rows !== 0)
{
return $Users;
}
else
{
return false;
}
}


        ?>