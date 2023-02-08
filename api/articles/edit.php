<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
// print_r($_POST);


$numArt = $_POST['numArt'];
$libTitrArt = $_POST['libTitrArt'];
$libChapoArt = $_POST['libChapoArt'];
$libAccrochArt = $_POST['libAccrochArt'];
$parag1Art = $_POST['parag1Art'];
$libSsTitr1Art = $_POST['libSsTitr1Art'];
$parag2Art = $_POST['parag2Art'];
$libSsTitr2Art = $_POST['libSsTitr2Art'];
$parag3Art = $_POST['parag3Art'];
$libConclArt = $_POST['libConclArt'];



sql_update('article', "libTitrArt= '$libTitrArt', libChapoArt= '$libChapoArt', libAccrochArt= '$libAccrochArt', parag1Art= '$parag1Art', libSsTitr1Art= '$libSsTitr1Art', parag2Art= '$parag2Art', libSsTitr2Art= '$libSsTitr2Art', parag3Art= '$parag3Art',libConclArt= '$libConclArt'", "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');
