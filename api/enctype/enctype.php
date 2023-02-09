<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);

if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}


if (isset($_FILES)) {
    $path = upload_image($_FILES);
    // echo $path;
}

$libTitrArt = $_POST['libTitrArt'];
$libChapoArt = $_POST['libChapoArt'];
$libAccrochArt = $_POST['libAccrochArt'];
$parag1Art = $_POST['parag1Art'];
$libSsTitr1Art = $_POST['libSsTitr1Art'];
$parag2Art = $_POST['parag2Art'];
$libSsTitr2Art = $_POST['libSsTitr2Art'];
$parag3Art = $_POST['parag3Art'];
$libConclArt = $_POST['libConclArt'];
$numThem = $_POST['numThem'];



sql_insert('article', "`libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$path','$numThem'");


// sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`", "'$libCom', '$numArt', '$numMemb'");

// if (sql_select('ARTICLE', 'urlPhotArt', "urlPhotArt = '$path'")[0]['urlPhotArt'] != $path) {
//     echo ('yo');
// }
header('Location: ../../views/backend/articles/list.php');
