<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un like - eXim</title>
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/articles.css">
</head>
<body>

<?php
include '../../../header.php';
$membres = sql_select('membre', '*');
$articles = sql_select('article', '*');


//Security check
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}
?>

<div class="fil-ariane3">
    <a href="/index.php" class="liens-ariane">Accueil</a>
    <p class="separation"> > </p>
    <a href="/views/backend/dashboard.php" class="liens-ariane">Dashboard</a>
    <p class="separation"> > </p>
    <a href="/views/backend/likes/create.php" class="liens-ariane">Nouveau like</a>
</div>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création de likes</h1>
        </div>
        <div class="col-md-12">
            <!--Formulaire pour sélectionner un membre-->
            <form action="<?php echo ROOT_URL . '/api/likes/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Quel membre ?</label>
                    <select id="numMemb" class="form-control" type="int" name="numMemb" required>
                    <?php
                    foreach( $membres as $membre){
                        ?> <option value="<?php echo $membre['numMemb'] ?>"> <?php echo $membre['pseudoMemb']; ?> </option>
                        <?php
                    }
                    ?>


                </select>



                </div>
        </div>
        <div class="form-group">
            <label for="titre">Numéro de l'article ?</label>

            <select id="numArt" class="form-control" type="int" name="numArt" required>
                    <?php
                    foreach( $articles as $article){
                        ?> <option value="<?php echo $article['numArt'] ?>"> <?php echo $article['libTitrArt']; ?> </option>
                        <?php
                    }
                    ?>


                </select>

        </div>

            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn-primary list">Créer</button>
            </div>
            
            

            
            </form>
        </div>
    </div>
</div>

</form>