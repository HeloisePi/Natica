<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
// print_r($_POST);

//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numThem = $_POST['numThem'];
$libThem = $_POST['libThem'];

sql_update('THEMATIQUE', "libThem= '$libThem'", "numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');
