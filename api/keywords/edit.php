<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
// print_r($_POST);

$numMotCle = $_POST['numMotCle'];
$libMotCle = $_POST['libMotCle'];

sql_update('MOTCLE', "libMotCle= '$libMotCle'", "numMotcle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');