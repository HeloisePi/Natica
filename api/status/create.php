<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
$libStat = $_POST['libStat'];
sql_insert('STATUT','libStat',"'$libStat'");

header('Location: ../../views/backend/status/list.php');