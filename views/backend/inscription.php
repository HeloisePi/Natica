<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
    <link rel="stylesheet" href="/assert/Fraunces-VariableFont_SOFT,WONK,opsz,wght.ttf">
    <link rel="stylesheet" href="/assert/Montserrat-Italic-VariableFont_wght.ttf">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
</head>

<body>
    <?php include '../../header.php'; ?>
    <div class="fil-ariane2">
        <a href="/index.php" class="liens-ariane">Accueil</a>
        <p class="separation"> > </p>
        <a href="/views/backend/inscription.php" class="liens-ariane">S'inscrire</a>
    </div>

    <p class="form-group champs-obl"> Champs Obligatoire *</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <form action="<?php echo ROOT_URL . '/api/membre/create.php' ?>" method="post">
                    <div class="form-group ">
                        <label for="nomMemb">Nom * </label> <br>
                        <input class="form-control taille-saisie" type="text" id="nomMemb" name='nomMemb' required> <br>


                        <label for="prenomMemb">Prénom * </label> <br>
                        <input class="form-control taille-saisie" type="text" id="prenomMemb" name='prenomMemb' required> <br>

                        <label for="prenomMemb">Pseudo * </label> <br>
                        <input class="form-control taille-saisie" type="text" id="pseudoMemb" name='pseudoMemb' required> <br>

                        <label for="eMailMemb">Adresse mail* </label> <br>
                        <input class="form-control taille-saisie" type="text" id="eMailMemb" name='eMailMemb' required> <br>

                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == 1){
                                $msgErreur = $_GET['error'];
                        ?>

                                <span>
                                    <span> Erreur, l'adresse mail saisie est déjà attribuée, veuillez entrer une autre adresse mail </span><br><br>
                                </span>
                        <?php
                            }       
                        } ?>

                        <label for="passMemb">Mot de passe* (plus de 8 caractères) </label> <br>
                        <input class="form-control taille-saisie" type="password" id="passMemb" name='passMemb' minlength="8"required> <br>


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
                        <button type="submit" class="conect list">Créer un compte</button>
                    </div>

                    <div class="align-btn-connect">
                        <p class="text-connect">Vous avez déjà un compte ? </p>
                        <a href="/views/backend/login.php" class="liens-ariane text-connect">Se connecter.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../../footer.php';  // contains the footer 
    ?>
</body>

</html>