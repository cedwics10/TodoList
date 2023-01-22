<?php
/**
 * retourne tous les avions
 */
function getAllAvion() {
    global $link;
    $result = mysqli_query($link, "select * from avion,ville where av_site=vi_id order by av_id");    
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * enregistre un base de données (insert ou update)
 * $data array (les clés sont les noms des champs)
 */
function saveAvion($data) {
    global $link;
    extract($data);
    if ($av_id > 0)
        $sql = "update avion set av_const='$av_const', av_modele='$av_modele', av_capacite='$av_capacite',av_site='$av_site' where av_id=$av_id";
    else
        $sql = "insert into avion values (null,'$av_const','$av_modele','$av_capacite','$av_site')";

    return mysqli_query($link, $sql);
}

/**
 * retourne un enregistrement
 */
function getAvion($id) {
    global $link;
    $result = mysqli_query($link, "select * from avion where av_id=$id");
    return mysqli_fetch_assoc($result);
}

/**
 * Supprime un enregistrement
 */
function delAvion($id) {
    global $link;
    return mysqli_query($link, "delete from avion where av_id=$id");
}