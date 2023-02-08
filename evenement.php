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
        <div>
            <p class="date-evenement3">ÉCRIT PAR : Natica
            Le : 1er février 2023
            édité le : 2 février 2023</p>
        </div>
    </div>

    <div class="img-header">
        <img src="/images/lune.svg" alt="Image d'une lune dans l'espace.">
    </div>
</div>

<div>
    <p>Vous n'aurez plus besoin d'un télescope ou d'une fusée pour vous rapprocher des étoiles. Du 4 au 24 février 2023, les astres seront à portée de main à Cap Sciences !
    Nous avons testé cette expérience en avant première et voici notre retour de cette nouvelle aventure. Cap Sciences nous a proposé deux voyages uniques de 30 minutes au milieu des galaxies au sein de son planétarium gonflable. La tête dans les étoiles, allongés sur des fauteuils confortables, plongés dans le noir, nous avons pu découvrir les merveilles de la voute céleste.  
    Ce planétarium a de nombreux atouts, le premier étant son accessibilité. Les films proposés sont simples et compréhensibles dès trois ans. Il propose deux courts-métrages à portée des jeunes et des plus âgés. Un premier dénommé “Séances contées”, qui nous raconte des histoires spatiales avec des airs de petit prince. De quoi émerveiller toute la famille avec un voyage dans l'enfance et les planètes de notre système solaire. Le deuxième, intitulé “Histoires d'étoiles”, est accessible à partir de huit ans. Avec des thématiques plus scientifiques, il se demande d'où venons-nous, qui sommes-nous et où allons-nous, tout en nous en mettant plein la vue avec ses images sublimes de la galaxie. 
    Pour nous, chasseurs d'expériences inédites, Cap sciences nous a apporté de nouveau du rêve et de la science, pour le plus grand bonheur de nos pupilles.</p>
</div>

<br>
<?php
include 'footer.php';
?>