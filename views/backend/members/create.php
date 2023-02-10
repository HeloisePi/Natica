<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau membre - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>
    
<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/members/create.php" class="liens-ariane">Nouveau membre</a>
</div>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/membre/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat"> Prénom </label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb">
                    <label for="libStat"> Nom </label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                    <label for="libStat"> Pseudo </label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                    <label for="libStat"> Mot de passe </label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">
                    <label for="libStat"> E-mail</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn-primary list">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>