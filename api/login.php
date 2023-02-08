<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$eMailMemb = trim($_POST['eMailMemb']);
$passMemb = $_POST['passMemb'];
//var_dump($passMemb);

//mettre un and si plusieurs paramètres à sql select

$truePassMemb = sql_select('MEMBRE', 'passMemb', "eMailMemb = '$eMailMemb'")[0]['passMemb'];

//vérifaction du mdp
if ($truePassMemb == $passMemb){
    echo"connexion réussie";
}
else{
    echo"connexion échouée, erreur dans votre mdp ou votre adresse mail !";
}
?>
