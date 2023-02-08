<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
//print_r($_POST);


$nomMemb = sql_escape($_POST['nomMemb']);
$prenomMemb =  sql_escape($_POST['prenomMemb']);
$passMemb =  sql_escape($_POST['passMemb']);
$eMailMemb =  sql_escape($_POST['eMailMemb']);
$pseudoMemb =  sql_escape($_POST['pseudoMemb']);


var_dump($_POST);

sql_insert('membre', "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat",
                    "'$prenomMemb','$nomMemb','$pseudoMemb','$passMemb','$eMailMemb', 3");
                    
header('Location: ../../views/backend/members/list.php');