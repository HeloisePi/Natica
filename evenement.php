<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événement - eXim</title>
    <link rel="stylesheet" href="/src/css/connection.css">
    <link rel="stylesheet" href="/src/css/evenement.css">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>

<?php
include 'header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/articles.php" class="liens-ariane">Article</a>
    <p class="separation"> > </p>
    <a href="/evenement.php" class="liens-ariane">Événement</a>
</div>

<div class="header-evenement">
    <div class="texte-header">
        <div class="display-flex-date date-evenement1">
            <p>Événement : &emsp;</p>
            <p class="date-evenement2"> du 4 au 24 février</p>
        </div>
        <div>
            <p class="titre-article-evenement">Le planétarium, une expérience dans les étoiles</p>
            <p class="date-evenement1" >
            <span><b>Connaissez-vous les profondeurs de la voie lactée ?</b></span> 
            Pendant les vacances d’hiver, 
            venez découvrir le planétarium et ses films immersifs à Cap Sciences, 
            à Bordeaux centre. Nous avons testé pour vous cette expérience immersive.</p>
        </div>
    </div>

    <div class="img-header">
        <img src="/images/lune.svg" alt="Image d'une lune dans l'espace.">
    </div>
</div>


<br>
<?php
include 'footer.php';
?>