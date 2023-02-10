<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//print_r($_POST);

if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}


$jsonString = file_get_contents('../../views/backend/articles/data.json');
$jsonAides = file_get_contents('../../views/backend/articles/aides.json');
$data = json_decode($jsonString, true);
$aides = json_decode($jsonAides, true);

var_dump($data);


$allArticles = $data['articles'];

$aidesOfTheArticle = array();
foreach($aides['aides'] as $aide) {
    if(isset($_POST[$aide['name']])){
        $aide['isActive'] = true;
    }else{
        $aide['isActive'] = false;
    }
    array_push($aidesOfTheArticle, $aide);
}


$article = array();

$article['name'] = $_POST['libTitrArt'];
$article['aides'] = $aidesOfTheArticle;




array_push($data['articles'], $article);


$jsonFinalData = json_encode($data);
var_dump($jsonFinalData);
file_put_contents('../../views/backend/articles/data.json', $jsonFinalData);


/*
if (isset($_FILES)) {
    $path = upload_image($_FILES);
    // echo $path;
}

$urlPhotArt = sql_escape($path);*/

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

echo 'salut';

sql_insert('article', "`libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");
sql_insert('article', "`libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");
 if (sql_select('ARTICLES', 'urlPhotArt', "urlPhotArt = '$urlPhotArt'")[0]['urlPhotArt'] == $urlPhotArt) {
     header('Location: ../../../views/backend/articles/list.php?error=1');
}

header('Location: ../../views/backend/articles/list.php');