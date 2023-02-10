<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/connection.css">


<?php
include '../../header.php';
//Security check
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

if (isset($_SESSION['numMemb'])) {
    $pseudoMemb = $_SESSION['pseudoMemb'];
    $numMemb = $_SESSION['numMemb'];
    $numStat = sql_select('MEMBRE', 'numStat', "numMemb = '$numMemb'")[0]['numStat'];
    //$numStat = $numStat[0]['numStat'];
    $libStat = sql_select('STATUT', 'libStat', "numStat = $numStat")[0]['libStat'];
    echo ("Bonjour " . $pseudoMemb . " Vous êtes connecté en tant que : " . $libStat. "."); 
}
?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
</div>


<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mode administrateur</h1>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pages</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!check_access(1)) { ?>
                        
                    <?php } 
                    else { ?>
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/status/create.php" class="btn-success create">Créer</a>
    
                                <!-- <a href="/views/backend/status/delete.php" class="btn btn-danger">Delete</a>  Ne sers à rien , et ne marche pas-->
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/members/create.php" class="btn-success create">Créer</a>
                                <!-- <a href="/views/backend/members/edit.php" class="btn btn-warning disabled">Edit</a> -->
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/articles/create.php" class="btn-success create">Créer</a>


                            </td>
                        </tr>
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/thematiques/create.php" class="btn-success create">Créer</a>
                                <!-- <a href="/views/backend/thematiques/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/thematiques/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Mots-clés</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/keywords/create.php" class="btn-success create">Créer</a>
                                <!-- Les boutons ci dessous sont inutiles -->
                                <!-- <a href="/views/backend/keywords/edit.php" class="btn btn-warning disabled">Edit</a> -->
                                <!-- <a href="/views/backend/keywords/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>

                    <?php }
                    ?>

                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/comments/create.php" class="btn-success create">Créer</a>
                                <!-- <a href="/views/backend/comments/edit.php" class="btn btn-warning disabled">Edit</a> -->
                                <!-- <a href="/views/backend/comments/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn-primary list">Liste</a>
                                <a href="/views/backend/likes/create.php" class="btn-success create">Créer</a>
                                <!-- <a href="/views/backend/likes/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/likes/delete.php" class="btn btn-danger disabled">Delete</a> -->
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>

