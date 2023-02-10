<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
// print_r($_POST);

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}


$numCom = $_POST['numCom'];
$libCom = $_POST['libCom'];
//var_dump($libCom, $numCom);

sql_update('COMMENT', "libCom= '$libCom'", "numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');
