<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$eMailMemb = trim($_POST['eMailMemb']);
$passMemb = $_POST['passMemb'];
$numMemb = $_POST['numMemb'];

var_dump($passMemb);

//mettre un and si plusieurs paramètres à sql select

$truePassMemb = sql_select('MEMBRE', 'passMemb', "eMailMemb = '$eMailMemb'")[0]['passMemb'];
var_dump($truePassMemb);
//vérifaction du mdp
if ($truePassMemb == $passMemb) {

    echo "connexion réussie";
?>
    <script type="text/javascript">
        <?php
        $pseudoMemb = sql_select('MEMBRE', 'pseudoMemb', "eMailMemb = '$eMailMemb'")[0]['pseudoMemb'];
        $numMemb = session_id();
        $_SESSION["username"] = "$pseudoMemb";
        /* now displaying the session id..... */
        echo "L'id de cette session est : " . $numMemb;
        echo " La session a été enregistrée par : " . $_SESSION['username'];


        /* now destroying the session id */

        if (isset($_SESSION['username'])) {
            $_SESSION = array();
            unset($_SESSION);
            session_destroy();
            echo "session destroyed...";
        }

        ?>
    </script>

<?php // var_dump("$numMemb", "$passMemb");
} else {

    echo "connexion échouée, erreur dans votre mdp ou votre adresse mail !";
}
?>