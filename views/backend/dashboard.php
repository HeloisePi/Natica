<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Écrire un article - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">

<?php
include '../../header.php';
//Security check
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}
?>

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
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Create</a>

                                <!-- <a href="/views/backend/status/delete.php" class="btn btn-danger">Delete</a>  Ne sers à rien , et ne marche pas-->
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-primary ">List</a>
                                <a href="/views/backend/members/create.php" class="btn btn-success ">Create</a>
                                <!-- <a href="/views/backend/members/edit.php" class="btn btn-warning disabled">Edit</a> -->
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-primary ">List</a>
                                <a href="/views/backend/articles/create.php" class="btn btn-success ">Create</a>


                            </td>
                        </tr>
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary ">List</a>
                                <a href="/views/backend/thematiques/create.php" class="btn btn-success ">Create</a>
                                <!-- <a href="/views/backend/thematiques/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/thematiques/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-primary ">List</a>
                                <a href="/views/backend/comments/create.php" class="btn btn-success ">Create</a>
                                <!-- <a href="/views/backend/comments/edit.php" class="btn btn-warning disabled">Edit</a> -->
                                <!-- <a href="/views/backend/comments/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary ">List</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success ">Create</a>
                                <!-- <a href="/views/backend/likes/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/likes/delete.php" class="btn btn-danger disabled">Delete</a> -->
                        </tr>
                        <tr>
                            <td>Mots-clés</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-success ">Create</a>
                                <!-- Les boutons ci dessous sont inutiles -->
                                <!-- <a href="/views/backend/keywords/edit.php" class="btn btn-warning disabled">Edit</a> -->
                                <!-- <a href="/views/backend/keywords/delete.php" class="btn btn-danger disabled">Delete</a> -->
                            </td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>

