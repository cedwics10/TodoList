<?php
require "inc_constants.php";
require "inc_fonctions.php";

session_start();
//connexion à la base de données
$link = mysqli_connect("localhost", "root", "", "tasker");
mysqli_set_charset($link, "utf8");
