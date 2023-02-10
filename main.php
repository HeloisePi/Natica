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

        $affiche = sql_select('article', '*', "", "numArt DESC");
        $articles = sql_select('article', '*', "", "numArt DESC", 3);

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
                <?php foreach ($articles as $article) { ?>
                    <img class="image-affiche" src="src/images/uploads/<?php echo ($article['urlPhotArt']) ?>" alt="Image decriptive article.">
                <?php } ?>
                <div class="info-rect">
                    <h3><?php echo ($affiche['libTitrArt']) ?></h3>
                    <p> <?php
                        echo ($affiche['libChapoArt']);
                        ?></p>
                    <p>
                        Écrit par : Natica <br> Le : <?php echo ($affiche['dtCreArt']) ?>
                    </p>
                </div>
            </div>
        </div>
        <!--  <div class="container colonne">
        <div class="row square">
            <div class="bloc-square"></div>
                <div class="info-square">
                    <h3>gjbfvji</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.!</p>
                </div>
            <div class="col-3"></div>
        </div>
    </div> -->
        <div class="container colonne">
            <div class="row square">
                <div class="bloc-square">
                    <?php foreach ($articles as $article) { ?>
                        <img src="src/images/uploads/<?php echo ($article['urlPhotArt']) ?>" <?php
                                                                                            } ?> alt="Image descriptive article">
                </div>
                <div class="info-square">
                    <?php foreach ($articles as $article) { ?>
                        <h3><?php echo ($article['libTitrArt']) ?></h3>
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
                    <h3><?php echo substr(($article['libTitrArt']), 0, 23) . "..." ?></h3>
                    <div class="bloc-decouvrir">
                        <div class="info-decouvrir">
                            <img src="src/images/uploads/<?php echo ($article['urlPhotArt']) ?>" alt="Image descriptive article">                            
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>

</body>

</html>