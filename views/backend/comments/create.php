<?php
include '../../../header.php';

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
                    <input id="numArt" class="form-control" type="int" name="numArt" required>
                    <label for="titre">numéro du membre *</label>
                    <input id="numMemb" class="form-control" type="int" name="numMemb" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</form>