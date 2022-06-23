<?php
if ( isset($_GET['id']) ){
    $id = intval ($_GET['id']);
    include ("models/connect.php");
    $req = "SELECT img_id, img_type, img_blob FROM imagesvetements WHERE img_id = $id";
    $ret =  mysqli_query ($GLOBALS['conn'],$req) or die (mysqli_error($GLOBALS['conn']));
    $col = mysqli_fetch_row ($ret);
    
    if ( !$col[0] ){
        echo "Id d'image inconnu";
    } else {
        header ("Content-type: " . $col[1]);
        echo $col[2];
    }

} else {
    echo "Mauvais id d'image";
    echo $id;
    echo $col;
}
?>