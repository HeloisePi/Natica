<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$libCom = $_POST['libCom'];
$numCom = $_POST['numCom'];
var_dump($numCom);

sql_delete('COMMENT',"numCom = '$numCom'");

header('Location: ../../views/backend/comments/list.php');
