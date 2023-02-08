<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numThem = $_POST['numThem'];

sql_delete('THEMATIQUE', "numThem= $numThem");

header('Location: ../../views/backend/thematiques/list.php');
