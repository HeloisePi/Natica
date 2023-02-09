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
$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", "numArt = $numArt");
$libThem = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt")[0]['libThem'];
$keywords = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt");
$comments = sql_select('ARTICLE INNER JOIN COMMENT ON ARTICLE.numArt = COMMENT.numArt', '*', "ARTICLE.numArt=$numArt");
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
        <?php
            echo ('<p>' . $libThem . ' '. ':'. '</p>') ?>
            <p class="date-evenement2"> date à mettre avec le jazon</p>
        </div>
        <div>
            <p class="titre-article-evenement"><?php
                    echo ($articles[0]['libTitrArt']) ?></p>
            <p class="date-evenement1" >
            <?php
                    echo ($articles[0]['libChapoArt']);
                    ?></p>
        </div>
        <div>
            <p class="date-evenement3"><?php
                        echo ('créé par Natica le : ' .$articles[0]['dtCreArt']) ?></p>
        </div>
    </div>

    <div class="img-header">
        <img class="image-lune" src="/images/lune.svg" alt="Image d'une lune dans l'espace.">
    </div>
</div>

<div class="container text-start">
    <div class="row align-article-evenement">

        <div class="col-7 ">
            <p class="date-evenement3" >Vous n'aurez plus besoin d'un télescope ou d'une fusée pour vous rapprocher des étoiles. Du 4 au 24 février 2023, les astres seront à portée de main à Cap Sciences !</p>
            <p class="date-evenement3" >Nous avons testé cette expérience en avant première et voici notre retour de cette nouvelle aventure. Cap Sciences nous a proposé deux voyages uniques de 30 minutes au milieu des galaxies au sein de son planétarium gonflable. La tête dans les étoiles, allongés sur des fauteuils confortables, plongés dans le noir, nous avons pu découvrir les merveilles de la voute céleste.</p>
            <p class="date-evenement3" >Ce planétarium a de nombreux atouts, le premier étant son accessibilité. Les films proposés sont simples et compréhensibles dès trois ans. Il propose deux courts-métrages à portée des jeunes et des plus âgés. Un premier dénommé “Séances contées”, qui nous raconte des histoires spatiales avec des airs de petit prince. De quoi émerveiller toute la famille avec un voyage dans l'enfance et les planètes de notre système solaire. Le deuxième, intitulé “Histoires d'étoiles”, est accessible à partir de huit ans. Avec des thématiques plus scientifiques, il se demande d'où venons-nous, qui sommes-nous et où allons-nous, tout en nous en mettant plein la vue avec ses images sublimes de la galaxie.</p>
            <p class="date-evenement3" >Pour nous, chasseurs d'expériences inédites, Cap sciences nous a apporté de nouveau du rêve et de la science, pour le plus grand bonheur de nos pupilles.</p>
            <p class="sous-titre-article">Une bulle dans les nuages</p>
            <p class="date-evenement3" >En quoi consiste cet événement et qu'est ce qu'un planétarium ? Nous avons été plongé dans le noir, entouré d'une immense toile avec une capacité de plus de cent personnes. Équipé d'un projecteur, la salle est plongée dans le ciel nocturne. Le film est alors projeté. Cela nous donne la sensation d'être dans un vaisseau spatial qui se déplace à la vitesse de la lumière à travers plus de 3000 étoiles.</p>
            <p class="date-evenement3" >Réalisées à partir des images prises par la NASA et par des observatoires du monde entier, leur beauté nous a fait quitter la Terre. Il est important de savoir que le planétarium de Cap Science est éphémère. Situé près de Bordeaux centre, il est fortement accessible en transport en commun ou en voiture avec les parkings payants aux alentours.</p>
            <p class="date-evenement3" >C’est un lieu pour les passionnés d'astronomie, mais aussi pour les familles ou les personnes en situation de handicap. Un guide audio très riche avec un travail sonore et musical peut vous accompagner et vous aider à découvrir les secrets des étoiles si vous êtes malvoyant. Il dispose de plus d'un dispositif d'accès simplifié avec des ascenseurs pour les personnes à mobilités réduites.</p>
            <p class="date-evenement3" >Le planétarium propose également des projections interactives et ludiques, à destination des enfants, mais auxquels les familles peuvent aussi participer.</p>
            <p class="sous-titre-article">Une expérience dans les étoiles</p>
            <p class="date-evenement3" >Entre le salon de réalité virtuelle Vortex à Bordeaux ou le Rêvarium, les concurrents au Planétarium de cap sciences ne sont pas à négliger.</p>
            <p class="date-evenement3" >Certes, le planétarium de Cap sciences n'arrive pas à la cheville des bassins de lumières. De plus, la base sous-marine est référencée comme l'un des plus grands centres numériques au monde, avec une histoire très riche. Nous n'avons peut-être pas passé autant de temps que sur d'autres expériences immersives de Bordeaux, il est vrai. De plus, l'expérience n'était pas complètement immersive sur tous les aspects. En revanche, cela va paraître choquant, mais c'est ce qui fait tout le charme du planétarium de Cap sciences.</p>
            <p class="date-evenement3" >Étant venus avec nos enfants, ils ont eu encore plus de plaisir à faire un planétarium adapté à leur âge. Et ce, même s'ils en ont moins appris qu'en découvrant les histoires folles de la base sous-marine. Ces évènements sont démarqués par le fait qu'ils sont sans cesse renouvelés, accessibles et simplistes. C'est un pari fort qui est lancé et nous trouvons honnêtement que le Planétarium remplit le contrat. Nous avons passé de bons moments en famille. N'est-ce pas finalement un des buts des expériences immersives ?</p>
            <p class="date-evenement3" >Pour finir, nous vous recommandons grandement cet évènement magique et encore plus en famille. En revanche, si vous souhaitez une expérience complètement immersive et passer une journée entière à découvrir des lieux et merveilles, cet événement n'est peut-être pas fait pour vous...</p>
            <br>
            <br>
            <p class="date-evenement3">Est-ce que l’événement du planétarium est fait pour vous ?</p>
            <p class="date-evenement3">Si vous êtes à la recherche de nouvelles connaissances riches qui vont révolutionner la science, le planétarium n’est clairement pas fait pour vous.</p>
            <p class="date-evenement3">Cependant, si vous souhaitez plonger dans l’infini de l’espace quelques instants, seul ou avec vos proches, c’est une expérience que vous devez définitivement tester.</p>
            <br>
            <br>
            <div class="sous-titre-article align-texte-com-picto">
                <p>Commentaires :</p>
                <img class="picto-com" src="/images/icon-com.svg" alt="Pictogramme des commentaires">
            </div>
        </div>

        <div class="col-5 deuxieme-col">
            <p class="titre-col-2">Informations sur le lieu :</p>
            <div class="api-google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2828.1292245637246!2d-0.5564116!3d44.859664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55288fe04778c1%3A0x93bb1087fb9940ec!2sHangar%2020%2C%20Quai%20de%20Bacalan%2C%2033300%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1675932814425!5m2!1sfr!2sfr" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="align-element-col2">
            <p>Dates :</p>
            <p class="sous-titre-col2">04/02/2023 au 24/02/2023</p>
            </div>
            <div class="align-element-col2">
            <p>Tarifs :</p>
            <p class="sous-titre-col2">5 euros €</p>
            </div>
            <p class="titre-col-2">Accessibilité :</p>
            <img class="espace-img-col2" src="/assert/svg/Poussette-RVB.svg" alt="Pictograme d'une poussette"><br>
            <img class="espace-img-col2" src="/assert/svg/Deficients-moteur-RVB.svg" alt="Pictograme d'une poussette"><br>
            <img class="espace-img-col2" src="/assert/svg/Deficients-mentaux-RVB.svg" alt="Pictograme d'une poussette"><br>
            <img class="espace-img-col2" src="/assert/svg/Deficients-visuels-RVB.svg" alt="Pictograme d'une poussette"><br>
            <img class="espace-img-col2" src="/assert/svg/Deficients-moteur-avec-accompagnateur-RVB.svg" alt="Pictograme d'une poussette"><br>
            <img class="espace-img-col2" src="/assert/svg/Personnes-a-mobilite-reduite-RVB.svg" alt="Pictograme d'une poussette"><br>
            <p class="titre-col-2">Lisez aussi :</p>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-10 align-bloc-comm">
            <label class="date-evenement3 " for="libCom">Votre commentaire :</label>
            <br>
            <textarea class="bloquer-la-taille col-10" id="numCom" name="libCom">
            </textarea>
            <br>
            <div class="align-text-atention-comm">
                <img src="/images/attention-picto.svg" alt="Pictogramme attention">
                <p class="text-com-attention">Merci de bien rester cordial et d’écrire des avis constructifs.</p>
            </div>
        </div>
    </div>
</div>

<div class="btn-envoyer-comm">
    <button type="submit" class="conect1">Envoyer</button>
</div>
<br>

<div class="container">
    <div class="row espace-commentaire">

        <div class="col-2 img-pp-coms">
            <img src="/images/pp.svg" alt="Pictogramme de photo de profile">
        </div>

        <div class="col-6 apercu-comm">
            <p>Trop cool comme article, j'adore !</p>
        </div>
        <div class="col-8 fonction-like text-end">
            <img src="/images/coeur-picto.svg" alt="Pictogramme pour les likes">
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>