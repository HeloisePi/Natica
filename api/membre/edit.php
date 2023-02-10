<?php   
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);



$numMemb = trim($_POST['numMemb']);
$prenomMemb = trim($_POST['prenomMemb']);
$nomMemb = trim($_POST['nomMemb']);
$pseudoMemb = trim($_POST['pseudoMemb']);
$passMemb = trim(($_POST['passMemb']));
$eMailMemb = trim($_POST['eMailMemb']);
$numStat = trim($_POST['numStat']);

if (!check_access(1)) {
    header('Location: /');
}
else {
sql_update('membre', "prenomMemb = '$prenomMemb' , nomMemb = '$nomMemb' , pseudoMemb = '$pseudoMemb' , passMemb = '$passMemb' ,eMailMemb = '$eMailMemb', numStat = $numStat" ,"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');
}