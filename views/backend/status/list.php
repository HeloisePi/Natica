<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des statuts - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
    <link rel="stylesheet" href="/src/css/dashboard.css">
</head>
<body>
    


<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

//Load all statuses
$statuses = sql_select("STATUT", "*");
?>



<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/status/list.php" class="liens-ariane">Statuts</a>
</div>


<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des statuts</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['numStat']; ?></td>
                            <td><?php echo $status['libStat']; ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo $status['numStat']; ?>" class="btn-primary list">Éditer</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn-success list">Créer</a>
        </div>
    </div>
</div>


</body>
</html>