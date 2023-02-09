<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';



$numMemb = $_POST['numMemb'];
$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];

sql_update('membre', "prenomMemb = $prenomMemb , nomMemb = $nomMemb , pseudoMemb = $pseudoMemb , passMemb = $passMemb ,eMailMemb = $eMailMemb ", "numMemb =$numMemb");

header('Location: ../../views/backend/members/list.php');
