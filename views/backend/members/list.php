<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres - eXim</title>
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

//Load all members
$members = sql_select("membre", "*");
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/members/list.php" class="liens-ariane">Membres</a>
</div>

<!-- Bootstrap default layout to display all members in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>n° Membre</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <th>E-mail</th>
                        <th>Mot de passe</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td><?php echo $member['numMemb']; ?></td>
                            <td><?php echo $member['prenomMemb']; ?></td>
                            <td><?php echo $member['nomMemb']; ?></td>
                            <td><?php echo $member['pseudoMemb']; ?></td>
                            <td><?php echo $member['eMailMemb']; ?></td>
                            <td><?php echo $member['passMemb']; ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn-primary list edit">Éditer</a>
                                <a href="delete.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php
            if (isset($_GET["error"]) && $_GET["error"] == 1) {
                $msgErreur = $_GET['error'];
            ?>
                <span>
                    <span> Erreur, l'adresse mail saisie est déjà attribuée, veuillez entrer une autre adresse mail </span><br><br>
                </span>
            <?php
            } ?>

            <a href="create.php" class="btn-success list">Créer</a>
        </div>
    </div>

    
</body>
</html>