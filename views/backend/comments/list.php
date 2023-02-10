<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>
    
<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

//Load all comments
$commentaires = sql_select("COMMENT", "*");
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/comments/list.php" class="liens-ariane">Commentaires</a>
</div>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro commentaire</th>
                        <th>Commentaire</th>
                        <th>Modo commentaire</th>
                        <th>Numéro article</th>
                        <th>Numéro membre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentaires as $commentaire) { ?>
                        <tr>
                            <td><?php echo $commentaire['numCom']; ?></td>
                            <td><?php echo $commentaire['libCom']; ?></td>
                            <td><?php echo $commentaire['notifComKOAff']; ?></td>
                            <td><?php echo $commentaire['numArt']; ?></td>
                            <td><?php echo $commentaire['numMemb']; ?></td>
                            <td>
                                <a href="edit.php?numCom=<?php echo $commentaire['numCom']; ?>" class="btn-primary list">Éditer</a>
                                <a href="delete.php?numCom=<?php echo $commentaire['numCom']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn-success list">Créer</a>
        </div>
    </div>

    
</body>
</html>