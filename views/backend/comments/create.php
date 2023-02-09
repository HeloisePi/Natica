<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1) || !check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$membres = sql_select('membre', '*');
$articles = sql_select('article', '*');
?>

<!--Bootstrap form to create a new comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">Commentaire *</label>
                    <input id="libCom" class="form-control" type="text" name="libCom" required>



                    <label for="titre">numéro de l'article *</label>

                    <select id="numArt" class="form-control" type="int" name="numArt" required>
                    <?php
                    foreach( $articles as $article){
                        ?> <option value="<?php echo $article['numArt'] ?>"> <?php echo $article['libTitrArt']; ?> </option>
                        <?php
                    }
                    ?>
                </select>
   
                    <label for="titre">numéro du membre *</label>
                    <select id="numMemb" class="form-control" type="int" name="numMemb" required>
                    <?php
                    foreach( $membres as $membre){
                        ?> <option value="<?php echo $membre['numMemb'] ?>"> <?php echo $membre['pseudoMemb']; ?> </option>
                        <?php
                    }
                    ?>


                </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</form>