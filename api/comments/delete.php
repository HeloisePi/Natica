<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}


$libCom = $_POST['libCom'];
$numCom = $_POST['numCom'];
var_dump($numCom);

sql_delete('COMMENT',"numCom = '$numCom'");

header('Location: ../../views/backend/comments/list.php');
