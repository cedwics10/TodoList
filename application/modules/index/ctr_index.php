<?php
require("model_index.php");

/**
 * Basic action "nul" for index.
 */
function a_index_null()
{
    $vue = "index_null_vue.php";
    require("../application/gabarit/gabarit.php");
}
