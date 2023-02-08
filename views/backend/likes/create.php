<?php
include '../../../header.php';
$membres = sql_select('membre', '*');
$articles = sql_select('article', '*');
?>

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
                    <label for="numMemb">Quel Membre ?</label>
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
        <div class="form-group mt-2">

            <div class="form-group">
                <label for="titre">Nombre de likes</label>
                <input id="likeA" class="form-control" type="int" name="likeA" pattern = "[0-1]" required>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            
            
           
            
            </form>
        </div>
    </div>
</div>

</form>