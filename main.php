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
<?php 
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == 3){
                                $msgErreur = $_GET['error'];
                    ?>
                                <span>
                                    <span> Connexion réussie ! </span><br><br>
                                </span>
                        <?php }
                            if ($_GET["error"] == 4){
                                $msgErreur = $_GET['error'];
                    ?>
                                <span>
                                    <span> Vous avez bien été déconnecté ! </span><br><br>
                                </span>
                        <?php }
                        } ?>
    <div class="title">
        <h1 class="titre-eximBordeaux">EXIM BORDEAUX</h1>
        <div class="purple-line"></div>
    </div>
    <div class="under-title">
        <h2  >Expériences Immersives</h2>
    </div>

    <div class="scroll-down">
        <img src="/images/scroll-down.svg" alt="scroll down">
    </div>
</div>


<div class="articles-header">
    <div class="rect">
        <div class="bloc-rect">
            <div class="info-rect">
                <h3>test 1</h3>
                <p> dvdxfcdv</p>
            </div>
        </div>
        <div class="square">
            <div class="bloc-square">
                <div class="info-square 1">
                    <h3>test 2</h3>
                    <p>fvhbdcshujbv</p>
                </div>
            </div>
            <div class="bloc-square">
                <div class="info-square 2">
                    <h3>test 3</h3>
                    <p>dfvicnjef</p>
                </div>
            </div>
            <div class="bloc-square">
                <div class="info-square 3">
                    <h3>test 4</h3>
                    <p>fthjutyhtghytg</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="articles-decouvrir">
<h1>Quelques expériences immersives qui pourraient vous plaire</h1>
    <div class="rect-decouvrir">
        <div class= "titres-decouvrir">
            <h3>Evènement 1</h3>
            <div class="bloc-decouvrir">
                <div class="info-decouvrir">
                </div>
            </div>   
        </div>
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