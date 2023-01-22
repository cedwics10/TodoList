<?php
require("../include/inc_config.php");
extract($_GET);
if (!isset($m)) {
    $m="avion";
    $a="list";
}
require("../application/modules/$m/ctr_" . $m . ".php");
$nomfonction="a_" . $m . "_" . $a;
$nomfonction();
?>
