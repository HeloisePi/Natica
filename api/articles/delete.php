<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_POST['numArt'];

sql_delete('COMMENT', "numArt = $numArt");
sql_delete('LIKEART', "numArt = $numArt");
sql_delete('motclearticle', "numArt = $numArt");
sql_delete('ARTICLE',"numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');
