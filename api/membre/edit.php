<?php   
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);



$numMemb = trim($_POST['numMemb']);
$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = ($_POST['passMemb']);
$eMailMemb = trim($_POST['eMailMemb']);
$numStat = trim($_POST['numStat']);

sql_update('membre', "prenomMemb = '$prenomMemb' , nomMemb = '$nomMemb' , pseudoMemb = '$pseudoMemb' , passMemb = '$passMemb' ,eMailMemb = '$eMailMemb', numStat = $numStat" ,"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');
