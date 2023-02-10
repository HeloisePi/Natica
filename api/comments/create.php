<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
//print_r($_POST);

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}


$libCom = $_POST['libCom'];
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];


sql_escape(sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`","'$libCom', '$numArt', '$numMemb'"));

header('Location: ../../views/backend/comments/list.php');

