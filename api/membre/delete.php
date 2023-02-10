<?php


require_once __DIR__ . '/../../config.php';

$numMemb = $_POST['numMemb'];

if (!check_access(1)) {
    header('Location: /');
}
else {
sql_delete('membre',"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');
}