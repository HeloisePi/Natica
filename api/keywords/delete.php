<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numMotCle = $_POST['numMotCle'];

sql_delete('MOTCLE',"numMotCle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');

