<?php
require_once __DIR__ . '/../../config.php';
//print_r($_POST);


$nomMemb = sql_escape($_POST['nomMemb']);
$prenomMemb =  sql_escape($_POST['prenomMemb']);
$passMemb =  trim(sql_escape($_POST['passMemb']));
$eMailMemb =  sql_escape($_POST['eMailMemb']);
$pseudoMemb =  sql_escape($_POST['pseudoMemb']);

$encryptedPassMemb = password_hash($passMemb, PASSWORD_DEFAULT);

//print_r(sql_select(sql_select('MEMBRE', 'eMailMemb', "eMailMemb = '$eMailMemb'")[0]['eMailMemb']));

if (sql_select('MEMBRE', 'eMailMemb', "eMailMemb = '$eMailMemb'")[0]['eMailMemb'] == $eMailMemb) {
    if (!check_access(1)) {
        header('Location: ../../../views/backend/inscription.php?error=1');
        // print_r('1');
    } else {
        header('Location: ../../../views/backend/members/list.php?error=1');
    }
} else {
    // var_dump($_POST);
    sql_insert(
        'membre',
        "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat",
        "'$prenomMemb','$nomMemb','$pseudoMemb','$encryptedPassMemb','$eMailMemb', 3"
    );
    header('Location: ../../../views/backend/members/list.php');
}
