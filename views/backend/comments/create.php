<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau commentaire - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>

<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$membres = sql_select('membre', '*');
$articles = sql_select('article', '*');
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/comments/create.php" class="liens-ariane">Nouveau commentaire</a>
</div>

<!--Bootstrap form to create a new comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">Commentaire *</label>
                    <input id="libCom" class="form-control" type="text" name="libCom" required>



                    <label for="titre">Numéro de l'article *</label>

                    <select id="numArt" class="form-control" type="int" name="numArt" required>
                    <?php
                    foreach( $articles as $article){
                        ?> <option value="<?php echo $article['numArt'] ?>"> <?php echo $article['libTitrArt']; ?> </option>
                        <?php
                    }
                    ?>
                </select>

                    <label for="titre">Numéro du membre *</label>
                    <select id="numMemb" class="form-control" type="int" name="numMemb" required>
                    <?php
                    foreach( $membres as $membre){
                        ?> <option value="<?php echo $membre['numMemb'] ?>"> <?php echo $membre['pseudoMemb']; ?> </option>
                        <?php
                    }
                    ?>


                </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn-primary list">Créer</button>
                </div>
            </form>
        </div>
    </div>
</form>