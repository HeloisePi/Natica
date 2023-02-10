<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
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
$articles = sql_select("article", "*");
?>
<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/articles/list.php" class="liens-ariane">Liste des articles</a>
</div>
<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>n° Article</th>
                        <th>Date de création</th>
                        <th>Titre </th>
                        <th>Chapô</th>
                        <th>Accroche</th>
                        <th>Paragraphe 1</th>
                        <th>Sous-titre 2</th>
                        <th>Paragraphe 2</th>
                        <th>Sous-titre 3</th>
                        <th>Paragraphe 3 </th>
                        <th>Conclusion</th>
                        <th>Image</th>
                        <th>Mots-clés</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['dtCreArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['libAccrochArt']; ?></td>
                            <td><?php echo $article['parag1Art']; ?></td>
                            <td><?php echo $article['libSsTitr1Art']; ?></td>
                            <td><?php echo $article['parag2Art']; ?></td>
                            <td><?php echo $article['libSsTitr2Art']; ?></td>
                            <td><?php echo $article['parag3Art']; ?></td>
                            <td><?php echo $article['libConclArt']; ?></td>
                            <td><?php echo $article['urlPhotArt']; ?></td>
                            <td><?php echo $article['numThem']; ?></td>

                            <td>
                                <a href="edit.php?numArt=<?php echo $article['numArt']; ?>" class="btn-primary list suppr">Éditer</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger suppr">Supprimer</a>
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