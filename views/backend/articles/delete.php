<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
    <link rel="stylesheet" href="/src/css/articles.css">
    <link rel="stylesheet" href="/src/css/dashboard.css">
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

$numArt = $_GET['numArt'];
$article = sql_select("article", "*", "numArt = $numArt")[0];


?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/articles/list.php" class="liens-ariane">Liste des articles</a>
    <p class="separation"> > </p>
    <div class="liens-ariane">Supprimer</div>
</div>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer l'article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="article">Article</label>
                    
                    <input id="article" class="form-control" type="text" name="numArt" value="<?php echo($numArt); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="dtCreaArt" value="<?php echo($article['dtCreArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libTitrArt" value="<?php echo($article['libTitrArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libChapoArt" value="<?php echo($article['libChapoArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libAccrochArt" value="<?php echo($article['libAccrochArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag1Art" value="<?php echo($article['parag1Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo($article['libSsTitr1Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag2Art" value="<?php echo($article['parag2Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo($article['libSsTitr2Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag3Art" value="<?php echo($article['parag3Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libConclArt" value="<?php echo($article['libConclArt']); ?>" readonly="readonly"><br>

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>