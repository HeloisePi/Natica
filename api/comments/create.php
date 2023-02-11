<?php
require_once __DIR__ . '/../../config.php';
//print_r($_POST);

//security check
$libCom = sql_escape($_POST['libCom']);
$numArt = sql_escape($_POST['numArt']);
$numMemb = sql_escape($_POST['numMemb']);

if (!check_access(2)) {
    sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`","'$libCom', '$numArt', '$numMemb'");
    header('Location: /evenement.php?numArt=' . $numArt); //Redirect to home
}
else{   
    sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`","'$libCom', '$numArt', '$numMemb'");
    header('Location: ../../views/backend/comments/list.php');
}




