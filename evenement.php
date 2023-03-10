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
require_once __DIR__ . '/config.php';

$lisezAussi = sql_select('article', '*', "", "numArt DESC");

//tentative de classement par like avortée

//$articleslikes = sql_select('likeart', 'numArt');
//$i = 0;

// foreach ($articleslikes as $articlelike ){
//     $nombreLike = count(sql_select('likeart', 'numArt', "numArt = $articlelike[numArt]")['O']['numArt']);
//     $articleslikes[$i][$nombreLike];
//     $i++;
// }
//print_r($articleslikes);
//print_r(ksort($articleslikes, SORT_NUMERIC ));
//$echo( $nombreLikes[0]['numArt']);
//I = 0
//selct dans la table like art where numArt = numArt en cours count.
//fin de for each i++
//article [$i[nblike = count '*']];

$numArt = $_GET['numArt'];
//$path = $_GET['urlPhotArt'];
$articles = sql_select("ARTICLE", "*", "numArt = $numArt")[0];
$libThem = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt")[0]['libThem'];
$keywords = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt");
$comments = sql_select('ARTICLE INNER JOIN COMMENT ON ARTICLE.numArt = COMMENT.numArt', '*', "ARTICLE.numArt=$numArt");
?>

<div class="fil-ariane2">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/articles.php" class="liens-ariane">Articles</a>
    <p class="separation"> > </p>
    <a href="#!" class="liens-ariane"><?php echo ('<p>' . $libThem . ' ' . ':' . '</p>') ?></a>
</div>

<div class="header-evenement">
    <div class="texte-header">
        <div class="display-flex-date date-evenement1">
            <?php
            echo ('<p>' . $libThem . ' ' . ':' . '</p>') ?>
            <p class="date-evenement2"> date à mettre avec le jazon</p>
        </div>
        <div>
            <p class="titre-article-evenement"><?php
                                                echo ($articles['libTitrArt']) ?></p>
            <p class="date-evenement1">
                <?php
                echo ($articles['libChapoArt']);
                ?></p>
        </div>
        <div>
            <p class="date-evenement3"><?php
                                        echo ('créé par Natica le : ' . $articles['dtCreArt']) ?></p>
        </div>
    </div>

    <div class="img-header" enctype="multipart/form-data">
        <img class="image-lune" src="<?php echo ($articles['urlPhotArt']) ?>" alt="Image d'une lune dans l'espace.">
    </div>
</div>


<div class="container text-start">
    <div class="row align-article-evenement">

        <div class="col-7 ">
            <p class="date-evenement3"> <?php
                                        echo ($articles['libAccrochArt'] . ' ' . $articles['parag1Art']); ?>
            </p>
            <p class="sous-titre-article"><?php
                                            echo ($articles['libSsTitr1Art']);
                                            ?></p>
            <p class="date-evenement3"><?php
                                        echo ($articles['parag2Art']); ?>
            </p>
            <p class="sous-titre-article"><?php
                                            echo ($articles['libSsTitr2Art']); ?>
            </p>
            <p class="date-evenement3"><?php
                                        echo ($articles['parag3Art']); ?>
            </p>
            <br>
            <br>
            <p class="date-evenement3"><?php
                                        echo ($articles['libConclArt']);
                                        ?></p>
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
                <p>Adresse :</p><br>
                <?php
                $file = 'views/backend/articles/data.json'; 
                $data = file_get_contents($file); 
                $obj = json_decode($data); 
                $allArticles = $obj->articles;
                $aidesFirstArticle = $obj->articles[0]->aides;
                



            
                echo($obj->articles[0]->adresse);
                ?>
                <p class="sous-titre-col2"> </p>
            </div>
            <div class="align-element-col2">
                <p>Tarifs :</p>
                <?php
                echo($obj->articles[0]->couts);
                ?>
                <p class="sous-titre-col2"> </p>
            </div>
            <p class="titre-col-2"></p>
                <?php
                foreach($aidesFirstArticle as $aide ){
                    if ($aide->isActive == true){
                        ?><img class="espace-img-col2" src="/assert/svg/<?= $aide->fileName ?>" alt="<?= $aide->name ?>"><br><?php
                        echo $aide->alt; ?> <br> <?php
                    }

                }?>


            <p class="titre-col-2">Lisez aussi :</p>
            <div class="rect-all">
            <?php $lisezAussis = sql_select('article', '*', "", "numArt DESC", 3);?>
                <?php foreach ($lisezAussis as $lisezAussi) { ?>
                    <div class="titres-all">
                        <?php echo ('<a href="/evenement.php?numArt=' . $lisezAussi['numArt'] . ' "><h3>' . $lisezAussi['libTitrArt'] . '</h3></a>'); ?>

                        <div class="bloc-all">
                            
                        <img class="image-lune" src="<?php echo ($lisezAussi['urlPhotArt']) ?>" alt="Image d'une lune dans l'espace.">
                            <div class="info-all">
                                <?php echo ('<p>' . $lisezAussi['dtCreArt'] . '</p>') ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </div>
</div>

<?php 
$commentaires = sql_select('COMMENT', '*', "numArt = $numArt", "numArt DESC");
//$numMemb = $commentaires['numMemb'];
//$pseudoMemb = sql_select('MEMBRE', 'pseudoMemb', "numMemb = $numMemb");
?>


<form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
<input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value=" <?php echo ($numArt) ?>">
<div class="container">
    <div class="row">
        <div class="col-10 align-bloc-comm">
                <label class="date-evenement3 " for="libCom">Votre commentaire :</label>
                <br>
                <textarea type="text" id="commentaire" name="libCom" maxlength="100" class="bloquer-la-taille col-10" required>
                </textarea>
                <br>
                <div class="align-text-atention-comm">
                    <img src="/images/attention-picto.svg" alt="Pictogramme attention">
                    <?php if (isset($_SESSION['numMemb'])){?>
                    <p class="text-com-attention">Merci de bien rester cordial et d’écrire des avis constructifs.</p> <?php }
                    else{ ?>
                        <p class="text-com-attention">Vous devez avoir un compte pour envoyer des commentaires</p>
                    <?php }?>
                </div>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['numMemb'])){?>
<div class="btn-com-envoyer">
<input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value=" <?php echo $_SESSION['numMemb'] ?>">    
    <button type="submit" class="conect1">Envoyer</button>
    <?php } ?>
</div>
</form>
<br>

<?php foreach ($commentaires as $commentaire){
    if (!check_access(2)) {?>
            <div class="container">
                <div class="row espace-commentaire">
                    <div class="col-2 img-pp-coms">
                        <img src="/images/pp.svg" alt="Pictogramme de photo de profile">
                    </div>
                    <div class="col-6 apercu-comm">
                        <p><?php echo $commentaire['libCom'] ?></p>
                    </div>
                <div class = "col-2 signaler-commentaire">
                </div>
                </div>
            </div>
        </form>
    <?php }
    else {?>
        <form action="<?php echo ROOT_URL . '/api/comments/delete.php' ?>" method="post">
        <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value=" <?php echo $commentaire['numCom'] ?>">
            <div class="container">
                <div class="row espace-commentaire">
                    <div class="col-2 img-pp-coms">
                        <img src="/images/pp.svg" alt="Pictogramme de photo de profile">
                    </div>
                    <div class="col-6 apercu-comm">
                        <p></p>
                        <textarea id="libCom" class="form-control" type="text" name="libCom" readonly = "readonly"><?php echo $commentaire['libCom'] ?></textarea>
                    </div>
                    <button type="submit" class="bouton-signaler">Signaler le commentaire</button>
                </div>
            </div>
        </form>

    <?php }
}

include 'footer.php';?>

</body>

</html>