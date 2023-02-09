<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//security check
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_POST['numArt'];
$likeA = $_POST['likeA'];
$numMemb = $_POST['numMemb'];


if($verifie[0]['likeA']== 1){
    header('Location: ../../../views/backend/likes/list.php');
    exit();
}

sql_delete('LIKEART', "numArt = '$numArt' and numMemb = '$numMemb'");
header('Location: ../../../views/backend/likes/list.php');
