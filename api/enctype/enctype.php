<?php
require_once __DIR__ . '/../../config.php';
//print_r($_POST);

if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}


$jsonString = file_get_contents('../../views/backend/articles/data.json');
$jsonAides = file_get_contents('../../views/backend/articles/aides.json');
$data = json_decode($jsonString, true);
$aides = json_decode($jsonAides, true);

// var_dump($data);


$allArticles = $data['articles'];

$aidesOfTheArticle = array();
foreach ($aides['aides'] as $aide) {
    if (isset($_POST[$aide['name']])) {
        $aide['isActive'] = true;
    } else {
        $aide['isActive'] = false;
    }
    array_push($aidesOfTheArticle, $aide);
}

$adresses = array();
$article = array();


// $article['name'] = $_POST['libTitrArt'];
$article['aides'] = $aidesOfTheArticle;
$article['couts'] = trim($_POST['cout']);
$article['adresse'] = $_POST['adresse'];



array_push($data['articles'], $article);



$jsonFinalData = json_encode($data);
// var_dump($jsonFinalData);
file_put_contents('../../views/backend/articles/data.json', $jsonFinalData);



if (isset($_FILES)) {
    $path = upload_image($_FILES);
    // echo $path;
}

$urlPhotArt = sql_escape($path);

$libTitrArt = sql_escape($_POST['libTitrArt']);
$libChapoArt = sql_escape($_POST['libChapoArt']);
$libAccrochArt = sql_escape($_POST['libAccrochArt']);
$parag1Art = sql_escape($_POST['parag1Art']);
$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$numThem = $_POST['numThem'];


sql_insert('article', "`libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");



header('Location: ../../views/backend/articles/list.php');
