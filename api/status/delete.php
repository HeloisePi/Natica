<?php

require_once __DIR__ . '/../../config.php';
//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numStat = $_POST['numStat'];

sql_delete('STATUT',"numStat = $numStat");


//header('Location: ../../views/backend/status/list.php');
