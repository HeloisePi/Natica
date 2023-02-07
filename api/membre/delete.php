<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$pseudoMemb = $_POST['pseudoMemb'];

sql_delete('membre',"pseudoMemb = $pseudoMemb");

header('Location: ../../');
