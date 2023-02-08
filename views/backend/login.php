<?php

if (!empty($_POST['eMailMemb'])) {
    setcookie('Emailutilisateur', 'eMailMemb', time() + 60 * 60 * 24 * 30, '/'); // le cookie en clé utilisateur comporte la valeur test et a un temps de 30 jours
}
include '../../header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//$eMailMemb = $_GET['eMailMemb'];
//$passMemb = $_GET['passMemb'];

?>

<!--Bootstrap form to create a formulaire-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/login.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">adresse mail</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                    <label for="titre">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include '../../footer.php'; // contains the footer
?>