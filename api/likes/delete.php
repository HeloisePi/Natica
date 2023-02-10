<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_POST['numArt'];
$likeA = $_POST['likeA'];
$numMemb = $_POST['numMemb'];



sql_delete('LIKEART', "numArt = '$numArt' and numMemb = '$numMemb'");
// var_dump($likeA, $numArt, $numMemb);
header('Location: ../../../views/backend/likes/list.php');
