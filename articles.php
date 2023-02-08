<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="reset.css" href="/src/css/reset.css">
    <link rel="stylesheet" href="/src/css/articles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
    <link rel="stylesheet" href="/assert/Fraunces-VariableFont_SOFT,WONK,opsz,wght.ttf"><link rel="stylesheet" href="/assert/Montserrat-Italic-VariableFont_wght.ttf">
</head>

<body>
<?php
include 'header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/articles.php" class="liens-ariane">Articles</a>
</div>

<div class="articles-decouvrir">
<h1>Quelques expériences immersives qui pourraient vous plaire</h1>

    <div class="rect-decouvrir">
    <a href="/evenement.php">
        <div class= "titres-decouvrir">
            <h3>Evènement 1</h3>
            <div class="bloc-decouvrir">
                <div class="info-decouvrir">
                </div>
            </div>   
        </div>
    </a>
        <div class= "titres-decouvrir">
            <h3>Evènement 2</h3>
            <div class="bloc-decouvrir">
                <div class="info-decouvrir">
                </div>
            </div>
        </div>
        <div class= "titres-decouvrir">
            <h3>Evènement 3</h3>
            <div class="bloc-decouvrir">
                <div class="info-decouvrir">
                </div>
            </div>
        </div>    
    </div>

</div>
</body>
</html>