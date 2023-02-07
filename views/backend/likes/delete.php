<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];
$numArt = $_GET['numArt'];


?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer le like</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="likeA"> </label>
                    <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo ($numArt); ?>" readonly="readonly">
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value="<?php echo ($numMemb); ?>" readonly="readonly">
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="likeA" value="<?php echo ($likeA); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Voulez-vous enlever le like ?</button>
                </div>
            </form>
        </div>
    </div>
</div>