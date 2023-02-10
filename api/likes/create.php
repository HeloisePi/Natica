<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];
$verifie = sql_select('likeart','likeA',"numArt = '$numArt' and numMemb = '$numMemb'");
print_r($verifie);

if ($verifie[0]['likeA'] == 1){
    header('Location: ../../views/backend/likes/list.php');
    exit();
}

sql_insert('LIKEART', "`likeA`, `numArt`, `numMemb`", " 1, '$numArt', '$numMemb'");

header('Location: ../../views/backend/likes/list.php');
