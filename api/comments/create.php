<?php
require_once __DIR__ . '/../../config.php';
//print_r($_POST);

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}


$libCom = sql_escape($_POST['libCom']);
$numArt = sql_escape($_POST['numArt']);
$numMemb = sql_escape($_POST['numMemb']);


sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`","'$libCom', '$numArt', '$numMemb'");

header('Location: ../../views/backend/comments/list.php');

