<?php
require_once './models/allFunctions.php';
function renderHeader($icon){
    $html = '<navbar class="appbar">';
    $html .='<div class="title">';
    $html .=' <img src="assets/img/header/logo_noir.svg" width="90" height="29">';
    $html .='</div>';
    $html .=' <div class="icon">';
    foreach ($icon as $icons) {
    $html .='<i class="'.$icons.'"></i>';
    }
    $html .=' </div>';
    $html .='</navbar>';
    return $html;
    
}

function renderTitleSection($texts){
    $html = '<div class="title_section">';
    foreach ($texts as $text) {
    $html .='<h1>'.$text.'</h1>';
    }
    $html .=' </div>';
    return $html;
    
}
function renderTitleSectionWithLink($title,$text,$href){
    $html = '<div class="title_section link">';
    $html .='<h1>'.$title.'</h1>';
    $html .='<a href="'.$href.'"><p>'.$text.'</p></a>';
    $html .=' </div>';
    return $html;
    
}

function renderOutfitday($src,$title,$categorie1,$categorie2,$categorie3){
    $html = ' <div class="outfitday">';
    $html .= ' <img src="'.$src.'" width="3735" height="4669">';
    $html .= ' <div class="cover"></div>';
    $html .='<div class="title_outfit">';
    $html .='<h2>'.$title.'</h2>';
    $html .='  </div>';
    $html .=' <div class="outfit_list">';
    $html .='<div class="outfit_section">';
    $html .='<p>'.$categorie1.'</p>';
    $html .=' </div>';
    $html .='<div class="outfit_section">';
    $html .='<p>'.$categorie2.'</p>';
    $html .=' </div>';

    $html .='<div class="outfit_section">';
    $html .='<p>'.$categorie3.'</p>';
    $html .=' </div>';
    $html .=' </div>';
    $html .=' </div>';
    return $html;  
}

function renderMeteo(){
    $html = ' <section id="meteo">';
    $html .='  <div class="title_section">';
    $html .='<h1>La météo du jour</h1>';
    $html .='<p>Voir les tenues</p>';
    $html .=' </div>';
    $html .=' <div class="logo_meteo">';
    $html .='<div id="ww_7b8e28d17084a" v="1.20" loc="auto" a='.'{"t":"responsive","lang":"fr","ids":[],"cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","sl_tof":"7","sl_sot":"celsius","sl_ics":"one_a","font":"Arial","el_wfc":3}'.'><a href="https://weatherwidget.org/fr/" id="ww_7b8e28d17084a_u" target="_blank">Widget météo HTML pour site Web par Weatherwidget.org</a></div><script async src="https://srv2.weatherwidget.org/js/?id=ww_7b8e28d17084a"></script>';
    // $html .=' <img src="assets/img/contenu/meteo.png" width="900" height="800">';
    $html .='  </div>';
    $html .=' </section>';
    return $html;
    
}
function renderTenuEnregistrer($srcTenu,$date,$heuredep,$heurefin,$title,$event){
    $html = '<div class="tenu_enregistrer">';
    $html .=' <img src="'.$srcTenu.'" width="3735" height="4669">';
    $html .=' <div class="date_heure">';
    $html .='<div class="date">';
    $html .='<h2>Date</h2>';
    $html .='<p>'.$date.'</p>';
    $html .=' </div>';
    $html .=' <div class="heure">';
    $html .=' <h2>Heure</h2>';
    $html .='  <p>'.$heuredep.' - '.$heurefin.'</p>';
    $html .=' </div>';
    $html .=' </div>';
    $html .=' <div class="title_tenu">';
    $html .=" <h2>".$title."</h2>";
    $html .='<p>'.$event.'</p>';
    $html .=' </div>';
    $html .=' </div>';
    return $html;
}
function renderMenu($link1,$link2,$link3,$link4,$link5){
    $html = '<footer>';
    $html .= '<div class="container_menu">';
    $html .= ' <div class="menu">';
    $html .= ' <a href="'.$link1.'"><div class="icon"><img src="assets/img/menu/Home.svg">';
    $html .= '<p>Accueil</p>';
    $html .= '</div></a>';
    $html .= '                    <a href="'.$link2.'" ><div class="icon"><img src="assets/img/menu/Dressing.svg">';
    $html .= '  <p>Dressing</p>';
    $html .= '  </div></a>';
    $html .= '  </div><a href="'.$link3.'"><div class="menu_center"><i class="fa-solid fa-plus"></i></div>';
    $html .= '<div class="menu"></a>';
    $html .= '  <a href="'.$link4.'" ><div class="icon"><img src="assets/img/menu/Calendar.svg" width="24" height="24">';
    $html .= ' <p>Calendrier</p>';
    $html .= ' </div></a>';
    $html .= '                    <a href="'.$link5.'"><div class="icon"><img src="assets/img/menu/User.svg">';
    $html .= ' <p>Profil</p>';
    $html .= ' </div></a>';
    $html .= ' </div>';
    $html .= ' </div>';
    $html .= '        </footer>';
 return $html;
}
function renderDressing($src, $href, $name){
    $html ='<a class="UnDressing" href="'.$href.'">';
    $html .='<div class="UnDressing">';
    $html .='<div class="cover"></div>';
    $html .='<img src="'.$src.'">';
    $html .='<div class="title_dressing">';
    $html .=' <h1>Dressing de '.$name.'</h1>';
    $html .='</div>';
    $html .='</div>';
    $html .='</a>';
    return $html;
}

function renderTopnav($text){
    $html ='<div class="topnav">';
    $html .='<input type="text" placeholder="'.$text.'">';
    $html .='</div>';
    return $html;
}

function renderBtnAdd($text){
    $html = ' <input class="inputAdd" type="button" value="'.$text.'">';
    return $html;
}
function renderCompleteDressing($img,$title){
    $html = ' <div class="containerVetement">';
    $html .='   <div class="cover"></div>';
    $html .='    <img src="'.$img.'" alt="test">';
    $html .='<h1>'.$title.'</h1>';
    $html .='</div>';
    return $html;
}

function renderInputImgAddVetement(){
    $html = ' <div class="containerInputImgAddVetement">';
    $html .=' <div class="cover"></div>';
    $html .='  <img src="assets/img/contenu/Image.png" alt="test">';
    $html .=' <h1>+ Ajouter photo</h1>';
    $html .=' <p>Voir les astuces</p>';
    $html .='</div>';
    return $html;
}
function renderInputAddVetement($href,$text,$param){

    $html =' <a href="'.$href.'">';
    $html .= '<div class="containerInputAddVetement">';
    $html .=' <p>'.$text.'</p><p style="margin-left:50px;">'.$param.'</p><img src="assets/img/icons/Back_icon.png">';
    $html .='</div>';
    $html .='</a>';

    return $html;
}
function renderOneItemCategorieVetement($title){
    $html = '  <div class="OneItemCategorieVetement">';
    $html .='<p>'.$title.'</p>';
    $html .='  <div class="coutainerchekbox">';
    $html .=' <div class="round">';
    $html .=' <input type="checkbox" id="checkbox" />';
    $html .='   <label for="checkbox"></label>';
    $html .=' </div></div></div>';
    return $html;
}
function renderOneOutfit($title,$categorie){
    $html = '<div class="containerOneOutfit">';
    $html .=' <img id="fav" src="assets/img/icons/favorite.png" alt="">';
    $html .='  <div class="cover"></div>';
    $html .=' <img id="bg" src="assets/img/contenu/img.jpg" alt="">';
    $html .='  <p id="title">'.$title.'</p>';
    $html .='  <div class="subCategorieOneOutfit">';
    $html .=' <p>'.$categorie.'</p>';
    $html .='</div></div>';
    return $html;
}
function renderOneVetement($img,$title,$categorie){
    $html = ' <div class="OneVetement">';
    $html .='  <div class="containerOneVetement">';
    $html .='  <a href="#"><img id="fav" src="assets/img/icons/favoriteUnchecked.png" alt=""></a>';
    $html .=$img;
    $html .=' </div>';
    $html .='<div class="detail">';
    $html .='   <div class="title">';
    $html .='  <h1>'.$title.'</h1>';
    $html .='</div>';
    $html .='<div class="categorieVetement">';
    $html .='   <div class="subCategorieOneOutfit">';
    $html .=' <p>'.$categorie.'</p>';
    $html .='</div></div></div></div>';
    return $html;
}

function renderSliderClickAndDrag(){
    $html = '<div class="grid-item maingrid">';
    $html .= '  <div class="items">';
    $html .= '<div class="item">'.renderOneOutfit("Levis","jean").'</div>';
    $html .= '<div class="item">'.renderOneOutfit("Veste","Veste").'</div>';
    $html .= '<div class="item">'.renderOneOutfit("Kaky","Kaky").'</div>';
    $html .= '<div class="item">'.renderOneOutfit("Hiver","Hiver").'</div>';
    $html .= '<div class="item">'.renderOneOutfit("jean","jean").'</div>';
    $html .= '<div class="item">'.renderOneOutfit("jean","jean").'</div>';
    $html .= ' </div></div>';
    return $html;
}
function returnOutFitIntoSliderAndDrag(){
    $UserIdTEST = 1;
    $outfits = recupere_Outfit_par_idUser($UserIdTEST);
    $html = '<div class="grid-item maingrid">';
    $html .= '  <div class="items">';
    if($outfits !== false){ 
    foreach( $outfits as $outfit ){
        
        $html .= '<div class="item">'.renderOneOutfit($outfit["title_outfit"],$outfit["categoie1_outfit"]).'</div>';
    }
    $html .= ' </div></div>';
    return $html;
}
return false;
}
function returnVetementIntoSliderAndDrag(){
    $UserIdTEST = 1;
    $vetements = recupere_Vetement_par_idUser($UserIdTEST);
    $html = '<div class="grid-item maingrid">';
    $html .= '  <div class="items">';
    foreach( $vetements as $vetement ){
        $imgVetement = '<img id="bg" src="data:'.$vetement['img_type'].';base64,'.base64_encode($vetement['img_blob']).'" height="200" width="200" alt="mon image" title="image"/>';
        
        $html .= '<div class="item">'.renderOneVetement($imgVetement,$vetement["marque_vetement"],$vetement["categorie_vetement"]).'</div>';
    }
    $html .= ' </div></div>';
    return $html;
}


