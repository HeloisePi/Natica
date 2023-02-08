<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$libThem = $_POST['libThem'];

sql_insert('THEMATIQUE', 'libThem', "'$libThem'");

header('Location: ../../views/backend/thematiques/list.php');
