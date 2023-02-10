<?php
require_once __DIR__ . '/../../config.php';

$eMailMemb = trim($_POST['eMailMemb']);
$passMemb =  $_POST['passMemb'];
$encryptedPassMemb = password_hash($passMemb, PASSWORD_DEFAULT);
// $numMemb = $_POST['numMemb'];
//mettre un and si plusieurs paramètres à sql select

//var_dump($eMailMemb);
$truePassMemb = sql_select('MEMBRE', 'passMemb', "eMailMemb = '$eMailMemb'")[0]['passMemb'];
//var_dump($truePassMemb);
//var_dump($encryptedPassMemb);

//vérifaction du mdp
if (password_verify($passMemb, $truePassMemb)) {
    $numMemb = sql_select('MEMBRE', 'numMemb', "eMailMemb = '$eMailMemb'")[0]['numMemb'];
    $_SESSION["numMemb"] = $numMemb;
    $_SESSION["pseudoMemb"] = sql_select('MEMBRE', 'pseudoMemb', "eMailMemb = '$eMailMemb'")[0]['pseudoMemb'];
    header('Location: ../../../index.php?error=3');


    /* now displaying the session id..... */
    // echo "Le numéro de l'utilisateur de cette session est : " . $numMemb;
    // echo " Le pseudonyme de l'utilisateur est " . $_SESSION['pseudoMemb'];

    // var_dump("$numMemb", "$passMemb");
} else {

    //echo "connexion échouée, erreur dans votre mdp ou votre adresse mail !";
    header('Location: ../../../views/backend/login.php?error=2');
}
