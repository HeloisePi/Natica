<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);

//security check
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$likeA = $_POST['likeA'];
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];

sql_insert('LIKEART', "`likeA`, `numArt`, `numMemb`", "'$likeA', '$numArt', '$numMemb'");
header('Location: ../../views/backend/likes/list.php');
