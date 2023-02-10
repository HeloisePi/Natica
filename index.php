<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require_once 'header.php'; 
sql_connect();

?>
<?php require_once 'main.php'; ?>
<?php require_once 'footer.php'; ?>