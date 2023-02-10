<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="reset.css" href="/src/css/reset.css">
    <link rel="stylesheet" href="/src/css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
</head>

<body>
    <div class="haut">

        <!-- erreurs à afficher -->
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == 3) {
                $msgErreur = $_GET['error'];
        ?>
                <span>
                    <span> Connexion réussie ! </span><br><br>
                </span>
            <?php }
            if ($_GET["error"] == 4) {
                $msgErreur = $_GET['error'];
            ?>
                <span>
                    <span> Vous avez bien été déconnecté ! </span><br><br>
                </span>
        <?php }
        }
        //requete sql pour afficher les articles                   
        require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


        
        ?>

<!-- début main -->
<div class="title">
    <h1 class="titre-eximBordeaux">EXIM BORDEAUX</h1>
    <div class="purple-line"></div>
</div>
<div class="under-title">
    <h2>Expériences Immersives</h2>
</div>

<div class="scroll-down">
    <img src="/images/scroll-down.svg" class="scroll-down-image" alt="scroll down">
</div>
</div>


<div class="container articles-header">
    <div class="col-2"></div>
    <div class="rect">
        <div class="bloc-rect">
            <?php $articles = sql_select('article', '*', "", "numArt DESC", 1);?>
            <?php foreach ($articles as $article) { ?>
                    <img class="image-affiche" src="<?php echo ($article['urlPhotArt']) ?>" alt="Image decriptive article.">
                <?php } ?>
                <div class="info-rect">
                    <div class="infos">
                    <?php echo ('<a href="/evenement.php?numArt=' . $article['numArt'] . ' "><h3>' . $article['libTitrArt'] . '</h3></a>'); ?>
                    <p> <?php
                        echo ('<a href="/evenement.php?numArt=' . $article['numArt'] . ' ">' . $article['libChapoArt'] . '</a>');
                        ?></p>
                        <p>
                            Écrit par : Natica <br> Le : <?php echo ($article['dtCreArt']) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container colonne">
            <div class="row square">
                <div class="bloc-square">
                <?php $articles = sql_select('article', '*', "", "numArt DESC", 3);?>
                    <?php foreach ($articles as $article) { ?>
                        <img src="<?php echo ($article['urlPhotArt']) ?>" <?php
                                                                        } ?> alt="Image descriptive article">
                </div>
                <div class="info-square">
                    <?php foreach ($articles as $article) {
                        echo ('<a href="/evenement.php?numArt=' . $article['numArt'] . ' "><h3>' . $article['libTitrArt'] . '</h3></a>'); ?>
                    <?php echo ('<p>' . $article['dtCreArt'] . '</p>');
                    }
                    ?>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>


    <div class="articles-decouvrir">
        <h1>Quelques expériences immersives qui pourraient vous plaire</h1>
        <?php $articles = sql_select('article', '*', "", "", 3); ?>
        <div class="rect-decouvrir">
            <?php foreach ($articles as $article) { ?>
                <div class="titres-decouvrir">
                <?php echo('<a href="/evenement.php?numArt=' . $article['numArt'] . ' "><h3>' . substr($article['libTitrArt'], 0, 28). '...' . '</h3></a>');?>
                    <div class="bloc-decouvrir">
                        <img src="<?php echo ($article['urlPhotArt']) ?>" alt="Image descriptive article">                            
                        <div class="info-decouvrir">
                            <img src="<?php echo ($article['urlPhotArt']) ?>" alt="Image descriptive article">
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>

</body>

</html>