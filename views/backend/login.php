<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
    <link rel="stylesheet" href="/assert/Fraunces-VariableFont_SOFT,WONK,opsz,wght.ttf"><link rel="stylesheet" href="/assert/Montserrat-Italic-VariableFont_wght.ttf">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
</head>
<body>
    
</body>
</html>

<?php
include '../../header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$eMailMemb = $_GET['eMailMemb'];
$passMemb = $_GET['passMemb'];
?>




<div class="fil-ariane">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/login.php" class="liens-ariane">Se connecter</a>

</div>

<!--Bootstrap form to create a formulaire-->
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/login.php' ?>" method="post">
                <div class="form-group">
                    <label class="text-champ" for="titre">Adresse mail</label>
                    <input id="eMailMemb" class="form-control taille-saisie" type="text" name="eMailMemb">
                    <label class="text-champ" for="titre">Mot de passe</label>
                    <input id="passMemb" class="form-control taille-saisie" type="password" name="passMemb">

                </div>
                <div class="text-mdp">
                    <div class="password-icon">
                        <i data-feather="eye"></i>
                        <i data-feather="eye-off"></i>
                    </div>
                    <!-- ICON SCRIPT -->
                    <script src="https://unpkg.com/feather-icons"></script>
                    <script>
                    feather.replace();

                    const eye = document.querySelector(".feather-eye");
                    const eyeoff = document.querySelector(".feather-eye-off");
                    const passwordField = document.querySelector("input[type=password]");

                    eye.addEventListener("click", () => {
                    eye.style.display = "none";
                    eyeoff.style.display = "block";

                    passwordField.type = "text";
                    });

                    eyeoff.addEventListener("click", () => {
                    eyeoff.style.display = "none";
                    eye.style.display = "block";

                    passwordField.type = "password";
                    });
                    </script>

                    <p class="text-connect">Afficher / masquer le mot de passe</p>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="conect">Se connecter</button>
                </div>
                <div class="align-btn-connect">
                    <p class="text-connect">Vous n’avez pas de compte ?</p>
                    <a href="#!" class="liens-ariane text-connect">Créer un compte.</a>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include '../../footer.php'; // contains the footer
?>