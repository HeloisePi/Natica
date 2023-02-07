<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
// print_r($_POST);

$numStat = $_POST['numStat'];
$libStat = $_POST['libStat'];

sql_update('STATUT', "libStat= '$libStat'", "numStat = $numStat");

header('Location: ../../views/backend/status/list.php');
