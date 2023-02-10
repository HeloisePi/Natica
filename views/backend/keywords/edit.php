<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer - eXim</title>
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

$numMotCle = $_GET['numMotCle'];
$libMotCle = sql_select("MOTCLE","libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];

?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/keywords/list.php" class="liens-ariane">Liste des mots-clés</a>
    <p class="separation"> > </p>
    <div class="liens-ariane">Éditer</div>
</div>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Éditer un mot-clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/keywords/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">Nouveau nom du mot clé</label>
                    <input id="numMotCle" class="form-control" style="display: none;" type="text" name="numMotCle" value="<?php echo($numMotCle)?>">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn-primary list">Éditer</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
</form>