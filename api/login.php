<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$eMailMemb = trim($_POST['eMailMemb']);
$passMemb = $_POST['passMemb'];
// $numMemb = $_POST['numMemb'];

//mettre un and si plusieurs paramètres à sql select

$truePassMemb = sql_select('MEMBRE', 'passMemb', "eMailMemb = '$eMailMemb'")[0]['passMemb'];
var_dump($truePassMemb);

//vérifaction du mdp
if ($truePassMemb == $passMemb) { 
    $numMemb = sql_select('MEMBRE', 'numMemb', "eMailMemb = '$eMailMemb'")[0]['numMemb'];
    $_SESSION["numMemb"] = $numMemb;
    var_dump($numMemb);
    echo "connexion réussie";

    
        $_SESSION["pseudoMemb"] = sql_select('MEMBRE', 'pseudoMemb', "eMailMemb = '$eMailMemb'")[0]['pseudoMemb'];
        /* now displaying the session id..... */
        echo "Le numéro de l'utilisateur de cette session est : " . $numMemb;
        echo " Le pseudonyme de l'utilisateur est " . $_SESSION['pseudoMemb'];


        /* now destroying the session id */

        // if (isset($_SESSION['pseudoMemb'])) {
        //     $_SESSION = array();
        //     unset($_SESSION);
        //     session_destroy();
        //     echo "session destroyed...";
        // }

        // var_dump("$numMemb", "$passMemb");
} else {

    echo "connexion échouée, erreur dans votre mdp ou votre adresse mail !";
}
?>