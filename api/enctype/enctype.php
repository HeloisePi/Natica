<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


sql_insert('COMMENT', "`libCom`, `numArt`, `numMemb`", "'$libCom', '$numArt', '$numMemb'");


if (isset($_FILES)) {
    $path = upload_image($_FILES);
    echo "$path";
}

header('Location: ../../views/backend/articles/list.php');
