<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
// print_r($_POST);

//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numMotCle = $_POST['numMotCle'];
$libMotCle = $_POST['libMotCle'];

sql_update('MOTCLE', "libMotCle= '$libMotCle'", "numMotcle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');