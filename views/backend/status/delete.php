<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
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

$numStat = $_GET['numStat'];
$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];


?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/status/list.php" class="liens-ariane">Status</a>
    <p class="separation"> > </p>
    <div class="liens-ariane">Delete</div>
</div>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat"></label>
                    <input id="numStat" class="form-control" style="display: none;" type="text" name="numStat" value="<?php echo ($numStat); ?>" readonly="readonly">
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo ($libStat); ?>" readonly="readonly">
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