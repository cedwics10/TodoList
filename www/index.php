<?php
require("../application/inc_config.php");

if (!isset($_GET['m'])) {
    $m = "index";
    $a = "null";
} else {
    $m = $_GET['m'];
    $a = $_GET['a'];
}
require("../application/modules/$m/ctr_" . $m . ".php");
$nomfonction = "a_" . $m . "_" . $a;
$nomfonction();
