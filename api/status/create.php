<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
// print_r($_POST); voir si on a bien reçu l'infos
//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
$libStat = $_POST['libStat'];
sql_insert('STATUT','libStat',"'$libStat'");

header('Location: ../../views/backend/status/list.php');