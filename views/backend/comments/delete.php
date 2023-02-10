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
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numCom = $_GET['numCom'];
$libCom = sql_select("COMMENT", 'libCom', "numCom = $numCom")[0]['libCom'];
$notifComKOAff = sql_select("COMMENT", 'notifComKOAff', "numCom = $numCom")[0]['notifComKOAff'];
$numArt = sql_select("COMMENT", 'numArt', "numCom = $numCom")[0]['numArt'];
$libTitrArt = sql_select("ARTICLE", 'libTitrArt', "numArt = $numArt")[0]['libTitrArt'];
$numMemb = sql_select("COMMENT", 'numMemb', "numCom = $numCom")[0]['numMemb'];
$pseudoMemb = sql_select("MEMBRE", 'pseudoMemb', "numMemb = $numMemb")[0]['pseudoMemb'];


?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/comments/list.php" class="liens-ariane">Commentaires</a>
    <p class="separation"> > </p>
    <div class="liens-ariane">Supprimer</div>
</div>

<!--Bootstrap form to delete a comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer le commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Commentaire</label>
                    <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value="<?php echo($numCom); ?>" readonly="readonly">
                    <input id="numCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom); ?>" readonly="readonly">
                    <label for="libCom">mMssage du modérateur</label>
                    <input id="numCom" class="form-control" type="text" name="notifComKOAff" value="<?php echo($notifComKOAff); ?>" readonly="readonly">
                    <label for="libCom">Article concerné</label>
                    <input id="numCom" class="form-control" type="text" name="libArt" value="<?php echo($libTitrArt); ?>" readonly="readonly">
                    <label for="libCom">Membre qui a écrit le commentaire</label>
                    <input id="numCom" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb); ?>" readonly="readonly">
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