<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thématiques - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>

<?php
include '../../../header.php'; // contains the header and call to config.php

//Security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

//Load all thematique
$thematiques = sql_select("thematique", "*");
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/thematiques/list.php" class="liens-ariane">Thématiques</a>
</div>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des thématiques</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>n° de thématique</th>
                        <th>Mot-clé de la thématique</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematiques as $thematiques) { ?>
                        <tr>
                            <td><?php echo $thematiques['numThem']; ?></td>
                            <td><?php echo $thematiques['libThem']; ?></td>
                            <td>
                                <a href="edit.php?numThem=<?php echo $thematiques['numThem']; ?>" class="btn-primary list">Éditer</a>
                                <a href="delete.php?numThem=<?php echo $thematiques['numThem']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn-success list">Créer</a>
        </div>
    </div>
