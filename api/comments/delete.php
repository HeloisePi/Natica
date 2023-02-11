<?php


require_once __DIR__ . '/../../config.php';

//security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}


$libCom = $_POST['libCom'];
$numCom = $_POST['numCom'];
var_dump($numCom);

sql_delete('COMMENT',"numCom = '$numCom'");

header('Location: ../../views/backend/comments/list.php?error=1');
