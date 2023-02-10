<?php


require_once __DIR__ . '/../../config.php';



//print_r($_POST);
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$libTitrArt = sql_escape($_POST['libTitrArt']);
$libChapoArt = sql_escape($_POST['libChapoArt']);
$libAccrochArt = sql_escape($_POST['libAccrochArt']);
$parag1Art = sql_escape($_POST['parag1Art']);
$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$urlPhotArt = sql_escape($_POST['urlPhotArt']);
$numThem = $_POST['numThem'];
// echo $numThem;

/*
$accessible_array = array();
if(isset($_POST['defMent'])){
    $accessible_array[0] = true;
} else {
    $accessible_array[0] = false;
}
if(isset($_POST['defMotA'])){
    $accessible_array[1] = true;
} else {
    $accessible_array[1] = false;
}
if(isset($_POST['defMot'])){
    $accessible_array[2] = true;
} else {
    $accessible_array[2] = false;
}
if(isset($_POST['defVis'])){
    $accessible_array[3] = true;
} else {
    $accessible_array[3] = false;
}
if(isset($_POST['persMobiRedu'])){
    $accessible_array[4] = true;
} else {
    $accessible_array[4] = false;
}
if(isset($_POST['pousette'])){
    $accessible_array[5] = true;
} else {
    $accessible_array[5] = false;
}
*/
//$accessible_array_table = json_encode($accessible_array);

// var_dump($data);

//print_r($defMent,$defMotA,$defMot,$defVis,$persMobiRedu,$pousette );
//file_put_contents('jsonFile.json', $newJsonString);


sql_insert('article', "`libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");
header('Location: ../../views/backend/articles/list.php');
