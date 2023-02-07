<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
//print_r($_POST);


$nomMemb = $_POST['nomMemb'];
$prenomMemb =  $_POST['prenomMemb'];
$passMemb =  $_POST['passMemb'];
$eMailMemb =  $_POST['eMailMemb'];
$pseudoMemb =  $_POST['pseudoMemb'];




sql_insert('membre', "`nomMemb`, `prenomMemb`, `passMemb`, `eMailMemb`, `pseudoMemb`","'$nomMemb','$prenomMemb','$passMemb','$eMailMemb','$pseudoMemb'");
header('Location: ../../views/backend/members/list.php');