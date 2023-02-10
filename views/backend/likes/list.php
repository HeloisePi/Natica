<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Likes - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>
    
<?php
include '../../../header.php'; // contains the header and call to config.php

//Security check
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}
//Load all statuses
$likes = sql_select("likeart", "*");
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/likes/list.php" class="liens-ariane">Likes</a>
</div>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro membre</th>
                        <th>Numéro article</th>
                        <th>Like article</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($likes as $like) { ?>
                        <tr>
                            <td><?php echo $like['numMemb']; ?></td>
                            <td><?php echo $like['numArt']; ?></td>
                            <td><?php echo $like['likeA']; ?></td>
                            <td>
                                <!-- <a href="edit.php?id=<?php echo $like['numMemb']; ?>" class="btn btn-primary">Edit</a> -->
                                <a href="delete.php?numMemb=<?php echo $like['numMemb']; ?>&numArt=<?php echo $like['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn-success list">Créer</a>
        </div>
    </div>
