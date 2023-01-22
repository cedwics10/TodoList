<?php
require("avion.php");

/**
 * action list
 */
function a_avion_list()
{
    $data = getAllAvion();
    $vue = "avion_list_vue.php";
    require("../application/gabarit/gabarit.php");
}

/**
 * action edit
 */
function a_avion_edit()
{    
    extract($_GET);
    if (isset($_POST["btsubmit"])) {
        $_POST = array_map("mres", $_POST);
        saveAvion($_POST);
        header("location:" . hlien("avion","list"));
    } else if (isset($id)) {
        if ($id > 0) {
            $data = getAvion($id);
            $data = array_map("mhe", $data);
            extract($data);
        } else {
            $av_id = 0;
            $av_const = "";
            $av_modele = "";
            $av_capacite = "";
            $av_site = "";
        }
    }
    $vue = "avion_edit_vue.php";
    require("../application/gabarit/gabarit.php");
}

/**
 * action delete
 */
function a_avion_delete()
{
    extract($_GET);
    delAvion($id);
    header("location:" . hlien("avion","list"));
}

/**
 * page qui affche les avions boeing
 */
function a_avion_boeing() {
    $data = getAvionByConstructeur("boeing");
    $vue="avion_boeing_vue.php";
    require("../application/gabarit/gabarit.php");
}
