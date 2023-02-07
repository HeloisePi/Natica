<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$libTitrArt = $_POST['libTitrArt'];

sql_delete('article',"libTitrArt = $libTitrArt");

header('Location: ../../');
