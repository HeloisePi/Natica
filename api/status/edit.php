<?php
require_once __DIR__ . '/../../config.php';
// print_r($_POST);
//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numStat = $_POST['numStat'];
$libStat = $_POST['libStat'];

sql_update('STATUT', "libStat= '$libStat'", "numStat = $numStat");

header('Location: ../../views/backend/status/list.php');
