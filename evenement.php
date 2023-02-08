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
        </div class="date-evenement">
            <p>Événement : &emsp;</p>
            
            <p> du 4 au 24 février</p>
        </div>
    </div>

    <div class="img-header">

    </div>
</div>


<br>
<?php
include 'footer.php';
?>