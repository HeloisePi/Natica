<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/membre/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat"> Prenom </label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb">
                    <label for="libStat"> nom </label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                    <label for="libStat"> pseudo </label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                    <label for="libStat"> mot de passe </label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">
                    <label for="libStat"> e-mail</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>