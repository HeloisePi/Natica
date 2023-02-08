<?php
include '../../../header.php';

//Security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Creer une nouvelle thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/thematique/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom de la thématique</label>
                    <input id="libThem" class="form-control" type="text" name="libThem">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>