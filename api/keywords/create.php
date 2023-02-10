<?php
require_once __DIR__ . '/../../config.php';
//print_r($_POST);

//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$libMotCle = $_POST['libMotCle'];


sql_insert('MOTCLE', "`libMotCle`","'$libMotCle'");


header('Location: ../../views/backend/keywords/list.php');