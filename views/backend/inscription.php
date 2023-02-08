<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscrition</title>
</head>
<body>
    <?php include '../../header.php'; ?>
    <div class="fil-ariane">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/login.php" class="liens-ariane">S'inscrire</a>
    

    <p> Champs Obligatoire *</p>
    <form action="<?php echo ROOT_URL . '/api/inscription.php' ?>" method="post">
    <div class="form-group">
        <label for="nomMemb">Nom * </label> <br>
        <input type="text" id="nomMemb" name='nomMemb' require> <br>

        
        <label for="prenomMemb">Prénom * </label> <br>
        <input type="text" id="prenomMemb" name='prenomMemb' require> <br>

        <label for="eMailMemb">Adresse mail* </label> <br>
        <input type="text" id="eMailMemb" name='eMailMemb' require> <br>

        <label for="passMemb">Mot de passe* </label> <br>
        <input type="password" id="passMemb" name='passMemb' require> <br>
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

    <div class="form-group mt-2">
        <button type="submit" class="inscript">Créer un compte</button>
    </div>

    <div class="align-btn-connect">
                    <p class="text-connect">Vous avez déjà un compte ? </p>
                    <a href="#!" class="liens-ariane text-connect">Se connecter.</a>
                </div>

    <?php include '../../footer.php';  // contains the footer ?>
</body>
</html>